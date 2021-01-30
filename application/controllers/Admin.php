<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // jalankan helper
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user']  = $this->db->get_where('admin', ['username'
        => $this->session->userdata('username')])->row_array();

        $this->load->view('admin/dashboard', $data);
    }


    public function artikel()
    {
        $data['title'] = 'Artikel';
        $data['user']  = $this->db->get_where('admin', ['username'
        => $this->session->userdata('username')])->row_array();
        $data['artikel'] = $this->db->get('artikel')->result();

        $this->load->view('admin/artikel', $data);
    }


    public function add_artikel()
    {
        $data['title'] = 'Tambah Data Artikel';
        $data['user']  = $this->db->get_where('admin', ['username'
        => $this->session->userdata('username')])->row_array();

        // set validasi form
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul Artikel', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/add_artikel', $data);
        } else {
            // jika validasi benar
            $this->add_artikel_act();
        }
    }


    public function add_artikel_act()
    {
        $data = [
            'tanggal'          => htmlspecialchars($this->input->post('tgl')),
            'judul_artikel'    => htmlspecialchars($this->input->post('judul')),
            'deskripsi'        => htmlspecialchars($this->input->post('deskripsi')),
            'image'            => $this->upload_image() //fungsi upload gambar
        ];
        $this->db->insert('artikel', $data);

        $this->session->set_flashdata('add-success', 'Berhasil');
        redirect('admin/artikel');
    }


    public function upload_image()
    {
        // konfigurasi upload file
        $config['upload_path']      = './assets/img/artikel/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = '2048';
        $config['overwrite']        = true;
        $config['filename']         = $_FILES['image']['name'];

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            // upload foto baru
            return $this->upload->data('file_name');
        }
        return 'default.jpg';
    }


    public function update_artikel($id)
    {
        $data['title'] = 'Update Data Artikel';
        $data['user']  = $this->db->get_where('admin', ['username'
        => $this->session->userdata('username')])->row_array();
        $data['artikel'] = $this->M_artikel->get_artikel_by_id($id)->result();

        $this->form_validation->set_rules('id', 'Id', 'required|trim');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('judul', 'Judul Artikel', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('image', 'Gambar', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/update_artikel', $data);
        } else {
            $this->update_artikel_act();
        }
    }


    public function update_artikel_act()
    {
        $old_image = $this->input->post('old_image');
        // jika foto tidak kosong
        if (!empty($_FILES["image"]["name"])) {
            // upload foto baru
            $image = $this->upload_image();
            if ($image) {
                // hapus foto lama di folder
                unlink(FCPATH . 'assets/img/artikel/' . $old_image);
            }
        } else {
            // upload foto lama
            $image =  $old_image;
        }

        $id = $this->input->post('id');
        $data = [
            'tanggal'       => $this->input->post('tgl'),
            'judul_artikel' => htmlspecialchars($this->input->post('judul')),
            'deskripsi'     => htmlspecialchars($this->input->post('deskripsi')),
            'image'         => $image
        ];
        $this->M_artikel->update_artikel($id, $data);

        $this->session->set_flashdata('update-success', 'Berhasil');
        redirect('admin/artikel');
    }

    public function delete_artikel($id)
    {
        // ambil gambar berdasarkan id
        $get_image = $this->db->get_where('artikel', ['id' => $id])->row();
        $query = $this->M_artikel->delete_artikel($id);
        if ($query) {
            // hapus gambar pada folder
            unlink(FCPATH . 'assets/img/artikel/' . $get_image->image);
            redirect('admin/artikel');
        }
    }
}

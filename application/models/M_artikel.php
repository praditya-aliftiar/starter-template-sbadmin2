<?php

class M_artikel extends CI_Model
{

    public function get_artikel_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('artikel');
    }


    public function update_artikel($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('artikel', $data);
        // if ($this->db->affected_rows() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    }


    public function delete_artikel($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('artikel');
    }
}

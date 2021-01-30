<?php

// fungsi mengaktifkan menu sidebar
function activate_menu($menu)
{
    $ci = get_instance();
    // menangkap class yang ada di sidebar
    $classname = $ci->router->fetch_class();
    // menambahkan class active pada menu di sidebar
    return $classname == $menu ? 'active' : '';
}


// untuk login 
function is_logged_in()
{
    $ci = get_instance();
    // jika tidak ada session username 
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    }
}

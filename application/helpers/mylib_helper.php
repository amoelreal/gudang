<?php
// $sql_menu = "SELECT * FROM tabel_menu WHERE id in(select id_menu from tbl_user_rule where id_level_user=$id_level_user) and is_main_menu=0";
// $main_menu = $this->db->query($sql_menu)->result();

function cmb_dinamis($name, $table, $field, $pk, $selected = null, $extra = null) {
    $ci = & get_instance();
    $cmb = "<select name='$name' class='form-control' $extra>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $row) {
        $cmb .="<option value='" . $row->$pk . "'";
        $cmb .= $selected == $row->$pk ? 'selected' : '';
        $cmb .=">" . $row->$field . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}

function chekAksesModule() {
    $ci = & get_instance();
    // ambil parameter uri segment untuk controller dan method
    $controller = $ci->uri->segment(1);
    $method = $ci->uri->segment(2);

    // chek url
    if (empty($method)) {
        $url = $controller;
    } else {
        $url = $controller . '/' . $method;
    }

    // chek id menu nya
    $menu = $ci->db->get_where('menu', array('link' => $url))->row_array();
    $level_user = $ci->session->userdata('id_level_user');

    if (!empty($level_user)) {

        // chek apakah level ini diberikan hak akses atau tidak
        $chek = $ci->db->get_where('tbl_user_rule', array('id_level_user' => $level_user, 'id_menu' => $menu['id']));
        if ($chek->num_rows() < 1 and $method != 'data' and $method != 'add' and $method != 'edit' and $method != 'delete') {
            echo "ANDA TIDAK BOLEH MENGAKSES MODUL INI ";
            echo " <a href='index.php'>refresh</a>";
            die;
        }
    } else {
        redirect('auth');
    }

}


?>

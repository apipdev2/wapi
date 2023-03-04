<?php
if (! function_exists('kelurahan')) {
    function kelurahan($id_kel)
    {
        $ci = get_instance();
        $kel = $ci->db->get_where('kelurahan',['id_kel'=>$id_kel])->row();

        return $kel->nama;
    }
}
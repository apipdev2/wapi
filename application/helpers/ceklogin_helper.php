<?php 

function is_login()
{
	$ci = get_instance();
	$logged_in = $ci->session->userdata('logged_in');

	$user = $ci->db->get_where('tbl_user',['email'=>$ci->session->userdata('email')]);

	if ($user->num_rows() < 1) {
		$ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum Login!</div>');
		redirect('Auth');
	}
	elseif($logged_in != TRUE || empty($logged_in)){
		$ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum Login!</div>');
		redirect('Auth');
	}
}

?>
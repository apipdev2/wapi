<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_login();
	}

	public function index()
	{
		$id_user = $this->session->userdata('id_user');	

		$data = [
    		'title' => 'Dashboard',
    	];

	    $this->load->view('template/header');
		$this->load->view('template/navbar');		
	    $this->load->view('index',$data);
		$this->load->view('template/footer');
	}

	

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Broadcast extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function personal()
	{
		$data = [
    		'title' => 'Broadcast Personal',
    		'kontak' => $this->db->get('tbl_kontak')->result(),
    	];

    	$this->form_validation->set_rules('message','Pesan','required');

    	if ($this->form_validation->run()==FALSE) {

    		$this->load->view('template/header');
			$this->load->view('template/navbar');		
		    $this->load->view('broadcast/personal',$data);
			$this->load->view('template/footer');
    	}else{

    		$pesan = $this->input->post('message');
    		$kontak = $this->input->post('kontak'); 
    		

    		for ($i=0; $i < count($kontak); $i++) { 

    			if ($_FILES['files']['name']) {
	    			$file_dikirim = new CURLFile($_FILES['files']['tmp_name'], $_FILES['files']['type'], $_FILES['files']['name']);
	    			$data = [
	    				'message' => $pesan,
	    				'number' => $kontak[$i],
	    				'file_dikirim'=>$file_dikirim
	    			];
	    		}else{
	    			$data = [
	    				'message' => $pesan,
	    				'number' => $kontak[$i],
	    			];
	    		}

    			$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => 'http://localhost:8000/send-message',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS => $data,
				));

				$response = curl_exec($curl);
				curl_close($curl);
    			
				echo json_encode($response);
    			

				$datas = [
					"number" => $kontak[$i],// number sender
					"message" => $pesan,
					"files" =>  $_FILES['files']['name'],
					"created_at" => date('Y-m-d H:i:s')
				];
				$this->db->insert('outbox',$datas);

    		}

    		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Kirim pesan.!</div>');
            redirect('Broadcast/personal');
    	}

	    
	}

	public function group()
	{
		$data = [
    		'title' => 'Broadcast Group',
    		'group' => $this->db->get('tbl_group')->result(),
    	];
    	$this->form_validation->set_rules('message','Pesan','required');

    	if ($this->form_validation->run()==FALSE) {
		    $this->load->view('template/header');
			$this->load->view('template/navbar');		
		    $this->load->view('broadcast/group',$data);
			$this->load->view('template/footer');
		}else{

    		$pesan = $this->input->post('message');
    		$group = $this->input->post('group');

    		

    		for ($i=0; $i < count($group); $i++) { 

    			if ($_FILES['files']['name']) {
	    			$file_dikirim = new CURLFile($_FILES['files']['tmp_name'], $_FILES['files']['type'], $_FILES['files']['name']);
	    			$data = array('message' => $pesan,'id_group' => $group[$i],'file_dikirim'=>$file_dikirim);
	    		}else{
	    			$data = array('message' => $pesan,'id_group' => $group[$i]);
	    		}

    			$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => 'http://localhost:8000/send-group-message',
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'POST',
				  CURLOPT_POSTFIELDS => $data,
				));

				$response = curl_exec($curl);

				curl_close($curl);
    			
    			var_dump($response);

				$datas = [
					"number" => $group[$i],// number sender
					"message" => $pesan,
					"files" =>  $_FILES['files']['name'],
					"created_at" => date('Y-m-d H:i:s')
				];
				$this->db->insert('outbox',$datas);

    		}

    		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Kirim pesan.!</div>');
            redirect('Broadcast/personal');
    	}

	}

}

/* End of file Broadcast.php */
/* Location: ./application/controllers/Broadcast.php */
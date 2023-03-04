<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webhook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$json_result = file_get_contents('php://input');
		$result = json_decode($json_result, true);

		$data = [
			'group_id' => $result['id_group'],
			'nama_group' => $result['name_group'],
		];

		$cek = $this->db->get_where('tbl_group',$data)->num_rows();
		if ($cek < 1) {
			$this->db->insert('tbl_group',$data);
			echo json_encode (['response'=>'berhasil insert']);
		}else{
			echo json_encode (['response'=>'duplicate data']);

		}
		
		
	}

}

/* End of file Webhook.php */
/* Location: ./application/controllers/Webhook.php */
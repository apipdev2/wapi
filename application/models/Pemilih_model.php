<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemilih_model extends CI_Model {

	

	public function getPemilih()
	{
		return $this->db->select('p.nama as nama_pemilih, p.*, prov.nama as nama_prov, prov.*, kab.nama as nama_kab, kab.*, kec.nama as nama_kec, kec.*, kel.nama as nama_kel, kel.*')
                    ->from('tbl_pemilih p')
                    ->join('provinsi prov','prov.id_prov = p.id_provinsi')
                    ->join('kabupaten kab','kab.id_kab = p.id_kabupaten')
                    ->join('kecamatan kec','kec.id_kec = p.id_kecamatan')
                    ->join('kelurahan kel','kel.id_kel = p.id_kelurahan')
                    ->get()->result();
	}

}

/* End of file Pemilih_model.php */
/* Location: ./application/models/Pemilih_model.php */
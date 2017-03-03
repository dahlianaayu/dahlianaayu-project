<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['nama']= "Tentang Saya";
		$data = array(
				'nama' => "Dahliana Ayu Lestari",
				'alamat' => "Citra Garden C2 no 12 Sidoarjo",
				'ttl' => "Malang, 04 Mei 1997",
				'ptn' => "Politeknik Negeri Malang",
				'jurusan' => "Teknik Informatika",
				'nim' => "1541180057",
				'hobi' => "Ngoding",
				'citacita' => "Programmer",
				);
		$this->load->view('about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */

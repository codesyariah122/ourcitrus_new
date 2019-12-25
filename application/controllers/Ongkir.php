<?php

class Ongkir Extends CI_Controller {
	
	public function index()
	{
		$data['title'] = "OC-Ongkir";
		
		$this->load->view('front-end/cek_ongkir/Base_Core/header.php', $data);
		$this->load->view('front-end/cek_ongkir/index.php', $data);
		$this->load->view('front-end/cek_ongkir/Base_Core/footer.php');
	}
	
	public function cek_kabupaten()
	{
		$this->load->view('front-end/cek_ongkir/cek_kabupaten.php');
	}
	
	public function cek_ongkir()
	{
		$this->load->view('front-end/cek_ongkir/cek_ongkir.php');
	}
	
}
<?php 
class Office extends CI_Controller {
	
	public function index()
	{
		
				/* assets untuk header data */
		 $data['office'] = [
								'0' => 'alamatkantor',
							   ];	
							   
		
		$data['smooth_page'] = 'office';
		$data['header_title'] = 'Informasi Kantor';
		$data['office_page'] = 'office';
		$data['uri'] = $_SERVER['REQUEST_URI'];
		$data['page_uri'] = '/Product/Nutrisi';
		$data['headernutrisi'] = 'Nutrisi';
		$data['title']="Alamat Kantor";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');
		
		$this->load->view('front-end/work/header.php', $data);
		$this->load->view('front-end/work/alamat/index.php', $data);
		$this->load->view('front-end/chat.php');
		$this->load->view('front-end/whatsapp.php');
		$this->load->view('front-end/work/footer.php');
	}
	
}
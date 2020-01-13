<?php 
class SocialMedia extends CI_Controller {
	
	public function index()
	{
		
				/* assets untuk header data */
		 $data['social'] = [
								'0' => 'socialmedia',
							   ];	
		
		$data['uri'] = $_SERVER['REQUEST_URI'];
		$data['page_uri'] = '/Product/Nutrisi';
		$data['headernutrisi'] = 'Nutrisi';
		$data['title']="Social Media";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');
		
		$this->load->view('front-end/work/alamat/layouting/header.php', $data);
		$this->load->view('front-end/work/social/index.php', $data);
		$this->load->view('front-end/chat.php');
		$this->load->view('front-end/whatsapp.php');
		$this->load->view('front-end/work/alamat/layouting/footer.php');
	}
	
}
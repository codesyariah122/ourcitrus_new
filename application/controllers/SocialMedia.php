<?php 
class SocialMedia extends CI_Controller {
	
	public function index()
	{
		
				/* assets untuk header data */
		 $data['social'] = [
								'0' => 'socialmedia',
							   ];	
		
		$data['smooth_page'] = 'sosmed';					

		$data['header_title'] = 'Social Media';
		
		$data['sosmed_page'] = 'sosmed';
		$data['headersosmed'] = 'Social Media';
		$data['title']="Social Media";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');
		
		$this->load->view('front-end/work/header.php', $data);
		$this->load->view('front-end/work/social/index.php', $data);
		$this->load->view('front-end/chat.php');
		$this->load->view('front-end/whatsapp.php');
		$this->load->view('front-end/work/footer.php');
	}
	
}
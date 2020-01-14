<?php 
class CustService extends CI_Controller {
	
	public function index()
	{
		
				/* assets untuk header data */
		 $data['cs'] = [
						'0' => 'cs',
						];	
		
		$data['smooth_page'] = 'cs';								
		$data['cs_page'] = 'cs';
		$data['header_title'] = 'Customer Service';
		$data['title']="Customer Service";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');
		
		$this->load->view('front-end/work/header.php', $data);
		$this->load->view('front-end/work/cs/index.php', $data);
		$this->load->view('front-end/chat.php');
		$this->load->view('front-end/whatsapp.php');
		$this->load->view('front-end/work/footer.php');
	}
	
}
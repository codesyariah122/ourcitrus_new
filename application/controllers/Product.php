<?php 
class Product extends CI_Controller {
	
	public function Nutrisi()
	{
		
				/* assets untuk header data */
		 $data['data_img'] = [
								'1' => 'WEB 2020 1_1',
								'2' => 'WEB 2020 2_1',
								'3' => 'WEB 2020 3_1'
							];	
		
		$data['img_fluid'] = [
								'1' => 'WEB 2020 4', 
								'2' => 'WEB 2020 A', 
								'3' => 'WEB 2020 4A'
							];
							
		$data['uri'] = $_SERVER['REQUEST_URI'];
		$data['page_uri'] = '/Product/Nutrisi';
		$data['headernutrisi'] = 'Nutrisi';
		$data['title']="Product Nutrisi";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');
		
		$this->load->view('front-end/work/header.php', $data); 
		$this->load->view('front-end/work/product/nutrisi/index.php');
		$this->load->view('front-end/chat.php');
		$this->load->view('front-end/whatsapp.php');
        $this->load->view('front-end/work/footer.php');
	}
	
}
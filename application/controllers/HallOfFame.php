<?php 

class HallOfFame extends CI_Controller {

	

	public function index()

	{

		

				/* assets untuk header data */

		 $data['halloffame'] = [

								'0' => 'Slide1',

								'1' => 'Slide2',

								'2' => 'Slide3',

								'3' => 'Slide4',

								'4' => 'Slide5',

								'5' => 'Slide6',

								'6' => 'Slide7',

								'7' => 'Slide8',

								'8' => 'Slide9',

								'9' => 'Slide10',

								'10' => 'Slide11',

								'11' => 'Slide12',

								'12' => 'Slide13',

								'13' => 'Slide14',

								'14' => 'Slide15',

								'15' => 'Slide16',

								'16' => 'Slide17',

								'17' => 'Slide18'

							];	
		$data['smooth_page'] = 'achiever';					

		$data['header_title'] = 'Hall Of Fame';
		
		$data['halloffame_page'] = 'halloffame';

		$data['title']="Achiever";

		$data['img_url'] = base_url();

		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');

		

		$this->load->view('front-end/work/header.php', $data);

		$this->load->view('front-end/work/achiever/index.php', $data);

		$this->load->view('front-end/chat.php');

		$this->load->view('front-end/whatsapp.php');

		$this->load->view('front-end/work/footer.php');

	}

	

}
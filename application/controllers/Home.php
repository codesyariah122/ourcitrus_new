<?php
/*
inget inget ieu asset font jeung css anyar
update 12:32 PM
tgl : 12/24/2019
~ tukang ketik andalan negri ~
*/
class Home extends CI_Controller {


    public function index()
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


		$data['data_btn'] = ['btn-light', 'btn-danger', 'btn-primary'];
		$data['data_txt'] = ['Email Order', 'Email Revisi', 'Customer Service'];
		$data['img_table'] = ['1.png','2.png','3.png','4.png','5.png','6.png'];
		$data['link_img'] = ['Product/Nutrisi','Info','HallOfFame','Kantor','SocialMedia','CustService'];
		/* end header data */

        $data['title']="OURCITRUS";
        $data['headertitle']="OURCITRUS";
		$data['img_url'] = base_url();
		$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');

		$data['icons'] = ['<i class="fas fa-glasses fa-3x"></i>', '<i class="fas fa-bullhorn fa-3x"></i>', '<i class="fas fa-award fa-3x"></i>', '<i class="fas fa-city fa-3x"></i>', '<i class="fas fa-share-alt fa-3x"></i>', '<i class="fas fa-shield-alt fa-3x"></i>'];

		$data['produk_page'] = ['Product/Nutrisi', 'Product/kosmetik'];
		$data['produk_name'] = ['Produk Nutrisi', 'Produk Kosmetik'];

		$data['link_page'] = [		'InfoTerbaru',
									'HallOfFame',
									'Office',
									'SocialMedia',
									'CustService'
							];

		$data['link_title'] = ['Halaman Produk', 'Info Terbaru', 'Hall Of Fame', 'Kantor', 'Social Media', 'Customer Service' ];

        $this->load->view('front-end/layouting/header.php', $data);
        $this->load->view('front-end/main.php', $data);
				//$this->load->view('front-end/modal_home.php');
        $this->load->view('front-end/chat.php');
				$this->load->view('front-end/chat2.php');
				$this->load->view('front-end/whatsapp.php');
        $this->load->view('front-end/layouting/footer.php');
    }

}

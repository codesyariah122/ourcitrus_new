<?php
class InfoTerbaru extends CI_Controller {
	public function index()
	{

			$data['news_1'] = [
								'header' => 'Professional Business Consultant',
								'title' => 'PT Gemilang Citrus Berjaya',
								'date' => '2020-01-13',
								'content_feature' =>
								'<small>0852 8071 6969 Telkomsel<br/>
											0878 8091 6969 XL</small>',
								'link' => 'news-1',
								'img_thumb' => 'assets/img/news/news1/flyer.jpg'
							  ];


			$data['news_2']  = [
								'header' => 'Business',
								'title' => 'Info Ourcitrus',
								'date' => '2020-01-14',
								'content_feature' => '<small>
										Di Beritahukan Kepada seluruh member OURCITRUS yang ingin melakukan TOP UP AUTOMAINTAIN silahkan melakukan transfer nominal sesuai kekurangan saldo<br/>
										ke rekening BCA A/n PT GEMILANG CITRUS BERJAYA<br/>
										Kemudian kirim bukti transfer ke WA<br/>
										Admin ourcitrus (office hours)<br/>
										085395716711( after office hours).<br/>
								  </small>',
								'link' => 'news-2',
								'img_thumb' => 'assets/img/news/news2/topup2-3.jpg'
							  ];

			$data['news_3']  = [
								'header' => 'Business',
								'title' => 'OURCITRUS By PT. Gemilang Citrus Berjaya',
								'date' => '2020-01-14',
								'content_feature' => 'This is a wider card with supporting text below as a natural lead-in to additional content.',
								'link' => 'news-3',
								'img_thumb' => '2.jpg'
							  ];


			$data['smooth_page'] = 'infoterbaru';

			$data['header_title'] = 'Info Terbaru';

			$data['infoterbaru_page'] = 'infoterbaru';

			$data['title']="Info Terbaru";

			$data['img_url'] = base_url();

			$data['font_header'] = base_url('assets/fonts/Vacaciones-font-ffp-defharo.ttf');


					$this->load->view('front-end/work/header.php', $data);

					$this->load->view('front-end/work/news/index.php', $data);

					$this->load->view('front-end/chat.php');

					$this->load->view('front-end/chat2.php');

					$this->load->view('front-end/whatsapp.php');

					$this->load->view('front-end/work/footer.php');


	}

}

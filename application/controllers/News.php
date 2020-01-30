<?php
class News extends CI_Controller {

	public function Featured()
	{

			require_once 'ReadNews.php';

			$read = new ReadNews();

			$data['news_1'] = [
								'header' => 'Professional Business Consultant',
								'title' => 'PT Gemilang Citrus Berjaya',
								'date' => '11 Januari 2020',
								'content_feature' => '0852 8071 6969 Telkomsel<br/>
											0878 8091 6969 XL',
								'link' => $read->ProfessionalBusinessConsultant(),
								'img_thumb' => 'fsddsr.jpg'
							  ];


			$data['news_2']  = [
								'header' => 'Business',
								'title' => 'Living the Dream on a Sunny Island',
								'date' => '13 Januari 2020',
								'content_feature' => 'This is a wider card with 	supporting text below as a natural lead-in to additional content.',
								'link' => 'news-2',
								'img_thumb' => 'blog1.jpg'
							  ];

			$data['news_3']  = [
								'header' => 'Business',
								'title' => 'OURCITRUS By PT. Gemilang Citrus Berjaya',
								'date' => '13 Januari 2020',
								'content_feature' => 'This is a wider card with supporting text below as a natural lead-in to additional content.',
								'link' => 'news-3',
								'img_thumb' => '2.jpg'
							  ];

			$this->load->view('front-end/work/news/index.php', $data);

	}

}


<section id="<?=$smooth_page?>" class="details-card mb-2">

          <a href="<?=base_url().$news_2['img_thumb']?>" data-toggle="lightbox" data-gallery="gallery">
          <img src="<?=base_url().$news_2['img_thumb']?>" alt=""><br/><br/>
          </a>


					<a href="<?=base_url().$news_1['img_thumb']?>" data-toggle="lightbox" data-gallery="gallery">
					<img src="<?=base_url().$news_1['img_thumb']?>" alt="">
          </a>

	<div class="container-fluid">
	 <?php $this->view('front-end/work/news/modal_news.php');?>
	</div>

</section>

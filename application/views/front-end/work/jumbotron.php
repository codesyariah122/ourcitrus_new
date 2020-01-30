<div class="jumbotron jumbotron-xl" style="
<?php
		$img_url=base_url();
		//echo $_SERVER['REQUEST_URI'];
		if($_SERVER['REQUEST_URI'] === '/Product/kosmetik'):
		echo "background-image: url('".$img_url."assets/img/product/jumbotron/demoimage23.jpg');";
		elseif($_SERVER['REQUEST_URI'] === '/Product/Nutrisi'):
		echo "background-image: url('".$img_url."assets/img/product/jumbotron/pngfuel3.png');";
		else:
		echo "background-image: url('".$img_url."assets/img/product/jumbotron/demoimage22.jpg');";
		endif;
		?>
">
	<div class="container text-center text-white h-100">

<?php if($smooth_page !== ''):?>
		<h1 class="page-header display-2" data-aos="fade-left"><strong data-aos="fade-right"> <br/> <?=$header_title?></strong></h1>
		<h5 class="header-slogan font-weight-light" data-aos="fade-top"> For<strong>Today</strong> And <strong> Future  </h5><br/><br/>

		<a href="<?=base_url($_SERVER['REQUEST_URI'])?>/#<?=$smooth_page?>" class="page-scroll" data-aos="fade-up"><i class="fas fa-angle-down fa-6x text-white"></i></a><br/><br/>
<?php else:?>

		<?php if($_SERVER['REQUEST_URI'] === '/Product/kosmetik'): ?>
		<h1 class="produk-header display-2" data-aos="fade-left"><strong><?=$kosmetik?> </strong></h1>
		<h5 class="produk-slogan font-weight-light mb-2" data-aos="fade-right">For<strong> Today</strong> And <strong> Future <strong></h5><br/><br/>

		<a href="<?=base_url($_SERVER['REQUEST_URI'])?>/#<?=$kosmetik_page?>" class="page-scroll" data-aos="fade-up"><i class="fas fa-angle-down fa-6x text-white"></i></a><br/><br/>

			<a href="<?=base_url()?>Product/Nutrisi" class="btn btn-outline-danger btn-round" data-aos="fade-left">Produk Nutrisi</a>

		<?php elseif($_SERVER['REQUEST_URI'] === '/Product/Nutrisi'):?>
		<h1 class="produk-header display-2" data-aos="fade-left"><strong> <br/> <?=$nutrisi?></strong></h1>
		<h5 class="produk-slogan font-weight-light mb-2" data-aos="fade-right">For<strong> Today</strong> And <strong> Future </h5><br/><br/>

		<a href="<?=base_url($_SERVER['REQUEST_URI'])?>/#<?=$nutrisi_page?>" class="page-scroll" data-aos="fade-up"><i class="fas fa-angle-down fa-6x text-white"></i></a><br/><br/>

		<a href="<?=base_url()?>Product/kosmetik" class="btn btn-outline-primary btn-round" data-aos="fade-left">Produk Kosmetik</a>
		<?php endif;?>

<?php endif;?>

	</div>
	<p class="bottom-align-text-absolute">
		<span class="d-block text-center text-white" data-aos="fade-top">Made with <i class="fas fa-heart text-danger"></i><i class="fas fa-heart text-danger fa-2x"></i> by OURCITRUS Team</span>
	</p>
</div>

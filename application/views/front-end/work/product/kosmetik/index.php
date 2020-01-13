
<section class="container-fluid" id="<?=$kosmetik_page?>">
<div class="row">

<?php for($i=0; $i<=count($produk_kosmetik)-1; $i++): ?>

<div class="col-lg-4 pr-0 pl-0">
		<div class="single_portfolio_text mb-2 mr-2">
			<img src="<?=base_url()?>assets/img/product/new_product/kosmetik/<?=$produk_kosmetik[$i]?>" data-aos="fade-up" alt="" />
				<div class="portfolio_images_overlay text-center">
					<h6 class="clrd-font"><?=$title_kosmetik[$i]?></h6>
					<p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i></p>
				<a class="btn btn-primary text-white" data-toggle="modal" data-target=".bd-<?=$modal_kosmetik[$i]?>-modal-lg">Click here</a>
			</div>
		</div>
		
</div>

<?php endfor;?>

</div>
</section>


<section id="office" class="text-center">
<div class="row">
<?php $this->view('front-end/work/product/kosmetik/modal_kosmetik.php');?>
</div>

</div><!-- end parallax -->
</section>
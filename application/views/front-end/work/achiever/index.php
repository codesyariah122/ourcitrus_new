<!-- jumbotron with background image 
<div class="jumbotron jumbotron-xl jumbotron-fluid overlay overlay-blue">
	<div class="container text-center text-white h-100">
		<div id="carousel" class="carousel slide carousel-slide" data-ride="carousel">
		<ol class="carousel-indicators">
			    <? foreach($halloffame as $img => $key):?>
		    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$img;?>" <?php echo($img < 1) ? "active" : "" ; ?>></li>		
			<? endforeach; ?>
		</ol>

		<div class="carousel-inner shadow-sm rounded">
		    <?php foreach($halloffame as $img => $key):?>
			<div class="carousel-item <?php echo ($img < 1 ) ? "active" : ""; ?>">
				<img class="d-block w-100" src="<?=base_url()?>assets/img/achiever/<?=$key;?>.PNG">
			</div>
			<?php endforeach;?>
	    </div>
</div>
	</div>
	<p class="bottom-align-text-absolute">
		<span class="d-block text-center text-white">Made with <i class="fas fa-heart text-danger"></i> by OURCITRUS</span>
	</p>
</div>
jumbotron with background image -->
<br/><br/><br/>
<div class="container mt-4">
<section id="<?=$smooth_page?>">
<?php foreach($halloffame as $img => $key):?>

  <div class="row">
    <a href="<?=base_url()?>assets/img/achiever/<?=$key?>.PNG" data-toggle="lightbox" data-gallery="gallery">
      <img data-aos="fade-up" src="<?=base_url()?>assets/img/achiever/<?=$key?>.PNG" class="img-fluid mb-2">
    </a>
  </div>
  <?php endforeach;?>

</section>
</div>


<!-- jumbotron with background image -->
<section id="home">
<div id="carousel" class="carousel slide carousel-slide" data-ride="carousel">
		<ol class="carousel-indicators">
			    <? for($i=0; $i<=count($data_img)-1;$i++):?>
		    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i;?>" <?php if($i == 0): echo 'class="active"'; endif;?>></li>		
			<? endfor; ?>
		</ol>

		<div class="carousel-inner shadow-sm rounded">
		    <?php foreach($data_img as $img => $key):?>
			<div class="carousel-item <?php if($img == '1'): echo 'active'; endif;?>">
				<img class="d-block w-100" src="<?=$img_url?>assets/img/product/new/<?=$key;?>.png" alt="<?php switch($img){case '1': echo 'First slide'; break; case '2': echo 'Second Slide'; break; case '3': echo 'Third Slide'; break; }?>">
			</div><!-- carousel item -->
			<?php endforeach;?>
	    </div>
</div>
<div class="container-fluid">
<div class="col-sm-12 text-center"> 
<!-- <a class="btn btn-danger" href="https://admin.ourcitrus.id" style="margin-top:-1.5em;">Email Service</a> -->
</div>
</div>
<!-- button after image -->
</section>






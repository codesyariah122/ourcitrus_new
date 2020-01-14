<main>
<!-- suport system -->
<section id="office" data-aos="fade-up">
		<!-- d-flex intisari nu badag -->
		<div class="d-flex justify-content-end support-system">
			
				<img src="<?=$img_url?>assets/img/product/new/<?=$img_fluid['2'];?>.png">
				
				
				<!-- kanggo button d-flex -->
				<div class="d-flex justify-content-around">
					<!-- div style -->
					<div class="kanggo-mobile">
						<div class="btn-group-vertical" role="group" aria-label="Basic example">
						  <a href="#" data-aos="fade-left" class="btn btn-sm btn-danger btn-round legalitas">Legalitas</a>
						  <a href="#" data-aos="fade-left" class="btn btn-sm btn-success btn-round manajemen">Manajemen</a>
						  <a href="#" data-aos="fade-left" class="btn btn-sm text-white btn-cyan btn-round support">Support System</a>
						</div>
					</div><!-- end div style -->
				</div>
				<!-- end button d-flex -->
				
			
		</div>
		<!-- end section d-flex intisari -->
			
</section>
<!-- end support system -->

<!-- image table di looping ajah -->
<section class="image-table" id="work" style="background-color: rgba(0,0,0,0.1);">
<div class="pt-0">
    <div class="row"><!-- row1 -->
	
		  <div class="col-lg-4 pr-0 pl-0" data-aos="fade-up">
			<div class="hovereffect">
				<img src="<?=base_url()?>assets/img/product/new/New/<?=$img_table[0];?>"alt="">
				<div class="overlay">
				   <h2><?=$link_title[0]?></h2>
				   		<?php  for($i=0;$i < count($produk_page); $i++): ?>
							<a href="<?=base_url()?><?=$produk_page[$i];?>" data-aos="fade-left" class="btn <?php if($produk_page[$i] == 'Product/Nutrisi'): echo 'btn-success btn-sm'; else:  echo 'btn-danger btn-sm'; endif;?> btn-round  shadow-lg" <?php if($produk_page[$i] == 'Product/Nutrisi'): echo 'style="margin-top: 7em; margin-left: -1em;"'; else: echo 'style="margin-top: 7em; margin-left: 1em;"'; endif; ?>>
							<?=$produk_name[$i]?>
							</a>
						<?php endfor;  ?>		   
				</div>
			</div>
		</div>
		
<?php $value = array_keys($img_table); 
//print_r($value); echo $value[0]."=>".$img_table[0];
for($i=1; $i<=count($img_table); $i++): 
?>
		<div class="col-lg-4 pr-0 pl-0" data-aos="fade-up">
			<div class="hovereffect">
				<img src="<?=base_url()?>assets/img/product/new/New/<?=$img_table[$i]?>" alt="">
				<div class="overlay">
				   <h2><?=$link_title[$i]?></h2>
				   		<a href="<?=base_url()?><?=$link_page[$i-1]?>" data-aos="fade-right" class="btn btn-danger btn-lg btn-round shadow-lg" style="margin-top: 7em;">Buka halaman</a>	   
				</div>
			</div>
		</div>
<?php if($value[$i] == 2): break; endif; endfor;?>
	</div><!-- row1 -->
	
	<div class="row"><!-- row2 -->
	<?php for($i=3; $i<=count($img_table)-1; $i++):?>
	<div class="col-lg-4 pr-0 pl-0" data-aos="fade-up">
        <div class="hovereffect">
				<img src="<?=base_url()?>assets/img/product/new/New/<?=$img_table[$i]?>" alt="">
				<div class="overlay">
				   <h2><?=$link_title[$i]?></h2>
				   		<a href="<?=base_url()?><?=$link_page[$i-1]?>" data-aos="fade-right" class="btn btn-danger btn-lg btn-round shadow-lg" style="margin-top: 7em;">Buka halaman</a>				
			</div>
		 </div>
      </div>
	  <?php endfor; ?>
	</div><!-- end row2 -->
	
</div>
</section>
<!-- end image table -->
</main>
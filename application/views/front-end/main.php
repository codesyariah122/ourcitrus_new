<main>
<!-- suport system -->
<section id="office">
		<!-- d-flex intisari nu badag -->
		<div class="d-flex justify-content-end support-system">
			
				<img src="<?=$img_url?>assets/img/product/new/<?=$img_fluid['2'];?>.png">
				
				
				<!-- kanggo button d-flex -->
				<div class="d-flex justify-content-around">
					<!-- div style -->
					<div class="kanggo-mobile">
						<div class="btn-group-vertical" role="group" aria-label="Basic example">
						  <a href="#" data-aos="fade-left" class="btn btn-danger btn-round legalitas">Legalitas</a>
						  <a href="#" data-aos="fade-left" class="btn btn-primary btn-round manajemen">Manajemen</a>
						  <a href="#" data-aos="fade-left" class="btn text-white btn-cyan btn-round support">Support System</a>
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

  <!-- DEMO 4 -->
 <div class="pt-0">
    <div class="row">
	
      <!-- DEMO 4 Item-->
      <div class="col-lg-4 pr-0 pl-0">
        <div class="hover hover-4 text-white"><img src="<?=base_url()?>assets/img/product/new/New/<?=$img_table[0];?>" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h4 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light"><?=$icons[0];?></span></h4>
            <p class="hover-4-description text-justify mb-0 small">
				<?=$hover_caption[0];?>
			<?php  for($i=0;$i < count($produk_page); $i++): ?>
			<a href="<?=base_url()?><?=$produk_page[$i];?>" class="btn <?php if($produk_page[$i] == 'Product/Nutrisi'): echo 'btn-outline-success'; else:  echo 'btn-outline-danger'; endif;?> btn-round btn-sm shadow-lg" <?php if($produk_page[$i] == 'Product/Nutrisi'): echo 'style="margin-left: -1em;"'; else: echo 'style="margin-left: 1em;"'; endif; ?>>
			<?=$produk_name[$i]?>
			</a>
				<?php endfor;  ?>
			</p>
          </div>
        </div>
      </div>
<?php $value = array_keys($img_table); 
//print_r($value); echo $value[0]."=>".$img_table[0];
for($i=1; $i<=count($img_table); $i++): 
?>
<!-- DEMO 4 Item-->
      <div class="col-lg-4 pr-0 pl-0">
        <div class="hover hover-4 text-white"><img src="<?=base_url()?>assets/img/product/new/New/<?=$img_table[$i]?>" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light"><?=$icons[$i]?></span></h3>
            <p class="hover-4-description text-uppercase mb-0 small">
			<?=$hover_caption[$i]?>
			<a href="<?=base_url()?><?=$link_page[$i-1]?>" class="btn btn-sm btn-outline-danger btn-round shadow-lg">Buka halaman</a>
			</p>
          </div>
        </div>
      </div>
	  <?php if($value[$i] == 2): break; endif; endfor;?>
    </div><!-- row1 -->	
	
	<div class="row"><!-- row2 -->
	<?php for($i=3; $i<=count($img_table)-1; $i++):?>
	<div class="col-lg-4 pr-0 pl-0">
        <div class="hover hover-4 text-white"><img src="<?=base_url()?>assets/img/product/new/New/<?=$img_table[$i]?>" alt="">
          <div class="hover-overlay"></div>
          <div class="hover-4-content">
            <h3 class="hover-4-title text-uppercase font-weight-bold mb-0"><span class="font-weight-light"><?=$icons[$i]?></span></h3>
            <p class="hover-4-description text-uppercase mb-0 small">
			<?=$hover_caption[$i]?>
			<a href="<?=base_url()?><?=$link_page[$i-1]?>" class="btn btn-sm btn-outline-danger btn-round shadow-lg">Buka halaman</a>
			</p>
          </div>
        </div>
      </div><!-- end row2 -->
	  <?php endfor; ?>
</div><!-- end pt-0 -->

</section>
<!-- end image table -->

</main>


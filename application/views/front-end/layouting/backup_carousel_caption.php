<?php $i=0; do{ echo '<br/>'; $i++; } while($i <= 24);?>

<?php switch($img): case 1: ?>
					<div class="container">
						<div class="btn-wrapper">
						<h2 data-aos="fade-left" class="display-4 sacramento"><?=$data_caption[0];?></h2>
							<a href="https://admin.ourcitrus.id/<?=$data_link[0];?>" data-aos="fade-right" class="btn btn-block <?=$data_btn[0];?> btn-round"><?=$data_txt[0];?></a>
						</div>
					</div>
				<?php break; case 2:?>
					<div class="container">
						<div class="btn-wrapper">
						<h2 data-aos="fade-left" class="display-4 sacramento"> <?=$data_caption[1];?> </h2>
							<a href="https://admin.ourcitrus.id/<?=$data_link[1];?>" data-aos="fade-right" class="btn btn-block <?=$data_btn[1];?> btn-round"><?=$data_txt[1];?></a>
						</div>
					</div>
				<?php break; case 3:?>
					<div class="container">
						<div class="btn-wrapper">
						<h2 data-aos="fade-left" class="display-4 sacramento"> <?=$data_caption[2];?> </h2>
							<a href="https://admin.ourcitrus.id/<?=$data_link[2];?>" data-aos="fade-right" class="btn btn-block <?=$data_btn[2];?> btn-round"><?=$data_txt[2];?></a>
						</div>
					</div>
				<?php break; default: endswitch;?>
				<!--end button after image -->
				
				
				
					<!-- caption 
				<div class="carousel-caption d-none d-md-block">
				<?php if($img == 1):?>
				<h2 data-aos="fade-left" class="display-4 sacramento"><?=$data_caption[0];?></h2>
				<?php elseif($img == 2):?>
				<h2 data-aos="fade-right" class="display-4 sacramento"><?=$data_caption[1];?></h2>
				<?php elseif($img == 3):?>
				<h2 data-aos="fade-top" class="display-4 sacramento"><?=$data_caption[2];?></h2>
				<?php endif;?><br/>
				</div> end caption -->
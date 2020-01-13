<?php 
$this->produk_nutrisi = [$twa, $gcs, $spk, $acb, $med, $rcc, $mpa];
?>
<?php for($i=0; $i<=count($produk_nutrisi)-1; $i++):?>
<div class="modal fade bd-<?=$modal_nutrisi[$i]?>-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
	   <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <?=$this->produk_nutrisi[$i]?>
	<a href="<?=base_url()?>assets/img/product/new_product/<?=$produk_nutrisi[$i]?>" data-toggle="lightbox" data-gallery="gallery">
    <img src="<?=base_url()?>assets/img/product/new_product/<?=$produk_nutrisi[$i]?>" class="img-fluid mb-2">
	</a>
    </div>
  </div>
</div>
<?php endfor;?>
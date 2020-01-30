<?require_once (dirname(__FILE__)).'/data_modal.php';?>
<?php for($i=0; $i<=count($news_link)-1; $i++):?>
<div class="modal fade bd-<?=$news_link[$i]?>-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
	   <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	<div class="container">
     <h4 class="display-5">Info Business OURCITRUS</h4>
     <hr>
     <?=$content[$i]?>
	</div>

	<a href="<?=base_url().$img[$i]?>" data-toggle="lightbox" data-gallery="gallery">
    <img src="<?=base_url().$img[$i]?>" class="img-fluid mb-2">
	</a>

    </div>
  </div>
</div>
<?php endfor;?>

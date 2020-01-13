
<br/><br/><br/>
<div class="container mt-4">
<section id="office" class="text-center">
<?php foreach($office as $img => $key):?>
  <div class="row">
    <a href="<?=base_url()?>assets/img/office/<?=$key?>.png" data-toggle="lightbox" data-gallery="gallery">
      <img src="<?=base_url()?>assets/img/office/<?=$key?>.png" class="img-fluid mb-2">
    </a>
  </div>
  <?php endforeach;?>

</section>
</div>


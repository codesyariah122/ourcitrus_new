
<br/><br/>
<div class="container mt-4">
<section id="achiever">
<?php foreach($social as $img => $key):?>
  <div class="row">
    <a href="<?=base_url()?>assets/img/sosmed/<?=$key?>.png" data-toggle="lightbox" data-gallery="gallery">
      <img src="<?=base_url()?>assets/img/sosmed/<?=$key?>.png" class="img-fluid mb-2">
    </a>
  </div>
  <?php endforeach;?>

</section>
</div>



<br/><br/>
<div class="container mt-4">
<section id="achiever">
<?php foreach($cs as $img => $key):?>
  <div class="row">
    <a href="<?=base_url()?>assets/img/cs/<?=$key?>.png" data-toggle="lightbox" data-gallery="gallery">
      <img src="<?=base_url()?>assets/img/cs/<?=$key?>.png" class="img-fluid mb-2">
    </a>
  </div>
  <?php endforeach;?>

</section>
</div>


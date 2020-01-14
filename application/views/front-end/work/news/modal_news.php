<?php $news_link=[$news_1['link'], $news_2['link']]; ?>
<?php for($i=0; $i<=count($news_link)-1; $i++):?>
<div class="modal fade bd-<?=$news_link[$i]?>-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
	   <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	<div class="container">
     <h4 class="display-5">Info Business OURCITRUS</h4>
	 <blockquote class="blockquote">
		Di Beritahukan Kepada seluruh member OURCITRUS yang ingin melakukan TOP UP AUTOMAINTAIN silahkan melakukan transfer nominal sesuai kekurangan saldo<br/>
		ke rekening BCA A/n PT GEMILANG CITRUS BERJAYA<br/>
		Kemudian kirim bukti transfer ke WA<br/>
		Admin ourcitrus (office hours)<br/>
		085395716711( after office hours).<br/>
	 </blockquote>
	</div>
	<a href="<?=base_url()?>assets/img/news/news2/topup2-0.jpg" data-toggle="lightbox" data-gallery="gallery">
    <img src="<?=base_url()?>assets/img/news/news2/topup2-0.jpg" class="img-fluid mb-2">
	</a>
	
	<a href="<?=base_url()?>assets/img/news/news2/topup2-1.jpg" data-toggle="lightbox" data-gallery="gallery">
    <img src="<?=base_url()?>assets/img/news/news2/topup2-1.jpg" class="img-fluid mb-2">
	</a>
	
	<a href="<?=base_url()?>assets/img/news/news2/topup2-2.jpg" data-toggle="lightbox" data-gallery="gallery">
    <img src="<?=base_url()?>assets/img/news/news2/topup2-2.jpg" class="img-fluid mb-2">
	</a>
	
	<a href="<?=base_url()?>assets/img/news/news2/topup2-3.jpg" data-toggle="lightbox" data-gallery="gallery">
    <img src="<?=base_url()?>assets/img/news/news2/topup2-3.jpg" class="img-fluid mb-2">
	</a>
	
    </div>
  </div>
</div>
<?php endfor;?>

<nav class="navbar topnav navbar-expand-lg navbar-dark navbar-inner fixed-top" style="
<?php 
if($_SERVER['REQUEST_URI'] === '/Product/Kosmetik'): echo 'background-color:#fcd5b5;'; 
elseif($_SERVER['REQUEST_URI'] === '/Product/Nutrisi'): echo 'background-color:moccasin;'; endif;?>">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse dual-nav order-1 order-md-0">
    <ul class="navbar-nav mr-2">
      <li class="nav-item">
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>

  <div class="navbar-collapse collapse dual-nav order-2 order-md-1 justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link page-scroll" href="<?=base_url()?>#home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link page-scroll" href="<?=base_url()?>#office">Office</a>
      </li>
    </ul>
  </div>

  <a href="<?=base_url()?>home?page=OURCITRUS" class="navbar-brand mx-auto order-0 order-md-2 p-2">ourcitrus.id</a>

  <div class="navbar-collapse collapse dual-nav order-3 order-md-3">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link page-scroll" href="<?=base_url()?>#work">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link page-scroll" href="https://admin.ourcitrus.id/EmailService">Service</a>
      </li>
    </ul>
  </div>

  <div class="navbar-collapse collapse dual-nav order-4 order-md-4 justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="tombol btn btn-block btn-round" href="https://login.ourcitrus.id">Login</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div><br/><br/>

</nav>

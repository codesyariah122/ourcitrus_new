<?php
function mailservice($param=''){
    $url="https://$param.ourcitrus.id";
    return $url;
}
?>
<nav class="navbar topnav navbar-expand-lg navbar-dark navbar-inner fixed-top">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
      <span class="sr-only">Toggle navigation</span>
    </button>

  <div class="navbar-collapse collapse dual-nav order-1 order-md-0">
    <ul class="navbar-nav">
      <li class="nav-item ml-5">
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>

  <div class="navbar-collapse collapse dual-nav order-2 order-md-1 justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link page-scroll" href="
        <?=base_url()?>#home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link page-scroll" href="<?=base_url()?>#office">Office</a>
      </li>
    </ul>
  </div>

  <a href="<?=base_url()?>#home" class="page-scroll navbar-brand mx-auto order-0 order-md-2 p-2">ourcitrus.id</a>

  <div class="navbar-collapse collapse dual-nav order-3 order-md-3">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link page-scroll" href="<?=base_url()?>#work">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link page-scroll" href="<?=mailservice("admin");?>">Service</a>
      </li>
    </ul>
  </div>

  <div class="navbar-collapse collapse dual-nav order-4 order-md-4 justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="tombol btn btn-block btn-round" href="https://login.ourcitrus.id">Login</a><br/>
      </li>
      <li class="nav-item ml-2">

      </li>
    </ul>
  </div><br/><br/>

</nav>

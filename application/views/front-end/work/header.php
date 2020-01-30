<!DOCTYPE html>
<!--
update 10:56 PM
tgl : 12/23/2019 / hari senin

kit untuk website :
kit untuk slide pakai hammer.js
kit untuk translansi conten di elemen pakai anchor ui kit dari bootstrap pakai component = data-aos

untuk framework pakai bootstrap versi 4.1

~ tukang ketik andalan negri ~
-->
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/logo.png">
<link rel="icon" type="image/png" href="<?=base_url()?>assets/img/logo.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title><?=$title?></title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" type="text/css">
<!-- CSS -->
<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet"/>
<link href="<?=base_url()?>assets/css/vendor/aos.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/hover_img/component.css" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Julius+Sans+One|Montserrat+Alternates|Neucha|Poiret+One&display=swap" rel="stylesheet">

<?php $this->view('front-end/layouting/style.php');?>

<style type="text/css">
html {
  scroll-behavior: smooth;
}
   @font-face {
         font-family: "Vacaciones";
         src: url('<?=$font_header;?>');
         }


   .navbar-brand {
         font-family: "Vacaciones";
    }
	.header-slogan {
		font-family: 'Indie Flower', cursive;
	}
	.page-header {
		font-family: 'Poiret One', cursive;
	}
	.produk-header{
		font-family: 'Julius Sans One', sans-serif;
	}
	.produk-slogan{
		font-family: 'Neucha', cursive;
	}

	.jumbotron{
		background-attachment: fixed;
		background-size:cover;
		background-position:0 -100px;
		background-position: center;
		background-repeat: no-repeat;
	}

/*card post*/
.details-card {
	margin-top:-1em;
}

.card-content {
	background: #ffffff;
	border: 4px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img {
	position: relative;
	overflow: hidden;
	border-radius: 0;
	z-index: 1;
}

.card-img img {
	width: 100%;
	height: auto;
	display: block;
}

.card-img span {
	position: absolute;
    top: 15%;
    left: 12%;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
	padding: 1.25rem;
}

.card-desc h3 {
	color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
	color: #747373;
    font-size: 14px;
	font-weight: 400;
	font-size: 1em;
	line-height: 1.5;
	margin: 0px;
	margin-bottom: 20px;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
.btn-card{
	background-color: #1ABC9C;
	color: #fff;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}


</style>

</head>

<body>

<? $this->view('front-end/work/navbar.php'); ?>

<? $this->view('front-end/work/jumbotron.php');?>

<?php $this->view('front-end/add_to_any.php');?>

<div class="parallax">

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
<?php $this->view('front-end/layouting/style.php');?>

<style type="text/css">
   @font-face {
         font-family: "Vacaciones";
         src: url('<?=$font_header;?>');
         }


   .navbar-brand {
         font-family: "Vacaciones";
    }
	#achiever{
     margin-top:5em;
	}
	#office{
		margin-top:5em;
	}
	section {padding:2rem;}
.bg-primary {background-color:#007aeb;color:#fff;}
.bg-gray {background-color:#cccccc;}
</style>

</head>
    
<body> 

<? $this->view('front-end/work/achiever/layouting/navbar.php'); ?>







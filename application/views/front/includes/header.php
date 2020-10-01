<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="IMS">
    <meta name="description" content="Idea My Space work with the best companies of National & International standard">
    <meta name="CreativeLayers" content="">
    <!-- css file -->
    <link rel="stylesheet" href="<?php echo base_url(FRONT_ASSETS);?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(FRONT_ASSETS);?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(FRONT_ASSETS);?>css/dashbord_navitaion.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(FRONT_ASSETS);?>css/responsive.css">
    <!--- IMS Styles --->
    <link rel="stylesheet" href="<?php echo base_url(FRONT_ASSETS);?>css/ims-style.css">
    <!-- Title -->
    <title>Idea My Space </title>
    <!-- Favicon -->
    <link href="<?php echo base_url(FRONT_ASSETS);?>images/favicon.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="<?php echo base_url(FRONT_ASSETS);?>images/favicon.png" sizes="128x128" rel="shortcut icon" />  
    <meta property="og:image" content="http://elefontdesign.in/client/ims/01/images/header-logo.jpg" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/jquery-migrate-3.0.0.min.js"></script>
</head>

<body>
<!-- Quick Contact -->
<div class="QCBG"></div>
<div class="QuickContact">
    <div class="Inner">
        <span class="fa fa-chevron-left SlideArrow" title="Quick Contact"></span>
        <div class="form_grid">
          <h4 class="mb5"><img class="QLogo" src="<?php echo base_url(FRONT_ASSETS);?>images/header-logo.png" />Quick Contact</h4>
          <?php $this->load->view(FRONT_INCLUDES.'quick_contact'); ?>
          <ul class="SocialIcons text-center mb0">
              <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a href="javascript: void()"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
    </div>
</div>
<!-- End Quick Contact -->
    <div class="wrapper">
        <div class="preloader"></div>
        
<?php
 header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
?>
        
        
        

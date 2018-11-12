<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>JSI</title>
    <link  href="<?php bloginfo('template_url'); ?>/css/base.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/common.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include_once 'config.php' ?>
<header >
    <div class="head-top">
        <div class="container head-top-nav">
            <img src="<?php bloginfo('template_url'); ?>/img/head-img.png" alt="">
            <div class="max-nav-img" id="max-nav-img" "><img src="<?php bloginfo('template_url'); ?>/img/menu.png" alt=""></div>
            <div class="phone-hide" id="media">
            <div class="head-nav-div">
                 <?php echo $navInfo?>
            </div>
                <div class="header-logo-right">
                 <img src="<?php bloginfo('template_url'); ?>/img/head-suo.png" alt="">
                 <div class="head-nav-right">
                    <input id="top" class="head-nav-inp f14" value="Search..." />
             </div>
           </div>
         </div> <!--phone-hide 结束-->
        </div><!--head-top-nav 结束-->
        <div class="head-nav-title">
            <div class="container head-center-top">
                <?php
                    $SERVER=$_SERVER['REQUEST_URI'];
                    $explode=explode('/',$SERVER);
                ?>
                <h3>|| <?php echo strtoupper($explode[1])  ?></h3>
            </div><!--head-center-top 结束-->
        </div><!--head-nav-title 结束-->
    </div><!--head-top 结束-->
</header>


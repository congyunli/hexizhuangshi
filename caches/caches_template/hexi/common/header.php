<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>statics/allsure/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>statics/allsure/libs/fancybox/fancybox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>statics/allsure/css/style.css">
    <link rel="shortcut icon" href="<?php echo APP_PATH;?>bitbug_favicon.ico" />
    <!-- QQ客服CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo APP_PATH;?>statics/allsure/qq_kefu/css/lrtk.css" />

    <!--[if lt IE 9]> 
        <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/js/carousel.js"></script>
    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/js/base.js"></script>
    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/libs/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
    <script type="text/javascript">
        $(function(){
            Carousel.init($(".J_Poster"));
        });
    </script>
    <!-- QQ客服JS -->
    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/qq_kefu/js/lrtk.js"></script>

</head>

<body>
<!-- QQ客服 -->
<div id="top"></div>


    <section class="container-width">

        <nav>

            <a href="/">

                <img src="<?php echo APP_PATH;?>statics/allsure/images/logo.png" width="190" alt="">
<!-- 
                <h1>

                  <img class="titleIMG" src="<?php echo APP_PATH;?>statics/allsure/images/allsure.png">

                  A L L S U R E

                </h1>
 -->
            </a>



            <?php include template("common","nav"); ?>

        </nav>

    </section>
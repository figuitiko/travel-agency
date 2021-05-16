<?php
?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
<head>
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Euro Travel</title>

   <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css">-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <![endif]-->

    <!--[if IE 8]>

    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> euro <span>travel</span></a>
        </div> <!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <?php
                $activeHome = '';
                $activeAbout = '';
                $activeServices='';
                $activeContact = '';

                if(is_home() && is_front_page()){
                    $activeHome = 'active';
                }
                if(is_page_template('page-templates/about.php')){
                    $activeAbout = 'active';
                }
                if(is_page_template('page-templates/services.php')) {
                    $activeServices= 'active';
                }
                if(is_page_template('page-templates/contact.php')) {
                    $activeContact='active';
                }
                ?>
                <li class="<?php echo $activeHome; ?>"><a href="/">Home</a></li>
                <li class="<?php echo $activeAbout ?>"><a href="/quienes-somos">about</a></li>
                <li class="<?php echo $activeServices ?>"><a href="/servicios">services</a></li>
                <li class="<?php echo $activeContact ?>"><a href="/contactenos">contact</a></li>
            </ul> <!-- /.nav -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

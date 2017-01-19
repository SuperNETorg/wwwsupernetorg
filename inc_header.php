 <?php
    function header1(
        $body_class = "home-page",
        $wrapper    = false,
        $tooltip    = false,
        $nav_show   = true,
        $nav_item   = "home",
        $title      = "SuperNET",
        $wp = false
    ) {

    // Server root
    $sprnt = "http://" . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("/blog", '', dirname($_SERVER['SCRIPT_FILENAME'])));

    // Relative root
    $root = "";

    if ($nav_item == "blog") {
        $root = ".";
    }

?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<?php if ($wp == false) { ?>
    <title><?= $title ?></title>
<?php } ?>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

     <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $sprnt ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $sprnt ?>/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $sprnt ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $sprnt ?>/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $sprnt ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $sprnt ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $sprnt ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $sprnt ?>/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $sprnt ?>/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?= $sprnt ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= $sprnt ?>/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="<?= $sprnt ?>/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?= $sprnt ?>/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?= $sprnt ?>/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?= $sprnt ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ff6600">
    <meta name="msapplication-TileImage" content="<?= $sprnt ?>/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?= $sprnt ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= $sprnt ?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?= $sprnt ?>/assets/plugins/flexslider/flexslider.css">
<?php if ($tooltip == true) { ?>
    <!-- Tooltip -->
    <link type="text/css" rel="stylesheet" href="<?= $sprnt ?>/tooltip/tooltip.css" />
    <script type="text/javascript" src="<?= $sprnt ?>/tooltip/tooltip.js"></script>
<?php } ?>

    <link type="text/css" rel="stylesheet" href="<?= $sprnt ?>/assets/plugins/rrssb/css/rrssb.css" />

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= $sprnt ?>/assets/css/styles.css">
    <script src="<?= $sprnt ?>/lib/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= $sprnt ?>/lib/sweet-alert.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<?php if ($wp == true) { ?>
    <!-- ****** WP_PHEAD ****** -->
	 <?php  wp_head(); ?>
	<!-- ****** WP_PHEAD ****** -->
<?php } ?>

</head>

<body class="<?= $body_class ?>">

  <div id="notif-bar" class="small">
    <span class="fa fa-info-circle"></span> New website for SuperNET is in the progress. Coming soon.
  </div>

  <style media="screen">
    #notif-bar {
      background: #f89d29;
      color: #fff;
      position: relative;
      text-align: right;
      z-index: 100;
      padding: .5rem 2rem;
    }
  </style>
<?php if ($wrapper == true) { ?>
    <div class="upper-wrapper">
<?php } ?>
    <!-- ******HEADER****** -->
    <header id="header" class="header">
        <div class="container">
            <h1 class="logo">
                <a href="<?= $sprnt ?>/"><span class="text">SuperNET</span><span class="brand"></span></a>
            </h1><!--//supernet logo-->
           <?php
                   include($root . "./inc_navbar.php");
                   navbar($nav_show,$nav_item);
            ?>
        </div><!--//container-->
    </header><!--//header-->
<?php
}
?>

<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
    
    $sprnt = "http://" . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("/blog", '', dirname($_SERVER['SCRIPT_FILENAME'])));

    
    include("../inc_header.php"); 
    
    header1(
        $body_class = "home-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "blog",
        $title      = "", // Title will load from Wordpress
        $wp = true
    );
    
?>

    <div class="headline-bg contact-headline-bg">
    </div><!--//headline-bg-->         

<div id="page" class="hfeed site">

	<div id="content" class="site-content">

    <!-- ******Content Section****** --> 
    <section class="story-section section section-on-bg">
		
        <!-- <h2 class="title container text-center">What is SuperNET?</h2> --> 
        
        <div class="story-container container text-center"> 
            <div class="story-container-inner" >                    

				<div class="blog-list">
					<div class="post">
						<div class="content">
							
<?php
    include("./inc_header.php"); 
    
     header1(
        $body_class = "pricing-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "partners",
        $title      = "SuperNET Partners"
    )
?>
    <div class="headline-bg blog-headline-bg">
    </div><!--//headline-bg-->         
    
    <!-- ******Coins Section****** --> 
    <section class="pricing section section-on-bg">
        <h2 class="title container text-center">SuperNET Partners</h2>
        <p class="intro text-center">
            Enhance your business with SuperNET technology.<br />
            Want to become a SuperNET partner?<br />
            <br />
             <a class="btn btn-ghost swal swal-slack" 
                href="http://slackinvite.supernet.org/"
                onmouseover="tooltip.pop(this, 'Join our slack community')"><span 
                class="fa fa-slack"></span>Get in touch</a>
        </p>
        
        <div class="blog container blog-list"> 
                    
            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <figure class="post-thumb">
                        <a href="http://www.nxter.org/"><img class="img-responsive" src="assets/images/partners/partner-1-nxter.jpg" alt="NXTER.org"></a>                                
                    </figure><!--//post-thumb-->
                    <div class="content">
                        <h3 class="post-title"><a href="http://www.nxter.org/">NXTER Magazine</a></h3>
                        <div class="post-entry">
                            <p>
                                News about NXT platform and related technology. Blog posts about crypto currencies and crypto assets. SuperNET Newsletter.
                            </p>
                        </div>
                        <div class="meta">
                            <ul class="meta-list list-inline">                                       
                            	<li class="social-links">
                            	    <a href="http://www.nxter.org/"><i class="fa fa-globe"></i></a>
                            	    <a href="https://twitter.com/nxter_org"><i class="fa fa-twitter"></i></a>
                        	        <a href="https://www.facebook.com/nxtmag"><i class="fa fa-facebook"></i></a>
                        	    </li>
                        	</ul><!--//meta-list-->                           	
                        </div><!--//meta-->
                    </div><!--//content-->
                </div><!--//post-inner-->
            </article>
            
            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <figure class="post-thumb">
                        <a href="http://www.supernetradio.com/"><img class="img-responsive" src="assets/images/partners/partner-2-supernet-radio.jpg" alt="NXTER.org"></a>                                
                    </figure><!--//post-thumb-->
                    <div class="content">
                        <h3 class="post-title"><a href="http://www.supernetradio.com/">SuperNET Radio</a></h3>
                        <div class="post-entry">
                            <p>
                                Flagship of The SuperNet Radio Network. The 24/7 place to go for the latest info concerning Supernet.
                                <br />
                                <br />
                            </p>
                        </div>
                        <div class="meta">
                            <ul class="meta-list list-inline">                                       
                            	<li class="social-links">
                            	    <a href="http://www.supernetradio.com/"><i class="fa fa-globe"></i></a>
                            	    <a href="https://twitter.com/SupernetDJ"><i class="fa fa-twitter"></i></a>
                            	    <a href="http://mixlr.com/supernet-radio"><i class="fa fa-play-circle-o"></i></a>
                        	        <a href="https://soundcloud.com/supernetradio"><i class="fa fa-soundcloud"></i></a>
                        	    </li>
                        	</ul><!--//meta-list-->                           	
                        </div><!--//meta-->
                    </div><!--//content-->
                </div><!--//post-inner-->
            </article>
            
        </div><!--//container-->
    </section><!--//coins-section-->
    
<?php
    include("./inc_footer.php");
?>

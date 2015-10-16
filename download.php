<?php
    include("./inc_header.php"); 
    
     header1(
        $body_class = "download-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "download",
        $title      = "Download the latest SuperNET client "
    )
?>
    <div class="headline-bg">
    </div><!--//headline-bg-->      
    
    <!-- ******Apps Section****** --> 
    <section class="apps-section section section-on-bg">
        <div class="container">
            <div class="row">
                <div class="content-area col-xs-12 center">
                    <div class="download-area ">
                        <h2 class="title text-center ">Get connected anytime, anywhere</h2>
                        <p class="intro text-center ">Download the SuperNET beta client</p>
                        <ul class="list-inline" style="display: inline-block; text-align: center; width: 100%;">
                          <li><a class="btn btn-ghost" href="https://nxtforum.org/index.php?topic=9940.msg193037#msg193037" onmouseover="tooltip.pop(this, 'This software is in development, and should not be trusted with a majority of your funds')"><span class="text">Download SuperNET Lite v.2.0.6</span> </a></li>
                        </ul>
                    </div><!--//download-area-->
                    </div><!--//content-area-->    
            </div><!--//row-->        
        </div><!--//container-->
    </section><!--//feature-video--> 

<?php
    include("./inc_footer.php");
?>

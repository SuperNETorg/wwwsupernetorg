<?php
    include("./inc_header.php"); 
    
     header1(
        $body_class = "support-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "support",
        $title      = "Support SuperNET - share related news, apps, websites or projects on social networks "
    )
?>

    <!--// Facebook Button -->  
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <!--// Twitter Button -->  
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div class="headline-bg about-headline-bg">
    </div><!--//headline-bg-->         
    
    <!-- ******Video Section****** --> 
    <section class="story-section section section-on-bg">
        <h2 class="title container text-center">Support Us</h2>
        <div class="story-container container text-center"> 
            <div class="story-container-inner" >                    
                <div class="support">
                
                <!--
                    <ul class="btn-list">
                        <li>
                            Like Us on
                            <a class="btn btn-cta btn-cta-primary" href="https://www.facebook.com/SuperNETorg/"><span class="fa fa-facebook"></span>Facebook</a>
                        </li>
                        <li>
                            Follow Us on
                            <a class="btn btn-cta btn-cta-primary" href="https://twitter.com/SuperNETorg"><span class="fa fa-twitter"></span>Twitter</a>
                        </li>
                        <li>
                            Subscribe on
                            <a class="btn btn-cta btn-cta-primary" href="http://www.reddit.com/r/supernet/"><span class="fa fa-reddit"></span>Reddit</a>
                        </li>
                        <li>
                            Upvote NXT2PAY on 
                            <a class="btn btn-cta btn-cta-primary" href="http://www.producthunt.com/tech/nxt2pay">Product Hunt</a>
                        </li>
                    </ul>
                --> 
                
                     <ul class="btn-list">
                        <li>
                            Like Us on Facebook
                            <div class="share-btn" style="top:0;">
                                <div class="fb-like" data-href="https://www.facebook.com/SuperNETorg" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                            </div>
                        </li>
                        <li>
                            Follow on Twitter
                            <div class="share-btn">
                                <a href="https://twitter.com/SuperNETorg" class="twitter-follow-button" data-show-count="true" data-size="" data-show-screen-name="false">@SuperNETorg</a>
                            </div>
                        </li>
                        <li>
                            Subscribe on
                            <a class="btn btn-cta btn-cta-primary" href="http://www.reddit.com/r/supernet/"><span class="fa fa-reddit"></span>Reddit</a>
                        </li>
                        <li>
                            Upvote NXT2PAY on 
                            <a class="btn btn-cta btn-cta-primary" href="http://www.producthunt.com/tech/nxt2pay">Product Hunt</a>
                        </li>
                    </ul>
                    
                    
                    

                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                    </p>
                    
                    
                    
                </div><!--//about-->
            </div><!--//story-container--> 
        </div><!--//container-->
    </section><!--//story-video-->
    
<?php
    include("./inc_footer.php");
?>

<?php
    include("./inc_header.php");

    header1(
        $body_class = "home-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "home",
        $title      = "SuperNET - Cryptocurrencies United "
    )
?>
    <div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1 empty"></li>
                <li class="slide slide-2"></li>
                <li class="slide slide-3"></li>
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->

    <section class="promo section section-on-bg">
        <div class="container text-center">
            <h2 class="title">SuperNET<br />Cryptocurrencies United</h2>
            <p class="intro">SuperNET is an association of the most reliable blockchain technologies<br />Giving you access to all their innovation from one place</p>
            <p><a class="btn btn-cta btn-cta-primary" href="download.php"><span class="fa fa-arrow-down"></span>Download SuperNET</a></p>

            <p>&nbsp;</p>

            <ul class="list-inline" style="display: inline-block; text-align: center; width: 100%;">
            <li><a class="btn btn-ghost swal swal-slack" href="http://slackinvite.supernet.org/" onmouseover="tooltip.pop(this, 'Join our slack community')">
                  <span class="fa fa-slack"></span>Community</a></li>
            <li><a class="btn btn-ghost swal swal-news" href="http://eepurl.com/2D4wb" onmouseover="tooltip.pop(this, 'Sign up for our newsletter')">
                  <span class="fa fa-envelope"></span>Newsletter</a></li>
            <li><a class="btn btn-ghost" href="nav.php" onmouseover="tooltip.pop(this, 'Check out the Net Asset Value of SuperNET')">
                  <span class="fa fa-bar-chart"></span>SuperNET NAV</a></li>
             </ul>

        </div><!--//container-->
    </section><!--//promo-->

    <div class="sections-wrapper">

        <!-- ******Why Section****** -->
        <section id="why" class="section why">
            <div class="container">
                <h2 class="title text-center">Why use the SuperNET?</h2>
                <p class="intro text-center">SuperNET enables anonymous, instant and non-centralized exchange between crypto currencies, it aims to protect traders from government surveillance and from getting hacked. </p>
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">One wallet to control all your favorite coins</h3>
                        <div class="desc">
                            <p>SuperNET's multicoin wallet lets you easily move your favorite coins and access and combine their features.</p>
                            <p>You can store your coins on SuperNET's non-centralized exchange, or move them to your personal wallet to best fit your needs.</p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="assets/images/figures/figure-1.png" alt="SuperNET Client" />
                        <figcaption class="figure-caption">SuperNET Client in Action </figcaption>
                    </figure>
                </div><!--//item-->
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">Non-centralized Technology</h3>
                        <div class="desc">
                            <p>As third party clearing house between trades, the <a href="http://multigateway.org/">Multigateway</a> stores coins on multisignature server clusters. Each server only has access to one of various keys and the servers must agree for withdrawals to occur.</p>
                            <p>Multigateway servers are spread in various jurisdictions around the globe and each is controlled by participating coin development teams, raising the security exponentially.</p>
                            <p>Users are encouraged to only use the Multigateway as a clearing house as they trade. Withdrawals to user controlled wallets after trades are completed are automated by default. </p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="assets/images/figures/figure-3.png" alt="Multigateway" />
                    </figure>
                </div><!--//item-->
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">Real-time trading </h3>
                        <div class="desc">
                            <p>
                                InstantDEX will enable near real-time trading between cryptocurrencies. As well as regular trading, it will be used
                                to trade anonymous telepods of different cryptocurrency funds when Teleport is fully operational.
                            </p>
                            <figure class="figure text-center">
                                <img class="img-responsive" src="assets/images/figures/idex-gui.png" alt="InstantDEX GUI">
                                <figcaption class="figure-caption">InstantDEX</figcaption>
                            </figure>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="assets/images/figures/figure-3b20.png" alt="InstantDEX" />
                    </figure>
                </div><!--//item-->
                <div class="row item last-item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">Anonymous Trades</h3>
                        <div class="desc">
                            <p>At SuperNET, we take privacy very seriously. <a href="http://bitcoindark.pw">BitcoinDark</a> is at the heart of the SuperNET making sure that large scale surveillance attacks on blockchain finance are impractical and futile.</p>
                            <p>Unlike many of its contemporaries, BitcoinDark does not use coin mixing, and is determined to protect user IP association with trades. BitcoinDark will anonymize transactions through <a href="http://bitcoindark.pw/introduction-teleport/">Teleport.</a></p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="assets/images/figures/figure-2.png" alt="SuperNET macbook" />
                    </figure>
                </div><!--//item-->


            </div><!--//container-->
        </section><!--//why-->


        <!-- ******Press Section****** -->
        <section class="section press">
            <div class="container text-center">
                <h2 class="title">Press Coverage</h2>
                <ul class="press-list list-inline row last">
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="http://www.forbes.com/sites/rogeraitken/2015/07/05/greek-economic-crisis-is-a-parallel-currency-the-answer/"><img class="img-responsive" src="assets/images/press/press-7.png" alt=""></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="http://cointelegraph.com/search?query=SuperNET"><img class="img-responsive" src="assets/images/press/press-13.png" alt=""></a></li>
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href="http://coremedia.info/"><img class="img-responsive" src="assets/images/press/press-14.png" alt=""></a></li>
                </ul><!--//press-list-->
            </div><!--//container-->
        </section>


        <!-- ******CTA Section****** -->
        <section id="cta-section" class="section cta-section text-center home-cta-section">
            <div class="container">
               <h2 class="title">Ready to change the world?</h2>
               <p><a class="btn btn-cta btn-cta-primary" href="download.php">Get SuperNET Now</a></p>
            </div><!--//container-->
        </section><!--//cta-section-->

    </div><!--//section-wrapper-->

<?php
    include("./inc_footer.php");
?>

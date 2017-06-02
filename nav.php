<?php

    include("./inc_header.php");

     header1(
        $body_class = "pricing-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "nav",
        $title      = "SuperNET - NAV calculation"
    )
?>
    <div class="headline-bg blog-headline-bg" style="height:600px">
    </div><!--//headline-bg-->

    <!-- ******Coins Section****** -->
    <section class="pricing section section-on-bg">
        <!-- <h2 class="title container text-center">SuperNET - NAV</h2> -->
        <p class="intro text-center">
            <img src="/assets/images/SuperNET.png" alt="SuperNET" width="160" />
        </p>

<style media="screen">
  .big-ghost {
    background: none;
     border: 1px solid #fff;
     color: #fff !important;
     font-size: 32px;
     padding: 8px 20px;
     vertical-align: middle;
  }
  .big-ghost .currency {
    font-size: 16px;
  }
  .core-coins .post .post-thumb {
    background: white;
    padding: 20px;
  }
  .core-coins .post .post-thumb img {
    max-width: 30%;
  }
  .core-coins .post .post-title .amount {
    color: #253340;
  }
  .core-coins .post .content {
    padding-top: 0;
  }

  .core-coins .post .meta-list {
    margin-left: 0;
    border-top: 1px solid #efefef;
    padding-top: 15px;
  }

  .assets .asset-name {
    color: #999999;
    margin: 10px 0;
  }
  .assets .asset-info {
    border-top: 1px solid #efefef;
    color: #999999;
    font-size: 14px;
    padding: 10px 0;
  }
  .assets .asset-info .amount {
    color: #253340;
  }
  .disclaimer {
    font-size: 13px;
    padding-left: 15px;
  }
  .core-coins .small-post .post-inner {
    padding-bottom: 15px;
  }
  .core-coins .small-post .post-thumb {
    float: left;
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .core-coins .small-post .post-thumb a img {
    height: 64px;
    max-width: none;
  }
  .core-coins .small-post .content {
    margin-left: 90px;
    font-size: 13px;
    padding-bottom: 0;
  }
  .core-coins .small-post .content .meta {
    font-size: 15px;
  }
  .core-coins .small-post .content .post-title {
    font-size: 15px;
  }

  #nav-header {
    max-width: 970px;
  }
  /* Extra small devices (phones, less than 768px) */
@media (max-width: 767px) {
  .core-coins .small-post .content {
    padding: 0 15px 0 15px;
  }
}


</style>
  <!-- <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/jquery-1.11.2.min.js"></script> -->
<script type="text/javascript">
// $(document).ready(function() { });

</script>


<div id="nav-header" class="intro text-center">
  <h3>SuperNET (UNITY) Net Asset Value</h3>
  <br />
        <ul class="list-inline">
            <li><span class="big-ghost"><span id="navnxt"></span> <span class="currency">NXT</span></span></li>
            <li><span class="big-ghost"><span id="navbtc"></span> <span class="currency">BTC</span></span></li>
            <li><span class="big-ghost"><span id="navusd"></span> <span class="currency">USD</span></span></li>
            <li><span class="big-ghost"><span id="naveur"></span> <span class="currency">EUR</span></span></li>
        </ul>
</div>

        <div class="blog container blog-list core-coins">



            <article class="post col-md-4 col-sm-6 col-xs-12">
              <div class="post-inner">
                  <figure class="post-thumb">
                      <a href="#" onmouseover="tooltip.pop(this, '#coin-info-11')">
                          <img class="img-responsive" src="assets/images/coin-logos/logo-stratis-192.png" alt="Stratis Platform">
                      </a>
                  </figure><!--//post-thumb-->
                  <div style="display: none;">
                      <div id="coin-info-11">
                        <!-- Tooltip Content -->
                        Website: <a href="http://stratisplatform.com/">Stratisplatform.com</a><br>
                        Forum: <a href="https://bitcointalk.org/index.php?topic=1512202.0">Bitcointalk.org</a>
                      </div>
                  </div>
                  <div class="content">
                      <!-- <div class="post-entry">
                      </div> -->
                      <div class="meta">
                          <div class="meta-list list-inline">
                            <h3 class="post-title text-center">
                                <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-11')"><span class="amount" id="totalstrat"></span></a> STRAT</h3>
                            <p class="text-center"><span id="stratbtcbalance"></span> BTC</p>
                        </div><!--//meta-list-->
                        <div style="display: none;">
                            <div id="coinbalance-info-11">
                              <!-- Tooltip Content -->
                              SuperNET owns ~ 1.9%
                              of Stratis Platform tokens<br>
                              <a href="http://stratisplatform.com/2016/07/27/stratis-ico-summary/">Stratis ICO summary</a>
                            </div>
                        </div>
                      </div><!--//meta-->
                  </div><!--//content-->
              </div><!--//post-inner-->
          </article>


                      <article class="post col-md-4 col-sm-6 col-xs-12">
                          <div class="post-inner">
                              <figure class="post-thumb">
                                  <a href="#" onmouseover="tooltip.pop(this, '#coin-info-8')">
                                      <img class="img-responsive" src="assets/images/coin-logos/logo-iota-192.png" alt="IOTA">
                                  </a>
                              </figure><!--//post-thumb-->
                              <div style="display: none;">
                                  <div id="coin-info-8">
                                    <!-- Tooltip Content -->
                                    Website: <a href="http://www.iotatoken.com/">Iotatoken.com</a><br>
                                    Forum: <a href="http://forum.iotatoken.com/">forum.iotatoken.com</a>
                                  </div>
                              </div>
                              <div class="content">
                                  <!-- <div class="post-entry">
                                  </div> -->
                                  <div class="meta">
                                      <div class="meta-list list-inline">
                                        <h3 class="post-title text-center">Total:
                                            <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-8')"><span class="amount" id="totaliota"></span></a> Gi</h3>
                                        <p class="text-center"><span id="iotabtcbalance"></span> BTC</p>
                                    </div><!--//meta-list-->
                                    <div style="display: none;">
                                        <div id="coinbalance-info-8">
                                          <!-- Tooltip Content -->
                                          SuperNET owns:
                                          <span id="iotabalance1"></span> Gi<br>
                                        </div>
                                    </div>
                                  </div><!--//meta-->
                              </div><!--//content-->
                          </div><!--//post-inner-->
                      </article>


                      <article class="post col-md-4 col-sm-6 col-xs-12">
                          <div class="post-inner">
                              <figure class="post-thumb">
                                  <a href="#" onmouseover="tooltip.pop(this, '#coin-info-zec')">
                                      <img class="img-responsive" src="assets/images/coin-logos/zcash-logo-192.png" alt="ZCASH">
                                  </a>
                              </figure><!--//post-thumb-->
                              <div style="display: none;">
                                  <div id="coin-info-zec">
                                    <!-- Tooltip Content -->
                                    Website: <a href="https://z.cash/">z.cash</a><br>
                                    Forum: <a href="https://forum.z.cash/">forum.z.cash</a>
                                  </div>
                              </div>
                              <div class="content">
                                  <!-- <div class="post-entry">
                                  </div> -->
                                  <div class="meta">
                                      <div class="meta-list list-inline">
                                        <h3 class="post-title text-center">Total:
                                            <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-zec')"><span class="amount" id="totalzec"></span></a> ZEC</h3>
                                        <p class="text-center"><span id="zecbtcbalance"></span> BTC</p>
                                    </div><!--//meta-list-->
                                    <div style="display: none;">
                                        <div id="coinbalance-info-zec">
                                          <!-- Tooltip Content -->
                                          SuperNET owns:
                                          <span id="zecbalance1"></span> ZEC<br>
                                        </div>
                                    </div>
                                  </div><!--//meta-->
                              </div><!--//content-->
                          </div><!--//post-inner-->
                      </article>


            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <figure class="post-thumb">
                        <a href="#" onmouseover="tooltip.pop(this, '#coin-info-2')">
                          <img class="img-responsive" src="assets/images/coin-logos/logo-sys-192.png" alt="SYS">
                        </a>
                    </figure><!--//post-thumb-->
                    <div style="display: none;">
                        <div id="coin-info-2">
                          <!-- Tooltip Content -->
                          Website: <a href="http://syscoin.org/">Syscoin.org</a><br>
                          Forum: <a href="https://bitcointalk.org/index.php?topic=757255">Bitcointalk.org</a><br>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <div class="post-entry">
                        </div> -->
                        <div class="meta">
                            <div class="meta-list list-inline">
                              <h3 class="post-title text-center">Total:
                                  <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-2')"><span class="amount" id="totalsys"></span></a> SYS</h3>
                              <p class="text-center"><span id="sysbtcbalance"></span> BTC</p>
                      	</div><!--//meta-list-->
                          <div style="display: none;">
                              <div id="coinbalance-info-2">
                                <!-- Tooltip Content -->
                                Account: <a href="https://chainz.cryptoid.info/sys/address.dws?SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y.htm"
                                target="_blank">SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y</a>
                                : <span id="sysbalance1"></span> coins<br>
                              </div>
                          </div>
                        </div><!--//meta-->
                    </div><!--//content-->
                </div><!--//post-inner-->
            </article>

            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <figure class="post-thumb">
                        <a href="#" onmouseover="tooltip.pop(this, '#coin-info-4')">
                            <img class="img-responsive" src="assets/images/coin-logos/logo-waves-192.png" alt="WAVES">
                        </a>
                    </figure><!--//post-thumb-->
                    <div style="display: none;">
                        <div id="coin-info-4">
                          <!-- Tooltip Content -->
                          Website: <a href="https://wavesplatform.com/">Wavesplatform.com</a><br>
                          Forum: <a href="http://wavesplatform-slack.herokuapp.com/">Slack</a>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <div class="post-entry">
                        </div> -->
                        <div class="meta">
                            <div class="meta-list list-inline">
                              <h3 class="post-title text-center">Total:
                                  <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-4')"><span class="amount" id="totalwaves"></span></a> WAVES</h3>
                              <p class="text-center"><span id="wavesbtcbalance"></span> BTC</p>
                          </div><!--//meta-list-->
                          <div style="display: none;">
                              <div id="coinbalance-info-4">
                                <!-- Tooltip Content -->
                                Account: <a href="https://ico.wavesplatform.com/"
                                target="_blank">Waves ICO</a>
                                : <span id="wavesbalance1"></span> coins<br>
                              </div>
                          </div>
                        </div><!--//meta-->
                    </div><!--//content-->
                </div><!--//post-inner-->
            </article>

          <article class="post col-md-4 col-sm-6 col-xs-12">
              <div class="post-inner">
                  <figure class="post-thumb">
                      <a href="#" onmouseover="tooltip.pop(this, '#coin-info-1')">
                        <img class="img-responsive" src="assets/images/coin-logos/logo-kmd-192.png" alt="KMD">
                      </a>
                  </figure><!--//post-thumb-->
                  <div style="display: none;">
                      <div id="coin-info-1">
                        <!-- Tooltip Content -->
                        Website: <a href="http://komodoplatform.com/">Komodoplatform.com</a><br>
                        Forum: <a href="https://bitcointalk.org/index.php?topic=1605144.0">Bitcointalk.org</a><br>
                      </div>
                  </div>
                  <div class="content">
                      <div class="meta">
                          <div class="meta-list list-inline">
                            <h3 class="post-title text-center">Total:
                                <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-1')"><span class="amount" id="totalkmd"></span></a> KMD</h3>
                            <p class="text-center"><span id="kmdbtcbalance"></span> BTC</p>
                        </div><!--//meta-list-->
                            <div style="display: none;">
                                <div id="coinbalance-info-1">
                                  <!-- Tooltip Content -->
                                  Swapped coins
                                  : <span id="kmdbalance1"></span> coins<br>
                                </div>
                            </div>
                      </div><!--//meta-->
                  </div><!--//content-->
              </div><!--//post-inner-->
          </article>

          </div><!--//container-->
            <div class="blog container blog-list core-coins">

          <article class="post small-post col-md-4 col-sm-6 col-xs-12">
              <div class="post-inner">
                  <figure class="post-thumb">
                      <a href="#" onmouseover="tooltip.pop(this, '#coin-info-10')">
                          <img class="img-responsive" src="assets/images/coin-logos/logo-heat-192.png" alt="Heat Ledger">
                      </a>
                  </figure><!--//post-thumb-->
                  <div style="display: none;">
                      <div id="coin-info-10">
                        <!-- Tooltip Content -->
                        Website: <a href="http://heatledger.com/">Heatledger.com</a><br>
                        Forum: <a href="https://bitcointalk.org/index.php?topic=1543991.0">Bitcointalk.org</a>
                      </div>
                  </div>
                  <div class="content">
                      <!-- <div class="post-entry">
                      </div> -->
                      <div class="meta">
                          <div class="meta-list list-inline">
                            <h3 class="post-title text-left">
                                <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-10')"><span class="amount" id="totalheat"></span></a> HEAT</h3>
                            <p class="text-left"><span id="heatbtcbalance"></span> BTC</p>
                        </div><!--//meta-list-->
                        <div style="display: none;">
                            <div id="coinbalance-info-10">
                              <!-- Tooltip Content -->
                              Account: <a href="https://heatbrowser.com/report.html">8034838408066485608</a><br>
                              SuperNET owns ~ 4% of Heat Ledger
                            </div>
                        </div>
                      </div><!--//meta-->
                  </div><!--//content-->
              </div><!--//post-inner-->
          </article>

          <article class="post small-post col-md-4 col-sm-6 col-xs-12">
              <div class="post-inner">
                  <figure class="post-thumb">
                      <a href="#" onmouseover="tooltip.pop(this, '#coin-info-dcr')">
                          <img class="img-responsive" src="assets/images/coin-logos/logo-dcr-192.png" alt="Decred">
                      </a>
                  </figure><!--//post-thumb-->
                  <div style="display: none;">
                      <div id="coin-info-dcr">
                        <!-- Tooltip Content -->
                        Website: <a href="https://decred.org/">decred.org</a><br>
                        Forum: <a href="https://forum.decred.org/">forum.decred.org</a>
                      </div>
                  </div>
                  <div class="content">
                      <!-- <div class="post-entry">
                      </div> -->
                      <div class="meta">
                          <div class="meta-list list-inline">
                            <h3 class="post-title text-left">
                                <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-dcr')"><span class="amount" id="totaldcr"></span></a> DCR</h3>
                            <p class="text-left"><span id="dcrbtcbalance"></span> BTC</p>
                        </div><!--//meta-list-->
                        <div style="display: none;">
                            <div id="coinbalance-info-dcr">
                              <!-- Tooltip Content -->
                            </div>
                        </div>
                      </div><!--//meta-->
                  </div><!--//content-->
              </div><!--//post-inner-->
          </article>

              <article class="post small-post col-md-4 col-sm-6 col-xs-12">
                  <div class="post-inner">
                      <figure class="post-thumb">
                          <a href="#" onmouseover="tooltip.pop(this, '#coin-info-3')">
                            <img class="img-responsive" src="assets/images/coin-logos/logo-vrc-192.png" alt="VRC">
                          </a>
                      </figure><!--//post-thumb-->
                      <div style="display: none;">
                          <div id="coin-info-3">
                            <!-- Tooltip Content -->
                            Website: <a href="http://www.vericoin.info/">Vericoin.info</a><br>
                            Forum: <a href="https://www.vericoinforums.com/">Vericoinforums.com</a>
                          </div>
                      </div>
                      <div class="content">
                          <!-- <div class="post-entry">
                          </div> -->
                          <div class="meta">
                              <div class="meta-list list-inline">
                                <h3 class="post-title text-left">Total:
                                    <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-3')"><span class="amount" id="totalvrc"></span></a> VRC</h3>
                                <p class="text-left"><span id="vrcbtcbalance"></span> BTC</p>
                            </div><!--//meta-list-->
                            <div style="display: none;">
                                <div id="coinbalance-info-3">
                                  <!-- Tooltip Content -->
                                  Account: <a href="https://chainz.cryptoid.info/vrc/address.dws?VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2.htm"
                                  target="_blank">VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2</a>
                                  : <span id="vrcbalance1"></span> coins<br>
                                </div>
                            </div>
                          </div><!--//meta-->
                      </div><!--//content-->
                  </div><!--//post-inner-->
              </article>

              <article class="post small-post col-md-4 col-sm-6 col-xs-12">
                  <div class="post-inner">
                      <figure class="post-thumb">
                          <a href="#" onmouseover="tooltip.pop(this, '#coin-info-ardor')">
                              <img class="img-responsive" src="assets/images/coin-logos/logo-ardr-192.png" alt="ARDOR">
                          </a>
                      </figure><!--//post-thumb-->
                      <div style="display: none;">
                          <div id="coin-info-ardor">
                            <!-- Tooltip Content -->
                            Website: <a href="https://www.ardorplatform.org/">ardorplatform.org</a><br>
                            Forum: <a href="https://nxtforum.org/">Nxtforum.org</a><br>

                          </div>
                      </div>
                      <div class="content">
                          <div class="meta">
                              <div class="meta-list list-inline">
                                <h3 class="post-title text-left">Total: <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-ardor')"><span class="amount" id="totalardr"></span></a> NXT</h3>
                                <p class="text-left"><span id="ardrbtcbalance"></span> BTC</p>
                            </div><!--//meta-list-->
                            <div style="display: none;">
                                <div id="coinbalance-info-ardor">
                                  <!-- Tooltip Content -->
                                  Account: <a href="https://nxtportal.org/accounts/NXT-MRBN-8DFH-PFMK-A4DBM" target="_blank">NXT-MRBN-8DFH-PFMK-A4DBM</a>
                                  : <span id="ardrbalance1"></span> coins<br>
                                  Account: <a href="https://nxtportal.org/accounts/NXT-USU4-92UY-KEYT-4H649" target="_blank">NXT-USU4-92UY-KEYT-4H649</a>
                                  : <span id="ardrbalance2"></span> coins<br>
                                  Account: <a href="https://nxtportal.org/accounts/NXT-H8AL-VEG7-4FL5-G2L4W" target="_blank">NXT-H8AL-VEG7-4FL5-G2L4W</a>
                                  : <span id="ardrbalance3"></span> coins<br>
                                </div>
                            </div>
                          </div><!--//meta-->
                      </div><!--//content-->
                  </div><!--//post-inner-->
              </article>

              <article class="post small-post col-md-4 col-sm-6 col-xs-12">
                  <div class="post-inner">
                      <figure class="post-thumb">
                          <a href="#" onmouseover="tooltip.pop(this, '#coin-info-0')">
                              <img class="img-responsive" src="assets/images/coin-logos/logo-nxt-192.png" alt="NXT">
                          </a>
                      </figure><!--//post-thumb-->
                      <div style="display: none;">
                          <div id="coin-info-0">
                            <!-- Tooltip Content -->
                            Website: <a href="http://nxt.org/">NXT.org</a><br>
                            Forum: <a href="https://nxtforum.org/">Nxtforum.org</a><br>

                          </div>
                      </div>
                      <div class="content">
                          <div class="meta">
                              <div class="meta-list list-inline">
                                <h3 class="post-title text-left">Total: <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-nxt')"><span class="amount" id="totalnxt"></span></a> NXT</h3>
                                <p class="text-left"><span id="nxtbtcbalance"></span> BTC</p>
                            </div><!--//meta-list-->
                            <div style="display: none;">
                                <div id="coinbalance-info-nxt">
                                  <!-- Tooltip Content -->
                                  Account: <a href="https://nxtportal.org/accounts/NXT-MRBN-8DFH-PFMK-A4DBM" target="_blank">NXT-MRBN-8DFH-PFMK-A4DBM</a>
                                  : <span id="nxtbalance1"></span> coins<br>
                                  Account: <a href="https://nxtportal.org/accounts/NXT-USU4-92UY-KEYT-4H649" target="_blank">NXT-USU4-92UY-KEYT-4H649</a>
                                  : <span id="nxtbalance2"></span> coins<br>
                                  Account: <a href="https://nxtportal.org/accounts/NXT-H8AL-VEG7-4FL5-G2L4W" target="_blank">NXT-H8AL-VEG7-4FL5-G2L4W</a>
                                  : <span id="nxtbalance3"></span> coins<br>
                                </div>
                            </div>
                          </div><!--//meta-->
                      </div><!--//content-->
                  </div><!--//post-inner-->
              </article>

        </div><!--//container-->


  <p id="demo"></p>


    </section><!--//links-section-->

    <section class="faq section has-bg-color resources assets">
        <div class="container">
            <h2 class="title text-center">
                SuperNET Asset Holdings
            </h2>

            <div class="row">

              <div class="col-lg-3 asset-id-" style="display:none">
                <div class="banner">
                  <div class="inner">
                    <div class="asset-name">
                      <a href="#" onmouseover="tooltip.pop(this, '#asset-info-')">
                        <span class="name"></span>
                      </a>
                    </div>
                    <div style="display: none;">
                        <div class="asset-tooltip" id="asset-info-"></div>
                    </div>
                    <div class="asset-info">
                        <span>Total: <a href="#" onmouseover="tooltip.pop(this, '#shares-info-')">
                                     <span class="amount shares"></span></a> shares</span><br>
                        <span><span class="nxt"></span> NXT</span> &nbsp;
                        <span><span class="btc"></span> BTC</span>
                    </div>
                    <div style="display: none;">
                        <div class="shares-tooltip" id="shares-info-"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="row">
              <p class="disclaimer">
                Price feed for NAV calculation provided by Bitstamp.net Poloniex.com, BitTrex.com and OTC markets.<br>
                Assets value calculated from last traded price on decentralized NXT Asset Exchange.
              </p>
            </div>


        </div><!--//container-->

    </section><!--//links-section-->



<?php
    include("./inc_footer.php");
?>

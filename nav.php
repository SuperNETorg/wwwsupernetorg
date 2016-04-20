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


</style>
  <!-- <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/jquery-1.11.2.min.js"></script> -->
<script type="text/javascript">
// $(document).ready(function() { });

</script>


<div class="intro text-center">
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
                              <h3 class="post-title text-center">Total: <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-0')"><span class="amount" id="totalnxt"></span></a> NXT</h3>
                              <p class="text-center"><span id="nxtbtcbalance"></span> BTC</p>
                        	</div><!--//meta-list-->
                          <div style="display: none;">
                              <div id="coinbalance-info-0">
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

            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <figure class="post-thumb">
                        <a href="#" onmouseover="tooltip.pop(this, '#coin-info-1')">
                          <img class="img-responsive" src="assets/images/coin-logos/logo-btcd-192.png" alt="BTCD">
                        </a>
                    </figure><!--//post-thumb-->
                    <div style="display: none;">
                        <div id="coin-info-1">
                          <!-- Tooltip Content -->
                          Website: <a href="http://bitcoindark.com/">BitcoinDark.com</a><br>
                          Forum: <a href="https://bitcointalk.org/index.php?topic=684090.0">Bitcointalk.org</a><br>
                        </div>
                    </div>
                    <div class="content">
                        <div class="meta">
                            <div class="meta-list list-inline">
                              <h3 class="post-title text-center">Total:
                                  <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-1')"><span class="amount" id="totalbtcd"></span></a> BTCD</h3>
                              <p class="text-center"><span id="btcdbtcbalance"></span> BTC</p>
                          </div><!--//meta-list-->
                              <div style="display: none;">
                                  <div id="coinbalance-info-1">
                                    <!-- Tooltip Content -->
                                    Account: <a href="http://explorebtcd.info/address/RA7FDvaNFXZNLqosSbCWFbypuvijJNQw5J" target="_blank">RA7FDvaNFXZNLqosSbCWFbypuvijJNQw5J</a>
                                    : <span id="btcdbalance1"></span> coins<br>
                                    Account: <a href="http://explorebtcd.info/address/RM5NNYdGee6X65aFGkyaRkYocSxQVNsB8d" target="_blank">RM5NNYdGee6X65aFGkyaRkYocSxQVNsB8d</a>
                                    : <span id="btcdbalance2"></span> coins<br>
                                    Account: <a href="https://nxtportal.org/accounts/NXT-MRBN-8DFH-PFMK-A4DBM" target="_blank">NXT-MRBN-8DFH-PFMK-A4DBM</a>
                                    : <span id="btcdbalance3"></span> coins<br>
                                    Account: <a href="https://nxtportal.org/accounts/NXT-MRBN-8DFH-PFMK-A4DBM" target="_blank">NXT-MRBN-8DFH-PFMK-A4DBM</a>
                                    : <span id="btcdbalance4"></span> coins<br>
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
                              <h3 class="post-title text-center">Total:
                                  <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-3')"><span class="amount" id="totalvrc"></span></a> VRC</h3>
                              <p class="text-center"><span id="vrcbtcbalance"></span> BTC</p>
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


            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <figure class="post-thumb">
                        <a href="#" onmouseover="tooltip.pop(this, '#coin-info-4')">
                            <img class="img-responsive" src="assets/images/coin-logos/logo-vpn-192.png" alt="VPN">
                        </a>
                    </figure><!--//post-thumb-->
                    <div style="display: none;">
                        <div id="coin-info-4">
                          <!-- Tooltip Content -->
                          Website: <a href="http://www.bitnet.pw/en_US/">Bitnet.pw</a><br>
                          Forum: <a href="https://bitcointalk.org/index.php?topic=789961.0">Bitcointalk.org</a>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <div class="post-entry">
                        </div> -->
                        <div class="meta">
                            <div class="meta-list list-inline">
                              <h3 class="post-title text-center">Total:
                                  <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-4')"><span class="amount" id="totalvpn"></span></a> VPN</h3>
                              <p class="text-center"><span id="vpnbtcbalance"></span> BTC</p>
                          </div><!--//meta-list-->
                          <div style="display: none;">
                              <div id="coinbalance-info-4">
                                <!-- Tooltip Content -->
                                Account: <a href="https://www.blockexperts.com/vpn/address/VdHevSrSsdFn5Mrbrf7xxM99uthTEhiEpJ"
                                target="_blank">VdHevSrSsdFn5Mrbrf7xxM99uthTEhiEpJ</a>
                                : <span id="vpnbalance1"></span> coins<br>
                              </div>
                          </div>
                        </div><!--//meta-->
                    </div><!--//content-->
                </div><!--//post-inner-->
            </article>

            <article class="post col-md-4 col-sm-6 col-xs-12">
                <div class="post-inner">
                    <figure class="post-thumb">
                        <a href="#" onmouseover="tooltip.pop(this, '#coin-info-5')">
                            <img class="img-responsive" src="assets/images/coin-logos/logo-bbr-192.png" alt="BBR">
                        </a>
                    </figure><!--//post-thumb-->
                    <div style="display: none;">
                        <div id="coin-info-5">
                          <!-- Tooltip Content -->
                          Website: <a href="http://boolberry.com/">Boolberry.com</a><br>
                          Forum: <a href="https://bitcointalk.org/index.php?topic=577267.0">Bitcointalk.org</a>
                        </div>
                    </div>
                    <div class="content">
                        <!-- <div class="post-entry">
                        </div> -->
                        <div class="meta">
                            <div class="meta-list list-inline">
                              <h3 class="post-title text-center">Total:
                                  <a href="#" onmouseover="tooltip.pop(this, '#coinbalance-info-5')"><span class="amount" id="totalbbr"></span></a> BBR</h3>
                              <p class="text-center"><span id="bbrbtcbalance"></span> BTC</p>
                          </div><!--//meta-list-->
                          <div style="display: none;">
                              <div id="coinbalance-info-5">
                                <!-- Tooltip Content -->
                                Account: Poloniex
                                : <span id="bbrbalance1"></span> coins<br>
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
                Price feed for NAV calculation provided by <a href="http://www.cryptocoincharts.info">cryptocoincharts.info</a>.<br>
                Assets value calculated from last traded price on decentralized NXT Asset Exchange.
              </p>
            </div>


        </div><!--//container-->

    </section><!--//links-section-->



<?php
    include("./inc_footer.php");
?>

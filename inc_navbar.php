<?php
    function navbar($nav_show=true, $nav_item="") {

         // Server root
        $sprnt = "http://" . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("/blog", '', dirname($_SERVER['SCRIPT_FILENAME'])));

        $nav = array();
        $nav[$nav_item] = "active";

        if ($nav_show == true) {
?>
    <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?=$nav["home"];?> nav-item"><a href="<?= $sprnt ?>/index.php">Home</a></li>
                        <li class="<?=$nav["about"];?> nav-item"><a href="<?= $sprnt ?>/about.php">About</a></li>
                        <!-- <li class="<?=$nav["features"];?> nav-item"><a href="<?= $sprnt ?>/features.php">Features</a></li> -->
                        <li class="<?=$nav["download"];?> nav-item"><a href="<?= $sprnt ?>/download.php">Download</a></li>
                        <li class="<?=$nav["chat"];?> nav-item"><a href="<?= $sprnt ?>/chat.php">Chat</a></li>

                        <!--
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Coins <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://bitcoindark.pw">BitcoinDark</a></li>
                                <li><a href="http://bitstarcoin.com">Bitstar Coin</a></li>
                                <li><a href="http://www.boolberry.com">Boolberry</a></li>
                                <li><a href="http://www.chancecoin.com">Chancecoin</a></li>
                                <li><a href="http://www.fibrecoin.com">Fibre</a></li>
                                <li><a href="http://www.nxt.org">NXT</a></li>
                                <li><a href="http://www.opal-coin.com">Opal</a></li>
                                <li><a href="http://syscoin.org/">Syscoin</a></li>
                                <li><a href="http://vericoin.info">Vericoin</a></li>
                                <li><a href="http://www.bitnet.wang">VPNCoin</a></li>
                            </ul>
                        </li><!--//dropdown-->

                        <li class="<?=$nav["coins"];?> nav-item"><a href="<?= $sprnt ?>/coins.php">Coins</a></li>
                        <li class="<?=$nav["team"];?> nav-item"><a href="<?= $sprnt ?>/team.php">Team</a></li>
                        <li class="<?=$nav["blog"];?> nav-item"><a href="<?= $sprnt ?>/blog/">Blog</a></li>
                        <li class="<?=$nav["wiki"];?> nav-item"><a href="http://wiki.supernet.org" target="_blank">Wiki</a></li>
                        <li class="nav-item nav-icon">
                            <a href="https://twitter.com/SuperNETorg" target="_blank"><i class="fa fa-twitter"></i></a>
                         </li>
                        <li class="nav-item nav-icon">
                            <a href="https://www.facebook.com/SuperNETorg" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item nav-icon">
                            <a href="https://www.reddit.com/r/supernet" target="_blank"><i class="fa fa-reddit"></i></a>
                        </li>

                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
<?php

        }

    }

?>

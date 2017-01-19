<?php
    // Server root
    $sprnt = "http://" . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("/blog", '', dirname($_SERVER['SCRIPT_FILENAME'])));
?>
<!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-col-inner">
                            <h3 class="title">Product</h3>
                            <ul class="list-unstyled">
                                <li><a href="<?= $sprnt ?>/about.php"><i class="fa fa-caret-right"></i>About</a></li>
                                <li><a href="<?= $sprnt ?>/download.php"><i class="fa fa-caret-right"></i>Download</a></li>
                                <li><a href="<?= $sprnt ?>/partners.php"><i class="fa fa-caret-right"></i>Partners</a></li>
                                <li><a href="<?= $sprnt ?>/nav.php"><i class="fa fa-caret-right"></i>Unity NAV</a></li>
                                <li><a href="<?= $sprnt ?>/support-us.php"><i class="fa fa-caret-right"></i>Support Us</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="footer-col links col-md-8 col-sm-4 col-xs-12 footer-logo">
                    <img src="<?= $sprnt ?>/assets/images/logo-supernet-white.png" height="101" width="120" />
                    </div><!--//foooter-col-->
                    <div class="footer-col links col-md-2 col-sm-4 col-xs-12 sm-break">
                        <div class="footer-col-inner">
                            <h3 class="title">Support</h3>
                            <ul class="list-unstyled">
                                <li><a href="http://forum.supernet.org"><i class="fa fa-caret-right"></i>Forum</a></li>
                                <li><a href="http://wiki.supernet.org"><i class="fa fa-caret-right"></i>Wiki</a></li>
                                <li><a href="http://slackinvite.supernet.org" target="_blank"><i class="fa fa-caret-right"></i>Join Slack</a></li>
                                <li><a href="http://api.supernet.org"><i class="fa fa-caret-right"></i>API</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="clearfix"></div>
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <small class="copyright">Copyright @ 2015 SuperNET</small>
             	<small>- <a href="https://github.com/SuperNETorg/wwwsupernetorg/" target=“_blank”><i class="copyright"></i>This site on Github.com</a></small>
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/js/main.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/js/pace.js"></script>

<?php if ($nav_item == "nav") { ?>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/js/snnav.js"></script>
<?php } ?>


    <!-- Vimeo video API -->
    <script type="text/javascript" data-cfasync="false" src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/js/vimeo.js"></script>


<?php if (($nav_item == "home") || ($nav_item == "partners")) { ?>

    <script type="text/javascript">


    /* ======= Sweet Alerts ======= */
    /* Ref: http://t4t5.github.io/sweetalert/ */


    $('a.swal').unbind('.swal').click(function(){
        return false;
    });

    document.querySelector('.swal-slack').onclick = function(){
    	swal({
    		title: "Join our slack community",
    		text: '<iframe width="320" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://slackinvite.supernet.org/"></iframe>',
        // text: '<i style="font-size:72px;color:#ccc;" class="fa fa-slack"></i>' +
        //       '<br>Automatic Slack invite is temporary disabled.<br>' +
        //       'Please write to <a href="mailto:info@supernet.org" title="Slackinvite">info@supernet.org</a> for an invite.',
    		html: true,
			showConfirmButton: false
    	});

    	$('.sweet-alert').css({'width': '478px', 'margin-left': '-256px'});
    };


    $('.swal-news').click(function(){
    	swal({
    		title: "Sign up for our newsletter",
    		text: '<iframe width="766" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://eepurl.com/2D4wb"></iframe>',
    		html: true,
			showConfirmButton: false
    	});

    	$('.sweet-alert').css({'width': '800px', 'margin-left': '-406px'});
    });

    </script>

<?php } ?>


<?php if ($nav_item == "team") { ?>

    <script type="text/javascript">

    /* ======= Sweet Alerts ======= */
    /* Ref: http://t4t5.github.io/sweetalert/ */


    $('a.swal').unbind('.swal').click(function(){
        return false;
    });


    $('.swal-info').click(function(){

        var name = $('#' + $(this).attr("rel") + ' .name').text();
        var info = $('#' + $(this).attr("rel") + ' .member-info').html();
    	var long = $('#' + $(this).attr("rel") + ' .member-info').hasClass('long-info');

    	swal({
    		title: name,
    		text: info,
    		html: true,
			showConfirmButton: true
    	});

    	$('.sweet-alert').css({'width': '480px', 'margin-left': '-256px'});

    	if (long == true)  {
    	    $('.sweet-alert').css({'width': '640px', 'margin-left': '-337px'});
    	}

    });



    $('.swal-info2').click(function(){

        var name = $('#' + $(this).attr("rel") + ' .name').text();
        var info = $('#' + $(this).attr("rel") + ' .member-info2').html();
        var long = $('#' + $(this).attr("rel") + ' .member-info').hasClass('long-info');

    	swal({
    		title: name,
    		text: info,
    		html: true,
			showConfirmButton: true
    	});

		$('.sweet-alert').css({'width': '480px', 'margin-left': '-256px'});

    	if (long == true)  {
    	    $('.sweet-alert').css({'width': '640px', 'margin-left': '-337px'});
    	}

    });



    </script>

<?php } ?>



<?php if ($wp == true) { ?>
    <!-- ****** WP_FOOT ****** -->
	 <?php  wp_footer(); ?>
	<!-- ****** WP_FOOT ****** -->
<?php } ?>


</body>
</html>

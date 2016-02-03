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

            <!-- ****** Floating Contact Form ****** -->
            <div class="float-box">
                <form id="contact-form" class="contact-form0" method="post" action="" novalidate="novalidate" style="display:none;">
                    <div class="text-left wrapper">
                        <h3 class="title text-left">Contact Us!</h3>
                        <div class="info">
                            <p>
                                Submit your Questions, Feedback or Ideas for <a onmouseover="tooltip.pop(this, '#agents-info', {position:3, maxWidth:320,})">Agents</a> here!
                                Check out already submitted ideas at
                                <a href="http://ideas.supernet.org" target="_blank">ideas.supernet.org</a>
                            </p>
                            <div style="display:none">
                                <div id="agents-info">
                                    Currently the following agents are in existence or under development:
                                    InstantDEX - decentralized exchange, Coins, Sophia (database), Relay, Ramchain/Lchain, MGW, Echodemo
                                </div>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="sr-only" for="cname">Your name</label>
                            <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="cemail">Email address</label>
                            <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required aria-required="true">
                            <div style="display:none;">
                                <div id="email-warn">Please enter a valid e-mail address!</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="radio" class="" id="ctype1" name="type" value="question" required="" aria-required="true" checked>
                            <label class="label" for="ctype1">Question</label>
                            <input type="radio" class="" id="ctype2" name="type" value="feedback" required="" aria-required="true">
                            <label class="label" for="ctype2">Feedback</label>
                            <input type="radio" class="" id="ctype3" name="type" value="idea" required="" aria-required="true">
                            <label class="label" for="ctype3">Idea suggestion</label>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="cmessage">Your message</label>
                            <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your idea or feedback" rows="6" required="" aria-required="true"></textarea>
                        </div>
                         <div class="form-group">
                            <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send your message</button>
                        </div>
                    </div><!--//row-->
                    <div id="form-messages">
                        <div class="response" style="display:none;">
                            <h3 class="title text-left">Message sent</h3>
                            <p>
                                Your message was sent successfully! Thank you for taking your time.
                                <a id="send-another" href="#send-another">Send another message</a>
                            </p>
                        </div>
                    </div>
                </form>

                <ul class="big-btn list-inline">
                    <li><a id="contact-btn" href="#contact-form"><i class="fa fa-comments-o"><b></b></i></a></li>
                </ul>
            </div><!--//Floating Contact Form-->


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
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/plugins/jquery.feeds.min.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/js/main.js"></script>
    <script type="text/javascript" data-cfasync="false" src="<?= $sprnt ?>/assets/js/pace.js"></script>

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





<script type="text/javascript">

    $('#contact-btn').click(function(){
        if ( $('#contact-btn .fa').hasClass("fa-comments-o") ) {
            $('#contact-btn .fa').removeClass("fa-comments-o").addClass("fa-close");
            $('#contact-form').slideToggle("fast");
        } else {
            $('#contact-btn .fa').addClass("fa-comments-o").removeClass("fa-close");
            $('#contact-form').slideToggle("fast");
        }

    });



    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        // var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
    };


    $("#cemail").live('change',function() {

        var emailaddress = $("#cemail").val();

        if( !isValidEmailAddress( emailaddress ) ) {

            $("#cemail").addClass("invalid");
            tooltip.pop(this, '#email-warn', {position:3, maxWidth:320})

        } else {

            $("#cemail").removeClass("invalid");
            tooltip.hide();

        }

    });



    // Variable to hold request
    var request;

    // Bind to the submit event of our form
    $("#contact-form").submit(function(event){

        var emailaddress = $("#cemail").val();

        if( !isValidEmailAddress( emailaddress ) ) {

            $("#cemail").addClass("invalid");
            $("#cemail").focus();
            tooltip.pop('cemail', '#email-warn', {position:3, maxWidth:320})
            return false;

        } else {

            // Abort any pending request
            if (request) {
                request.abort();
            }

            // setup some local variables
            var $form = $(this);


            // Let's select and cache all the fields
            var $inputs = $form.find("input, select, button, textarea");

            // Serialize the data in the form
            var serializedData = $form.serialize();

            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.
            $inputs.prop("disabled", true);

            // Fire off the request to /form.php
            request = $.ajax({
                url: "<?= $sprnt ?>/contact-form.php",
                type: "post",
                data: serializedData
            });

            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR){

                $('#contact-form .wrapper').hide();
                $('#contact-form .response').show();
                // Log a message to the console
                console.log("Hooray, it worked!" + response);
            });

            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown){
                // Log the error to the console
                console.error(
                    "The following error occurred: "+
                    textStatus, errorThrown
                );
            });

            // Callback handler that will be called regardless
            // if the request failed or succeeded
            request.always(function () {
                // Reenable the inputs
                $inputs.prop("disabled", false);
            });

            // Prevent default posting of form
            event.preventDefault();

        }

    });


    $('#send-another').click(function(){
        $('#contact-form .wrapper').show();
        $('#contact-form .response').hide();
    });


</script>


</body>
</html>

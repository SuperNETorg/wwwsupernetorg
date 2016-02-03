<?php
    include("./inc_header.php");

     header1(
        $body_class = "home-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "chat",
        $title      = "SuperNET Chat - Get in touch instantly via the SuperNET Slack "
    )
?>

<div class="headline-bg blog-headline-bg">
</div><!--//headline-bg-->

<!-- ******Video Section****** -->
<section class="story-section section section-on-bg">
    <h2 class="title container text-center">Join the SuperNET Slack</h2>
    <div class="story-container container text-center">
        <div class="story-container-inner" >
            <div class="about text-center">

              <h2>Slackinvite</h2>
              <!--
              <p>
                <i style="font-size:72px;color:#ccc;" class="fa fa-slack"></i>
              </p>
              <p>
                Join the SuperNET Slack
              </p> -->

              <iframe id="slackinvite" src="http://slackinvite.supernet.org/" style="border:0; width:100%; height:480px;"></iframe>

              <!-- <p>
                Automatic Slack invite is temporary disabled.
              </p>
              <p>
                Please write to <a href="mailto:info@supernet.org" title="Slackinvite">info@supernet.org</a> for an invite.
              </p> -->
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

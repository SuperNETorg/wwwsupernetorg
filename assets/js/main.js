$(document).ready(function() {

    /* ======= Twitter Bootstrap hover dropdown ======= */   
    /* Ref: https://github.com/CWSpear/bootstrap-hover-dropdown */ 
    /* apply dropdownHover to all elements with the data-hover="dropdown" attribute */
    
    $('[data-hover="dropdown"]').dropdownHover();
    
    /* ======= Fixed header when scrolled ======= */    
    $(window).bind('scroll', function() {
         
         if ($(window).scrollTop() > 0) {
             $('#header').addClass('navbar-fixed-top');
         }
         else {
             $('#header').removeClass('navbar-fixed-top');
             
         }
    });
    
    
    /* ======= jQuery Placeholder ======= */
    /* Ref: https://github.com/mathiasbynens/jquery-placeholder */
    
    $('input, textarea').placeholder();    
    
    /* ======= jQuery FitVids - Responsive Video ======= */
    /* Ref: https://github.com/davatron5000/FitVids.js/blob/master/README.md */
    
    $(".video-container").fitVids();
    
    /* ======= FAQ accordion ======= */
    function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find('.panel-title a')
        .toggleClass('active')
        .find("i.fa")
        .toggleClass('fa-plus-square fa-minus-square');
    }
    $('.panel').on('hidden.bs.collapse', toggleIcon);
    $('.panel').on('shown.bs.collapse', toggleIcon);    
    
    
    /* ======= Header Background Slideshow - Flexslider ======= */    
    /* Ref: https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties */
    
    $('.bg-slider').flexslider({
        animation: "fade",
        directionNav: false, //remove the default direction-nav - https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties
        controlNav: false, //remove the default control-nav
        slideshowSpeed: 8000,
        animationSpeed: 500,
        initDelay: 0,
        startAt: 1,
        randomize: false,
        after: function(){$(".bg-slider-wrapper .flexslider .slide").removeClass("empty");}
    });
	
	/* ======= Stop Video Playing When Close the Modal Window ====== */
    $("#modal-video .close").on("click", function() {
        $("#modal-video iframe").attr("src", $("#modal-video iframe").attr("src"));        
    });
     
    
     /* ======= Testimonial Bootstrap Carousel ======= */
     /* Ref: http://getbootstrap.com/javascript/#carousel */
    $('#testimonials-carousel').carousel({
      interval: 8000 
    });
    
    
    /* ======= Style Switcher ======= */
    $('#config-trigger').on('click', function(e) {
        var $panel = $('#config-panel');
        var panelVisible = $('#config-panel').is(':visible');
        if (panelVisible) {
            $panel.hide();          
        } else {
            $panel.show();
        }
        e.preventDefault();
    });
    
    $('#config-close').on('click', function(e) {
        e.preventDefault();
        $('#config-panel').hide();
    });
    
    
    $('#color-options a').on('click', function(e) { 
        var $styleSheet = $(this).attr('data-style');
		$('#theme-style').attr('href', $styleSheet);	
				
		var $listItem = $(this).closest('li');
		$listItem.addClass('active');
		$listItem.siblings().removeClass('active');
		
		e.preventDefault();
		
	});
	
	/* ======= Content External Links ======= */
	/* Ref: */
	var host = window.location.hostname;
	
	$('body section a[href^="http://"]').attr('target','_blank');
	$('body section a[href^="https://"]').attr('target','_blank');
	
	$('body section a[href^="http://' + host + '"]').attr('target','');
	$('body section a[href^="https://' + host + '"]').attr('target','');
	
	/* ======= Blog Feed ======= */
	/* Ref: https://github.com/camagu/jquery-feeds */
    $('#feeds').feeds({
        feeds: {
            feed1: 'http://www.supernet.org/blog/feed/'
        },
        max: 3,
        preprocess: function(feed) {
            // Change the publishedDate format from UTC to dd-mm-yyyy
    
            // Inside the callback 'this' corresponds to the entry being processed
            var date = new Date(this.publishedDate);
            var pieces = [date.getDate(), date.getMonth(), date.getFullYear()]
            this.publishedDate = pieces.join('-');
            
        },
        entryTemplate: function(entry) {
            
            this.entries[0]["classA"] = "active";
            
            var template =  '<div class="item <!=classA!>">' +
                            '<div class="content">' +
                            '<h4><a class="feed-entry-title" href="<!=link!>"><!=title!></a></h4>' +
                            '<blockquote>' +
                            '<i class="fa fa-quote-left"></i>' +
                            '<p class="feed-entry-content"><!=contentSnippet!> '+
                            '<a class="read-more" href="<!=link!>">read more</a></p>' +
                            '</blockquote>' +
                            // '<p class="source">' +
                            // '<!=publishedDate!><span class="title"> by <!=author!></span><p>' +
                            '</div>' +
                            '</div>';
                            
            return this.tmpl(template, entry);
        }
    });
    
    
    
});

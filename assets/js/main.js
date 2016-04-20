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



    /*
    decimal_sep: character used as deciaml separtor, it defaults to '.' when omitted
    thousands_sep: char used as thousands separator, it defaults to ',' when omitted
    */
    Number.prototype.toMoney = function(decimals, decimal_sep, thousands_sep)
    {
       var n = this,
       c = isNaN(decimals) ? 2 : Math.abs(decimals), //if decimal is zero we must take it, it means user does not want to show any decimal
       d = decimal_sep || '.', //if no decimal separator is passed we use the dot as default decimal separator (we MUST use a decimal separator)

       /*
       according to [http://stackoverflow.com/questions/411352/how-best-to-determine-if-an-argument-is-not-sent-to-the-javascript-function]
       the fastest way to check for not defined parameter is to use typeof value === 'undefined'
       rather than doing value === undefined.
       */
       t = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep, //if you don't want to use a thousands separator you can pass empty string as thousands_sep value

       sign = (n < 0) ? '-' : '',

       //extracting the absolute value of the integer part of the number and converting to string
       i = parseInt(n = Math.abs(n).toFixed(c)) + '',

       j = ((j = i.length) > 3) ? j % 3 : 0;
       return sign + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '');
    }


});

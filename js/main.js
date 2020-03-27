function scrollHeight() {
    var bodyHeight = $(window).height();
    var headerHeight = $('header').outerHeight() + 10;
    var sectionHeight = bodyHeight - headerHeight;
    var titleHeight = $('.title').outerHeight();
    var ContainerMinHeight = sectionHeight - titleHeight - 40;
    //$('section').css('margin-top',headerHeight);
    $('.zone-grid-container').css('height',sectionHeight-300);
    $('.zone-map-container').css('height',sectionHeight-275 );
    //$('.main-container').css('min-height',ContainerMinHeight);
}

$(window).resize(function() {
    scrollHeight();
});

$(document).ready(function(){
    
    /*Calendar Owl Carousel*/
    $("#year-carousel").owlCarousel({
        dots:false,
        items: 1
    });
    $("#month-carousel").owlCarousel({
        dots:false,
        loop: false,
        responsive:{
            0:{
                items: 3
            },
            600:{
                items:7
            },
            1000:{
                items:12
            }
        }
    });
    $("#day-carousel").owlCarousel({
        dots:false,
        loop: true,
        responsive:{
            0:{
                items: 5
            },
            600:{
                items:10
            },
            1000:{
                items:20
            }
        }
    });

    var itemIndex = $("#day-carousel .owl-item .item.selected").parent().index();
    $("#day-carousel").trigger('to.owl.carousel', [itemIndex, 0]);

    var IsPresentFeb = false;
    $('#month-carousel .item').click(function() {
        $('#month-carousel .item').removeClass('selected');
        var CurYear = $("#year-carousel").text();
        $(this).addClass('selected');   
        var CurSelected = $(this).text().toUpperCase();
        if((CurSelected == "JAN") || (CurSelected == "MAR") || (CurSelected == "MAY") || (CurSelected == "JUL") || (CurSelected == "AUG") || (CurSelected == "OCT") || (CurSelected == "DEC")) {
            $('#day-carousel .owl-item:nth-child(31)').show();
            if(IsPresentFeb) {
                $('#day-carousel .owl-item:nth-child(30)').show();
                $('#day-carousel .owl-item:nth-child(29)').show();
                IsPresentFeb = false;
            }
        }
        else if((CurSelected == "APR") || (CurSelected == "JUN") || (CurSelected == "SEP") || (CurSelected == "NOV")) {
            $('#day-carousel .owl-item:nth-child(31)').hide().slow();
            if(IsPresentFeb) {
                $('#day-carousel .owl-item:nth-child(30)').show();
                $('#day-carousel .owl-item:nth-child(29)').show();
                IsPresentFeb = false;
            }
        }
        else if((CurSelected == "FEB")) {
            IsPresentFeb = true;
            $('#day-carousel .owl-item:nth-child(31)').hide();
            $('#day-carousel .owl-item:nth-child(30)').hide();
            $('#day-carousel .owl-item:nth-child(29)').hide();
        }
    });

    /*Zone Allocation Tab Owl Carousel*/
    $("#floorTab").owlCarousel({
        dots:false,
        nav: true,
        responsive:{
            0:{
                items: 2
            },
            600:{
                items:3
            },
            1000:{
                items:7
            }
        }
    });

    $('#floorTab a').click(function(){
        $('#floorTab a.nav-item').removeClass('active');
    });

    /*Radio Button in Flex*/
    $('.btn-inline-container .btn').click(function(){
        $('.btn-inline-container .btn').removeClass('selected');        
        $(this).addClass('selected');
    });

    /*Initiate Tooltip*/
    $('[data-toggle="tooltip"]').tooltip();
    $('body').on('click', function (e) {
        if ($(e.target).data('toggle') !== 'tooltip'
            && $(e.target).parents('.tooltip.in').length === 0) { 
            $('[data-toggle="tooltip"]').tooltip('hide');
        }
    });

    /*Accordion Header Active*/
    $('.collapse').on('show.bs.collapse', function () {
        $(this).siblings('.card-header').addClass('active');
    });
    $('.collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.card-header').removeClass('active');
    });

    /*Accordion Open All - Clollapse All*/
    $(".open-button").on("click", function() {
        $(this).closest('.collapse-group').find('.collapse').collapse('show');
        $(this).parent().toggleClass('translate-up');
    });
    $(".close-button").on("click", function() {
        $(this).closest('.collapse-group').find('.collapse').collapse('hide');
        $(this).parent().toggleClass('translate-up');
    });

    /*Expected Quality Toggle*/
    $('.expected-value-label').click(function(){
        $(this).addClass('active');
        $('.expected-quality-label').removeClass('active');
        $(this).parent().parent().parent().addClass('expected-value');
    });
    $('.expected-quality-label').click(function(){
        $(this).addClass('active');
        $('.expected-value-label').removeClass('active');
        $(this).parent().parent().parent().removeClass('expected-value');
        $('.expected-value-field').val('');
    });

    /*Checkbox Toggle*/
    $('.chekbox-bg').click(function(){
        $(this).toggleClass('active');
    });

    $('.selected-event-name').click(function(){
        $('.event-names').slideToggle();
    }); 
    
    /*Header Hide Show*/
    $('.push-arrow').click(function(){
        $('.calendar-container').slideToggle();
        $('.calendar-collapse').toggleClass('turn');
        /*Change Section Height*/
        setTimeout(function(){
            scrollHeight();
        },500);
    }); 

    $('.radio-container input').click(function(){
        $('.radio-container input').parent().removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('.checkbox-container input').click(function(){
        $(this).parent().toggleClass('checked');
    });

    $('.incident-symptoms').click(function(){
        $(this).toggleClass('selected');
    });

    /*Add Template Inside Modal*/
    $('.additem').click(function(){
        $('.inner-add-template').slideToggle();
    });

    /*Toast*/
    $('.toast').toast();
    $('.updatebtn').click(function(){
        window.scrollTo(0, 0);
        $('.toast').toast('show');
    });

    /*Datepicker With Time*/
    $('#datetimepicker1').datetimepicker({
        debug: true
    });

    /*Datepicker Without Time*/
    $('#datetimepicker2').datetimepicker({
        format: 'L'
    });

    /*Alert Popup*/
    $('.alert-click').click(function() {
        $('.notification-details').slideUp();
        $('.alerts-popup').slideToggle();
    });
    // $('.alerts-popup .border-radius').click(function(){
    //     $('.alerts-popup').slideToggle();
    // });

    /*Notification Popup*/
    $('.notification-click').click(function()   {
        $('.alerts-popup').slideUp();
        $('.notification-details').slideToggle();
    });

    $('.settings, .login-section').hover(function() {
        $('.alerts-popup').slideUp();
        $('.notification-details').slideUp();
    });

    /*Change Section Height*/
    scrollHeight();

    /*Slim Scroll Scripts*/
    $('.incident-history-div').mCustomScrollbar();
    $('.zone-grid-container').mCustomScrollbar();
    $('.alert-chk-box-container').mCustomScrollbar();
    $('.event-plan-block-innerscroll').mCustomScrollbar();

    $('.btn-inline-filter .btn').click(function(){
        $(this).toggleClass('active');
    });

    $('.extend-search').focus(function(){
        $(this).addClass('');
    });
    $('.extend-search').focus(function(){
        $(this).addClass('max-search');
    });

    $('.extend-search input').on('blur', function(){
        if($(this).val().length==0) {
            $(this).parent('div').toggleClass('max-search');
        }
     }).on('focus', function() {
            $(this).parent('div').toggleClass('max-search');
     });

     $('.stewards-menu a.has-dropdown').click(function(){
        $(this).toggleClass('open');
        $(this).next('ul').slideToggle();
     });

     $('.increase-decrease span').click(function() {
        $('.increase-decrease span').removeClass('active');
        $(this).addClass('active');
     });
    
});


$('body').click(function(e) {
    if ($(e.target).closest('.right-top-bar').length === 0) {
        $('.alerts-popup').slideUp();
        $('.notification-details').slideUp();
    }
});
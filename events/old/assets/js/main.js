$(function() {

    "use strict";

    //===== Sticky
    $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 10) {
            $(".navbar-area").removeClass("sticky");
            $(".navbar-area img").attr("src", "assets/images/logo.png");
        } else {
            $(".navbar-area").addClass("sticky");
            $(".navbar-area img").attr("src", "assets/images/logo.png");
        }
    });


    //===== Section Menu Active
    var scrollLink = $('.page-scroll');
    // Active link switching
    $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function() {

            var sectionOffset = $(this.hash).offset().top - 73;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });
    });


    //===== close navbar-collapse when a  clicked
    $(".navbar-nav a").on('click', function() {
        $(".navbar-collapse").removeClass("show");
    });

    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass("active");
    });

    $(".navbar-nav a").on('click', function() {
        $(".navbar-toggler").removeClass('active');
    });


    //===== Sidebar
    $('[href="#side-menu-left"], .overlay-left').on('click', function(event) {
        $('.sidebar-left, .overlay-left').addClass('open');
    });

    $('[href="#close"], .overlay-left').on('click', function(event) {
        $('.sidebar-left, .overlay-left').removeClass('open');
    });


    //===== Slick
    $('.slider-items-active').slick({
        infinite: true,
        slidesToScroll: 1,
        speed: 1000,
        arrows: true,
        prevArrow: '<span class="prev"><i class="lni lni-arrow-left"></i></span>',
        nextArrow: '<span class="next"><i class="lni lni-arrow-right"></i></span>',
        dots: true,
        autoplay: true,
        autoplaySpeed: 7000
        
    });


    //===== Isotope Project 4
    $('.container').imagesLoaded(function() {
        var $grid = $('.grid').isotope({
            // options
            transitionDuration: '1s'
        });

        // filter items on button click
        $('.portfolio-menu ul').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        //for menu active class
        $('.portfolio-menu ul li').on('click', function(event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
    });


    //====== Magnific Popup
    $('.video-popup').magnificPopup({
        type: 'iframe'
            // other options
    });


    //===== Magnific Popup
    $('.image-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });


    //===== Back to top
    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });


    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    //===== 
    
    //navbar fixed when scroll down
    $(window).scroll(function() {
      var topNavbar = $('.sticky'),
        scroll = $(window).scrollTop();

      if (scroll >= 10) topNavbar.addClass('navbarFixed');
      else topNavbar.removeClass('navbarFixed');
    });


    //---contact form validation start
    function validation() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var website = document.getElementById('website').value;
        var message = document.getElementById('message').value;
        var error_message_name = document.getElementById("error_message_name");
        var error_message_email = document.getElementById("error_message_email");
        var error_message_phone = document.getElementById("error_message_phone");
        var error_message_website = document.getElementById("error_message_website");
        var error_message_message = document.getElementById("error_message_message");
        var text;
        var formError = 0;
        //var displayErrors = '';
        if (name.length < 2) {
            text = 'Please enter valid name <br/>';
            error_message_name.innerHTML = text;
            formError = 1;
            return false;
        }
        if (email.length < 5) {
            text = 'Please enter valid email <br/>';
            error_message_email.innerHTML = text;
            //displayErrors += text;
            formError = 1;
        }
        if (phone.length < 10) {
            text = 'Please enter valid Phone number <br/>';
            error_message_phone.innerHTML = text;
            //displayErrors +=  text;
            formError = 1;
        }
        if (website.length < 7) {
            text = 'Please enter valid website name </br>'
            error_message_website.innerHTML = text;
            //displayErrors += text;
            formError = 1;
        }
        if (message.length < 50) {
            text = 'Minimum 50 characters </br>';
            error_message_message.innerHTML = text;
            //displayErrors += text;
            formError = 1;
        }
    }
    //---contact form validation end

});
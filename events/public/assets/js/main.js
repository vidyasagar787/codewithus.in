$(function() {

    "use strict";


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


    //===== Back to top
    //Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });


    //Animate the scroll to top
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0,
        }, 500);
    });
    //===== 
    
    //navbar fixed when scroll down
    $(window).scroll(function() {
      var topNavbar = $('.sticky'),
        scroll = $(window).scrollTop();

        if (scroll >= 10) {
            console.log(10);
            topNavbar.addClass('navbarFixed');
            $('.navbar-area').css({
                'box-shadow' : '0px 2px 5px #022f4a'
            });
        } 
        else { 
            topNavbar.removeClass('navbarFixed');
            $('.navbar-area').css({
                'box-shadow' : '0px 0px 0px #022f4a'
            });
        }
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

    /* home page drawer contact form start */
    var expanded = false;
    $("#drawer-handle, .openContactForm").click(function() {
        if (expanded = !expanded) {
            $("#drawer-content").animate({ "margin-right": 0 }, "slow");
        } else {
            $("#drawer-content").animate({ "margin-right": -305 }, "slow");
        }
    });
    /* home page drawer contact form start */

});
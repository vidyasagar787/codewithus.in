<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics start-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JKWKX6D12R"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-JKWKX6D12R');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics end-->

    <meta charset="utf-8">
    
    <!--====== Title ======-->
    
    <?php
        foreach ($metaFile as $key => $meta) { 
            if($c==$meta['url']) {

            echo '<title>'.$meta['title'].'</title>';

            echo '<meta name="description" content="'.$meta['description'].'">';

            echo '<meta name="keywords" content="'.$meta['keywords'].'">';

            }
    }
    ?>

    <!-- GOOGLE SEARCH CONSOLE -->
    <meta name="google-site-verification" content="MPaUTPgBJcboXmCml_1n0ylGs9ou4cLF5IWu1FMD62I"/>
    
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= $_cssPath;?>magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= $_cssPath;?>slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= $_cssPath;?>LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= $_cssPath;?>bootstrap.min.css">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= $_cssPath;?>default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= $_cssPath;?>style.css">

    <link rel="stylesheet" href="<?= $_cssPath;?>mobilestyles.css">

    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

</head>

<body>
    <!--====== NAVBAR TWO PART START ======-->
    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <a href="tel:+916302207491" type="button" class="btn btn-light d-none d-md-block phoneButton"><i class="fas fa-phone-volume"></i> +91 630 220 7491</a>
                
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg mt-0">
                        
                        <a class="navbar-brand p-0 d-none d-lg-block" href="http://codewithus.in">
                            <img src="<?= $_imgPath;?>logo.png" alt="logo" title="logo" width="250" height="60" />
                        </a>

                        <a class="navbar-brand p-0 d-md-block d-lg-none" href="http://codewithus.in">
                            <img src="<?= $_imgPath;?>logo.png" alt="logo" title="logo" width="130" height="40" />
                        </a>

                        <a href="tel:+916302207491" type="button" class="btn btn-lights d-md-none mobilePhoneButton phoneButtonIpod"><i class="fas fa-phone-volume" style="color: #f2f2f2;"></i></a>
                        
                        <button class="navbar-toggler text-default" type="button" data-toggle="collapse"data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars" style="color: #f2f2f2;"></i></button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav navBarUl navListDesktop navListIpod">

                                <?php
                                $menus = [
                                    'home' => 'Home',
                                    'about_us' => 'About us',
                                    'services' => 'Services',
                                    'pricing' => 'Pricing',
                                    'contact_us' => 'Contact'
                                ];

                                foreach ($menus as $link => $menu) {

                                    $active = '';
                                    if(!empty($c)) {
                                        if($c == $link) $active = 'active';
                                    }else {
                                        if($link == 'home') $active = 'active';
                                    }

                                    echo '<li class="nav-item '.$active.'"><a class="page-scroll" href="'.$_base.$link.'">'.$menu.'</a></li>';
                                }

                                ?>

                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== NAVBAR TWO PART ENDS ======-->
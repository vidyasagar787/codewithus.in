<!--====== FOOTER PART START ======-->
<section class="footer-area" style="background:#f2f2f2; box-shadow: #ccc 0px -2px 10px;">
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="col-8 col-md-7 col-lg-4 pl-0">
                    <div class="footerHeading">Services</div>
                    <div class="socialMedia">
                        <div><a href="<?= base_url();?>/services">Web Development</a></div>
                        <div><a href="<?= base_url();?>/services">Mobile applications</a></div>
                        <div><a href="<?= base_url();?>/services">Domain registration</a></div>
                        <div><a href="<?= base_url();?>/services">Hosting</a></div>
                        <div><a href="<?= base_url();?>/services">Digital Marketing</a></div>
                    </div>
                </div>
                <div class="col-4 col-md-5 col-lg-3">
                    <div class="footerHeading">Quick links</div>
                    <div><a href="<?= base_url();?>/home">Home</a></div>
                    <div><a href="<?= base_url();?>/about_us">About us</a></div>
                    <div><a href="<?= base_url();?>/services">Services</a></div>
                    <div><a href="<?= base_url();?>/pricing">Prices</a></div>
                    <div><a href="<?= base_url();?>/contact_us">Contact us</a></div>
                </div>
                <div class="col-12 col-md-12 col-lg-5 pr-0">
                    <div class="footerHeading">Connect with us</u></div>

                    <div>
                        <i class="fas fa-phone-volume contactDetails"></i> 630 220 7491
                    </div>

                    <div class="mt-2">
                        <i class="fab fa-whatsapp contactDetails"></i> 9491 964 664
                    </div>

                    <div><i class="fas fa-envelope contactDetails mr-3 mt-2"></i> contact@codewithus.in</div>
                    <!-- <div><i class="fas fa-envelope contactDetails mr-3 mt-2"></i> codewithus@gmail.com</div> -->
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Email id for free news letter subscription">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Submit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
    <div class="bottom-strip">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4 col-12 col-sm-12 text-center text-md-left">
                    <p><a href="#">Privacy policy</a></p>
                </div>
                <div class="col-md-4 col-12 col-sm-12 text-center text-md-left">
                    <p><a href="#">Terms & conditions</a></p>
                </div> -->
                <div class="col-md-12 col-12 col-sm-12">
                    <p><i class="far fa-copyright"></i> codewithus.in 2020</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== FOOTER PART ENDS ======-->
<div id="drawer">
    <div id="drawer-handle">
        <img src="<?php echo base_url();?>/public/assets/images/enquire_btn.png" />
    </div>
    <div id="drawer-content">
        <div class="form_container">
            <form id="contact" action="<?= $_base;?>Contact_us/sendMail" method="post" onsubmit="return validation();">
                <p style="margin-bottom: 15px; font-weight: bold;">Please fill the below enquire form</p>
                <div>
                    <input id="name" name="name" placeholder="Your name" type="text">
                    <div id="error_message_name"></div>
                </div>
                <div>
                    <input id="phone" name="phone" placeholder="Your Phone Number" type="tel" >
                    <div id="error_message_phone"></div>
                </div>
                <div>
                    <input id="email" name="email" placeholder="Your Email Address" type="text">
                    <div id="error_message_email"></div>
                </div>
                <div>
                    <input id="city" name="city" placeholder="Your city" type="text">
                    <div id="error_message_email"></div>
                </div>
                <div>
                    <textarea id="message" name="message" placeholder="Type your requirment here"></textarea>
                    <div id="error_message_message"></div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--====== BACK TOP PART START ======-->
<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>
<!--====== BACK TOP TOP PART ENDS ======-->
<!--====== Jquery js ======-->
<script src="<?= base_url();?>/public/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script> -->
<!--====== Bootstrap js ======-->
<script src="<?= base_url();?>/public/assets/js/popper.min.js"></script>
<script src="<?= base_url();?>/public/assets/js/bootstrap.min.js"></script>
<!--====== Slick js ======-->
<!-- <script src="<?= base_url();?>/public/assets/js/slick.min.js"></script> -->
<!--====== Magnific Popup js ======-->
<!-- <script src="<?= base_url();?>/public/assets/js/jquery.magnific-popup.min.js"></script> -->
<!--====== Ajax Contact js ======-->
<!-- <script src="<?= base_url();?>/public/assets/js/ajax-contact.js"></script> -->
<!--====== Isotope js ======-->
<!-- <script src="<?= base_url();?>/public/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url();?>/public/assets/js/isotope.pkgd.min.js"></script> -->
<!--====== Scrolling Nav js ======-->
<!-- <script src="<?= base_url();?>/public/assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url();?>/public/assets/js/scrolling-nav.js"></script> -->
<!--====== Main js ======-->
<script src="<?= base_url();?>/public/assets/js/main.js"></script>

</body>

</html>
<!-- Our Footer -->
<section class="footer_one">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
                <div class="footer_about_widget">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="about.php">About Us</a></li>
                        <!-- <li><a href="#">Terms & Conditions</a></li> -->
                        <li><a href="user-guide.php">User’s Guide</a></li>
                        <li><a href="vendor-guide.php">Vendor’s Guide</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="footer_qlink_widget">
                    <h4>Other Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="#">Hyderabad</a></li>
                        <!-- <li><a href="#">8007, Australia.</a></li>
                        <li><a href="#">+1 246-345-0699</a></li>
                        <li><a href="#">+1 246-345-0695</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="footer_contact_widget">
                    <h4>Subscribe</h4>
                    <form class="footer_mailchimp_form">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <input type="email" class="form-control mb-2" id="inlineFormInput"
                                    placeholder="Your email">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2"><i
                                        class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="footer_social_widget">
                    <h4>Follow us</h4>
                    <ul class="mb30">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <!-- <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Footer Bottom Area -->
<section class="footer_middle_area pt40 pb40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="footer_menu_widget">
                    <ul>
                        <li class="list-inline-item"><a href="terms.php">Terms and Conditions</a></li>
                        <li class="list-inline-item"><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="copyright-widget text-right">
                    <p>© CopyRights 2020 IMS.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/isotop.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/snackbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/simplebar.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/scrollto.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/dashboard-script.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/script.js"></script>
</body>
<script>
$(document).ready(function() {
    if ($('div.QuickContact').length) {
        $('span.SlideArrow').on('click', function() {
            if ($('div.QuickContact').hasClass('Active')) {
                $('div.QuickContact').css('right', '-280px').removeClass('Active');
                $('span.SlideArrow').removeClass('fa-chevron-right').addClass('fa-chevron-left');
                $('div.QCBG').css('display', 'none');
            } else {
                $('div.QCBG').css('display', 'block');
                $('span.SlideArrow').removeClass('fa-chevron-left').addClass('fa-chevron-right');
                $('div.QuickContact').css('right', '0').addClass('Active');
            }
        });
        $('div.QCBG').on('click', function() {
            $('div.QuickContact').css('right', '-280px').removeClass('Active');
            $('span.SlideArrow').removeClass('fa-chevron-right').addClass('fa-chevron-left');
            $('div.QCBG').css('display', 'none');
        });
    }
    if ($('.popup-img1').length > 0) {
        $('.popup-img1').magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            }
        });
    };
    if ($('.StarRating').length > 0) {
        $('.StarRating').rating();
    }
    if ($('.breadcrumb_content span.FilterButton').length > 0) {
        $('.breadcrumb_content span.FilterButton').on('click', function() {
            $('body').addClass("body_overlay");
            $('.sidebar-menu').animate({left: 0}, 300);
        });
    }
    if ($('.sidebar-menu span.fa-close').length > 0) {
        $('.sidebar-menu span.fa-close').on('click', function() {
            $('.sidebar-menu').animate({left: '-300px'}, 300);
            $('body').removeClass("body_overlay");
        });
    }
});
</script>

<script>
    function ChangeOffer(Value) {
        $('input#SpecialOfferOption').val(Value);
    }
</script>

<script>
$('#devtest ul').addClass('order_list list-style-type-bullet');
</script>

<?php $this->load->view('front/includes/dev');?>

</html>

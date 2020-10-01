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
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/progressbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/dashboard-script.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="<?php echo base_url(FRONT_ASSETS);?>js/script.js"></script>
</body>
<script>
    $(document).ready(function() {
        if($('div.QuickContact').length) {
            $('span.SlideArrow').on('click', function() {
                if($('div.QuickContact').hasClass('Active')) {
                    $('div.QuickContact').css('right','-280px').removeClass('Active');
                    $('span.SlideArrow').removeClass('fa-chevron-right').addClass('fa-chevron-left');
                    $('div.QCBG').css('display','none');
                } else {
                    $('div.QCBG').css('display','block');
                    $('span.SlideArrow').removeClass('fa-chevron-left').addClass('fa-chevron-right');
                    $('div.QuickContact').css('right','0').addClass('Active');
                }
            });
            $('div.QCBG').on('click', function() {
                $('div.QuickContact').css('right', '-280px').removeClass('Active');
                $('span.SlideArrow').removeClass('fa-chevron-right').addClass('fa-chevron-left');
                $('div.QCBG').css('display', 'none');
            });
        }
        if ($(".popup-img1").length > 0) {
            $(".popup-img1").magnificPopup({
                type:"image",
                gallery: {
                    enabled: true,
                }
            });
        };
    });
</script>

<script>
$(document).ready(function() {
    $('span.Response').on('click', function() {
        if ($(this).hasClass('Response fa fa-plus')) {
            $(this).parent().siblings().children('div.QueryResponse').slideDown();
            $(this).removeClass('fa-plus').addClass('fa-minus');
        } else {
            $(this).parent().siblings().children('div.QueryResponse').slideUp();
            $(this).removeClass('fa-minus').addClass('fa-plus');
        }
    });
});
</script>
</html>
<!--jquery js-->
<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
<!--bootstrap js-->
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<!--owl-carousal-->
<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<!--progress-bar js-->
<script src="{{ asset('frontend/js/progressbar.js')}}"></script>
<!--isotope js-->
<script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<!--countTo js-->
<script src="{{ asset('frontend/js/jquery.countTo.min.js')}}"></script>
<!--Maginfic-Popup js-->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Animation JS -->
<script src="{{ asset('frontend/js/wow.min.js')}}"></script>
<!-- Rev-Slider -->
<script src="{{ asset('frontend/rev/js/rbtools.min.js')}}"></script>
<script src="{{ asset('frontend/rev/js/rs6.min.js')}}"></script>
<script src="{{ asset('frontend/js/rev-custom.js')}}"></script>
<!--custom js-->
<script src="{{ asset('frontend/js/custom.js')}}"></script>


<script>
    jQuery(window).on('load', function (e) {
        jQuery(".pq-applyform .form-btn").click(function () {
            var first_name = jQuery('#first-name').val();
            var doctor_name = jQuery('#doctor-name').val();
            var disease_name = jQuery('#disease-name').val();
            var email = jQuery('#e-mail').val();

            var result;

            jQuery('.pq-applyform .pq-message').remove();
            jQuery('.pq-applyform .pq-thank-you-message').remove();

            if (first_name == '' || first_name == undefined) {
                jQuery("<span class='pq-name-error-message pq-message'>Please fill the field</span>").insertAfter('.pq-applyform .name-field');
                result = false;
            }
            else {
                jQuery('.pq-name-error-message').remove();
                result = true;
            }

            if (email == '' || email == undefined) {
                jQuery("<span class='pq-email-error-message pq-message'>Please fill the field</span>").insertAfter('.pq-applyform .e-mail-field');
                result = false;
            }
            else {
                jQuery('.pq-email-error-message').remove();
                result = true;
            }

            if (doctor_name == '' || doctor_name == undefined )
            {
                jQuery("<span class='pq-doctor-name-error-message pq-message'>Please fill the field</span>").insertAfter('.pq-applyform .doctor-name-field');
                result = false;
            }
            else
            {
                jQuery('.pq-doctor-name-error-message').remove();
                result = true;
            }

            if (disease_name == '' || disease_name == undefined )
            {
                jQuery("<span class='pq-disease-name-error-message pq-message'>Please fill the field</span>").insertAfter('.pq-applyform #disease-name');
                result = false;
            }
            else
            {
                jQuery('.pq-disease-name-error-message').remove();
                result = true;
            }

            if(result == true)
            {
                var email = jQuery("#email").text();
                event.preventDefault();
                jQuery.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: {'email':email },
                    success: function(){
                        jQuery("<span class='pq-thank-you-message pq-text-white ms-5'> Thank You For Filling The form</span>").insertAfter('.pq-applyform .pq-button');
                    }
                });
            }
        });
    });
</script>

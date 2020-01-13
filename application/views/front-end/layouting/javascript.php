
<!-- Javascript -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!--<script src="<?=base_url()?>assets/js/vendor/jquery.min.js" type="text/javascript"></script>-->

<script src="<?=base_url()?>assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/functions.js" type="text/javascript"></script>

<!-- hover -->
		<script src="<?=base_url()?>assets/css/hover_img/modernizr.custom.js"></script>
		<script src="<?=base_url()?>assets/css/hover_img/toucheffects.js"></script>
<!-- end hover -->

<!-- Animation -->
<script src="<?=base_url()?>assets/js/vendor/aos.js" type="text/javascript"></script>
<script src="https://hammerjs.github.io/dist/hammer.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="<?=base_url()?>assets/js/carousel.js"></script>
<script src="<?base_url()?>assets/js/script.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.2.0/dist/simpleParallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map" type="text/javascript"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 10
      }, 1250, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<script>
var image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
	delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});
</script>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>

<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>

<script>
$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

<!-- weather widget -->
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<!-- end weather -->


<noscript>

    <style>

        *[data-aos] {

            display: block !important;

            opacity: 1 !important;

            visibility: visible !important;

        }

    </style>

</noscript>
<script>

    AOS.init({

        duration: 700

    });

</script>

<!-- Disable animation on less than 1200px, change value if you like -->

<script>

AOS.init({

  disable: function () {

    var maxWidth = 1200;

    return window.innerWidth < maxWidth;

  }

});

</script>
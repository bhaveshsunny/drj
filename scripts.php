<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="js/jquery.easing.1.3.js"></script> 



<script src="js/bootstrap.min.js"></script> 
 <script src="js/less.js"></script> 
<script src="js/jquery.bxslider.js"></script> 
<script src="js/jquery.flexslider.js" defer=""></script> 
<script src="js/site.js"></script> 
<!-- Switcher Js --> 
<script src="js/style.switcher.js"></script> 
<script src="js/jquery.cookie.js"></script>

<!-- Switcher Js -->

<script type="text/javascript">
	$(document).ready(function() {
	$('#myCarousel').carousel({
	interval: 10000
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    
});

</script>


	<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
	
	 $('.doctors-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint:991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
	
	</script>
    
    <script type="text/javascript">
	
	 $('.testimonial-slider-box').slick({
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});
	
	</script>





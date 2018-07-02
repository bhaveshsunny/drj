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
    var viewportWidth = $(window).width();
    if( viewportWidth > 768 ){
        var Rows = 1;
        var Slides = 5;
    } else {
        var Rows = 2;
        var Slides = 2;
    }

	 $('.doctors-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: Slides,
  slidesToScroll: 1,
  rows:Rows,
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: true,
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

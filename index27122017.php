<!DOCTYPE html>
<html lang="en">
 <?php include ('head.php');?>
<body>
    <!-- let's call the following div as the POPUP FRAME -->
<div id="popup">

    <!-- and here comes the image -->
    <img src="images/newhospital.jpg" alt="popup">
<p align="center">We are launching new hospital building with 150 beds </p>
        <!-- Now this is the button which closes the popup-->
        <button id="close" class="btn btn-primary btn-lg" align="center">Close button</button>
		 


        <!-- and finally we close the POPUP FRAME-->
        <!-- everything on it will show up within the popup so you can add more things not just an image -->
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
//with this first line we're saying: "when the page loads (document is ready) run the following script"
$(document).ready(function () {
	setTimeout(function(){ $("#popup").fadeOut(1000); }, 5000);
    //select the POPUP FRAME and show it
    $("#popup").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(1000);
    });

});
</script>
<!--Wrapper Section Start Here -->
<div id="wrapper"> 
  <!--<div id="pageloader" class="row m0">
<div class="loader-item"><img src="svg/grid.svg" alt="loading"></div>
    </div> --> 
	
	<link href="css/main.css" rel="stylesheet">
<link href="css/main.structure.css" rel="stylesheet">
<link href="css/provisional.css" rel="stylesheet">
	
  <!--header Section Start Here -->
  <?php include ('header.php');?>
  <!--header Section End Here --> 
 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
				
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}

        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}
		

    </style>

    <section>
        
  
	  <link href="css/bootstrap-slider.css" rel="stylesheet" media="all">
	  <script src="js/bootstrap-slider.js"></script>
        
    
		
	  <div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-4 text-right">
                       <!-- <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png">-->
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Walk in 4 hours.Totally painless Hip & Knee replacement with German based precision technology..</h3>
                                 <a href="arthroscopy.php" class="read-btn">READ MORE... </a>   
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
				    <div class="col-md-6 text-right">
                        
                    </div>
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Best center for Robotics and Oxinium knee replacement</h3>
                        <h4 data-animation="animated bounceInUp">More than 5000 Hip Knee Joint Replacement in Germany & India</h4>
						 <a href="about.php" class="read-btn">READ MORE</a>
                     </div>
                
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
				 <div class="col-md-5 text-right">  </div>  
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Center for Oxinium Knee Replacement</h3>
                        <h4 data-animation="animated bounceInUp">Pain less surgery  Fast track joint replacement surgery totally pain less walk with in 4 hrs.</h4>
						 <a href="joint-replacement.php" class="read-btn">READ MORE</a>
                     </div>
                      
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
				   <div class="col-md-5 text-right">  </div>
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">No1 Knee Replacement in asia</h3>
                        <h4 data-animation="animated bounceInUp">With advanced Laminar flow steel operation theater</h4>
						<a href="spine-surgery.php" class="read-btn">READ MORE</a>
                     </div>
                   
                </div></div>
            </div>
            <!-- End Item 4 -->
            <!-- start Item 5 -->
    <div class="item slide5">
                <div class="row"><div class="container">
				  <div class="col-md-5 text-right">
                      
                    </div>
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown"> 45 years of Legacy in Orthopedic</h3>
                       <a href="spine-surgery.php" class="read-btn">READ MORE</a>
                     </div>
                  
                </div></div>
            </div>
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

	 
     
        
    </section>

  
  <!--content Section Start Here -->
  <div id="content"> 
    
    <!--Info Section Start Here -->
    <div class="info-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 about-us">
            <header class="section-header">
              <h2>WHO WE ARE? <i></i></h2>
              <p style="text-transform:uppercase"><strong>We are the pioneer in popularizing new standards, bringing the beam of hope in our patients with a 45 years leagusy in orthopedic.</strong></p>
            </header>
			  <p style="text-align: justify;"><strong><a href="about.php" style="color:#093077;">
         Dr. Mir Jawad Zar Khan</a></strong> -  Is a senior orthopedic surgeon trained at germany and expert in trauma, knee & joint replacement and spine surgeon. He has completed his Masters of Science M.S  (Orthopaedics) Gold Medalist from Osmania University, Hyderabad and M.Ch Orthopedics from Usaim, Seychelles.  He has a record  breaking, 18 years of experience by handling enormus trauma surgeries & 5000+ joint replacements, Arthroscopic reconstructions & fracture surgeries.
           </p>
            <ul class="our-quality clearfix">
              <li> <i class="check-svg ">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve" class="svg replaced-svg">
                  <polyline class="stroke" fill="none" stroke="#A7A6A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="  9.5,14.643 12.071,17.215 18.5,10.786 "></polyline>
                  <g>
                    <path class="fill" fill="#A7A6A6" d="M14,2c6.617,0,12,5.383,12,12c0,6.617-5.383,12-12,12C7.383,26,2,20.617,2,14C2,7.383,7.383,2,14,2 M14,0   C6.268,0,0,6.268,0,14c0,7.732,6.268,14,14,14c7.732,0,14-6.268,14-14C28,6.268,21.732,0,14,0L14,0z"></path>
                  </g>
                </svg>
                </i> <strong><span>Clinical </span>Excellence</strong> </li>
              <li> <i class="check-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve" class="svg replaced-svg">
                  <polyline class="stroke" fill="none" stroke="#A7A6A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="  9.5,14.643 12.071,17.215 18.5,10.786 "></polyline>
                  <g>
                    <path class="fill" fill="#A7A6A6" d="M14,2c6.617,0,12,5.383,12,12c0,6.617-5.383,12-12,12C7.383,26,2,20.617,2,14C2,7.383,7.383,2,14,2 M14,0   C6.268,0,0,6.268,0,14c0,7.732,6.268,14,14,14c7.732,0,14-6.268,14-14C28,6.268,21.732,0,14,0L14,0z"></path>
                  </g>
                </svg>
                </i> <strong> <span> Facilities</span> &amp; Infrastructure</strong> </li>
              <li> <i class="check-svg">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve" class="svg replaced-svg">
                  <polyline class="stroke" fill="none" stroke="#A7A6A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="  9.5,14.643 12.071,17.215 18.5,10.786 "></polyline>
                  <g>
                    <path class="fill" fill="#A7A6A6" d="M14,2c6.617,0,12,5.383,12,12c0,6.617-5.383,12-12,12C7.383,26,2,20.617,2,14C2,7.383,7.383,2,14,2 M14,0   C6.268,0,0,6.268,0,14c0,7.732,6.268,14,14,14c7.732,0,14-6.268,14-14C28,6.268,21.732,0,14,0L14,0z"></path>
                  </g>
                </svg>
                </i> <strong><span>Health</span> Plans</strong> </li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 our-images">
            <ul>
              <li class="zoom">
                <figure> <a href="#"> <img alt="" src="images/03.jpg"></a> </figure>
              </li>
              <li class="zoom">
                <figure> <a href="#"><img alt="" src="images/about-img-2.png"></a> </figure>
              </li>
            </ul>
            <ul>
              <li>
              <iframe width="245" height="240" style="max-width: 100%;" src="https://www.youtube.com/embed/utn6Lq36sYw" autoplay frameborder="0" allowfullscreen ></iframe>
             
               <!--<figure> <a href="#"><img alt="" src="images/about-img-3.png"></a> </figure>-->
              </li>
              <li class="zoom">
                <figure> <a href="#"><img alt="" src="images/about-img-4.jpg"></a> </figure>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--Info Section End Here --> 
    
    <!---sec start-->
       <div class="container-fluid" style="background-color:#dadada; margin-bottom:0px ">
  
		   <div class="container"> <h2 style="font-size: 36px;
    color: #093077;
    font-weight: 900;
    letter-spacing: 3px;
    padding-bottom: 20px; padding-top:20px;
        text-transform:uppercase">Expertise In</h2></div>

        <div class="well" style="border:none !important;">
           
        <div class="container">
							<div class="section-wrap">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/1.jpg);">
              <div class="service-box-overlay">
              <center><img src="images/expertise-1.png" alt="" class="img-responsive" style="margin-top:27px;"></center>
              </div>
				
              <div class="service-box-content">
                <h5><a href="joint-replacement.php">Hip <br>Replacement</a></h5>
                </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/2.jpg);">
              <div class="service-box-overlay">
              	 <center><img src="images/expertise-2.png" alt="" class="img-responsive" style="margin-top:27px;"></center>
              </div>
              
              <div class="service-box-content">
                <h5><a href="knee-joint-replacement.php">Knee<br>Replacement </a></h5>
             </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/3.jpg);">
              <div class="service-box-overlay">
               <center><img src="images/expertise-3.png" alt="" class="img-responsive" style="margin-top:27px;"></center>
              	</div>
              
              <div class="service-box-content">
                <h5><a href="spine-surgery.php">Spine<br> Surgery</a></h5>
               </div>
              <!-- service-box-content --> 
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-box style-1" style="background-image:url(images/4.jpg);">
              <div class="service-box-overlay">
              	 <center><img src="images/expertise-4.png" alt="" class="img-responsive" style="margin-top:27px;"></center>
              </div>
              <div class="service-box-content">
                <h5><a href="arthroscopy.php">Accident &<br> Fracture</a></h5>
                 </div>
              <!-- service-box-content --> 
            </div>
          </div>
         
        </div>
      </div><!--sec end-->
					
			</div>
          
        </div>
        <!--/well-->
    
</div>
    <!---sec end-->
    <!--Service Section Start Here -->
    <div class="service-container">
      <div class="container">
        <div class="row">
         
          <div class="right-detail animate-effect">
            <h2 style="border-left:2px solid #ad0024; padding-left:20px; color:#fff;"> <span>OUR DOCTORS</span></h2>
          </div>
		  	
          <div class="col-xs-12">
            <div class="flexslider" id="carouselnew">
              <div class="flex-viewport" style="overflow: hidden; position: relative;">
                  <ul class="our-service slides animate-effect clearfix" style="width: 1000%; transform: translate3d(0px, 0px, 0px); transition-duration: 0s;">
                  <li class="zoom" style="width: 223px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/03.jpg"> </figure>
                    <strong> <i></i>Dr. Mir Jawad Zar Khan<span>MBBS, MS - Orthopaedics</span> </strong></a> </li>
					  <li class="zoom" style="width: 223px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/image-3.jpg"> </figure>
                    <strong> <i></i>Dr. T. Anil Kumar <span>Consultant Neuro Surgeon</span> </strong> </a> </li>
                  <li class="zoom" style="width: 223px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/image-2.jpg"> </figure>
                    <strong> <i></i>Dr. Pasham Indrasen Reddy<span> MBBS Dip Diabetis (NIMS) FIDM(CMC) </span> </strong> </a> </li>
                
                  <li class="zoom" style="width: 223px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/image-4.jpg"> </figure>
                    <strong> <i></i>Dr. Gita Krishna Puppala<span>MDRD(Radiodiagnosis)</span> </strong> </a> </li>
                  <li class="zoom" style="width: 223px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/image-5.jpg"> </figure>
                    <strong> <i></i>Dr. Mirza Mohammed Baig<span>MBBS,Dip Card, Consultant Cardiologist</span> </strong> </a> </li>
                </ul>
           
			   <ul class="flex-direction-nav">
                <li><a tabindex="-1" class="flex-prev flex-disabled" href="#">Previous</a></li>
                <li><a tabindex="-1" class="flex-next flex-disabled" href="#">Next</a></li>
              </ul>
            </div>
			
          </div>
		    </div>
		  
		    </div>
			
          </div>
		    </div>
		  


<!--
		  <div class="service-container">
      <div class="container">
        <div class="row">
         
          <div class="right-detail animate-effect">
            <h2 style="border-left:2px solid #f5931f; padding-left:20px; color:#fff;"> <span>GERMAN DOCTORS</span></h2>
          </div>
		  
		  
		  
		   <div class="col-xs-12">
            <div class="flexslider" id="carousel">
              <div class="flex-viewport" style="overflow: hidden; position: relative;">
		   <ul class="our-service slides animate-effect clearfix" style="width: 1000%; transform: translate3d(0px, 0px, 0px); transition-duration: 0s;">
                  <li class="zoom" style="width: 270px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/1112.jpeg"> </figure>
                    <strong> <i></i>Dr.Vladimir Martinek<span>Head Knee Replacement,University Hospital ,Munich,Germany</span> </strong> </a> </li>
					  <li class="zoom" style="width: 270px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/1113.jpeg"> </figure>
                    <strong> <i></i>Dr.Stephan Schill <span>Honorary  Professor ,Dept of Foot Hand Replacement Surgery University Hospital, Germany</span> </strong> </a> </li>
                  <li class="zoom" style="width: 270px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/1114.PNG"> </figure>
                    <strong> <i></i>Dr. Roland Wetzel<span>Honorary Department Head Hip & Knee Primary and Revision Joint Replacement Surgery University Hospital, Germany </span> </strong> </a> </li>
                
                  <li class="zoom" style="width: 270px; float: left; display: block;"> <a href="#"> <em class="fa fa-caret-up"></em>
                    <figure class="fade-effect"> <img draggable="false" alt="" src="images/1115.jpeg"> </figure>
                    <strong> <i></i>Dr. Langmeier <span>Head of Physiotherapy & Rehabilitation unit.University Hospital ,Munich,Germany</span> </strong> </a> </li>
                 
                </ul>
            <ul class="flex-direction-nav">
                <li><a tabindex="-1" class="flex-prev flex-disabled" href="#">Previous</a></li>
                <li><a tabindex="-1" class="flex-next flex-disabled" href="#">Next</a></li>
              </ul>
		 
		  
		      </div>
			
          </div>
		    </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
      </div>
    </div>-->
    <!--Service Section End Here --> 
	
	
    
    <!--testimonial-container Start Here -->
    <div class="testimonial-container">
      <div class="container"> 
        <!--<i class="corve"><img class="svg" alt="" src="svg/corve.svg"></i>-->
        <div class="row">
          <div class="col-xs-12 col-sm-6 tag-bg animate-effect">
            <div class="customer-says">
              <h2><span>WORDS BY</span> OUR PATIENTS <i></i></h2>
              <strong>We are with our patients across India</strong> </div>
          </div>
          <div class="col-xs-12 col-sm-6">
           <div class="testimonial-box">
              <div class="view-list animate-effect">
                <div class="flexslider" id="testimonial-silder">
                  <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides" style="width: 1200%; transform: translate3d(-2775px, 0px, 0px); transition-duration: 0s;">
                      <li class="flex-active-slide" style="width: 555px; float: left; display: block;">
                        <blockquote> <i class="fa fa-quote-right"></i>
                          
                           <p> The philosophy of the clinic is to constantly strive towards the excellence. I just wanted to let you know that I was absolutely impressed with my visit to the hospital in April – your service was amazing and the facilities were first class. You should be very proud of what you offer to your customers. </p>
                          <footer> Mrs. Santhosh </footer>
                        </blockquote>
                      </li>
                      <li style="width: 555px; float: left; display: block;">
                        <blockquote> <i class="fa fa-quote-right"></i>
                         <p>Human Touch Hospital deserves an applaud because it has specialized doctors as well as nurses who carry their duty with compassion and dedication. </p>
                          <footer> Ms. Madhuri </footer>
                        </blockquote>
                      </li>
                      <li style="width: 555px; float: left; display: block;">
                        <blockquote> <i class="fa fa-quote-right"></i>
                          <p>I’m very glad to share my experience with Human Touch Hospital. I underwent Total Hip Replacement (THR) surgery by Dr. Mir Jawad Zar Khan at Human Touch. </p>
                          <footer> Ms. Srilatha </footer>
                        </blockquote>
                      </li>
                      <li style="width: 555px; float: left; display: block;">
                        <blockquote> <i class="fa fa-quote-right"></i>
                          <p> The doctor guided in terms of the course of medication and physiotherapy exercises. When I was suggested surgery earlier. For the time being i do not require surgery immediately.</p>
                          <footer> Mrs. Srinivas</footer>
                        </blockquote>
                      </li>
                      <li class="flex-active-slide" style="width: 555px; float: left; display: block;">
                        <blockquote> <i class="fa fa-quote-right"></i>
                          <p>Life giver to many people like me who lost hopes to lead quality life. But post surgery of knee replacement he gave the same life...</p>
                          <footer>Mrs. Rajesh</footer>
                        </blockquote>
                      </li>
                     
                    </ul>
                  </div>
                  <ul class="flex-direction-nav">
                    <li><a class="flex-prev" href="#">Previous</a></li>
                    <li><a tabindex="-1" class="flex-next flex-disabled" href="#">Next</a></li>
                  </ul>
                </div>
              </div>
              <div class="thumb-box animate-effect">
                <div class="flexsilder" id="testimonial-carousel">
                  <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides" style="width: 1200%; transform: translate3d(-136px, 0px, 0px); transition-duration: 0s;">
                      <li style="width: 63px; float: left; display: block;"> <a href="#"><img draggable="false" alt="" src="images/t1.png"></a> </li>
                      <li style="width: 63px; float: left; display: block;"> <a href="#"><img draggable="false" alt="" src="images/t2.png"></a> </li>
                      <li style="width: 63px; float: left; display: block;"> <a href="#"><img draggable="false" alt="" src="images/t3.png"></a> </li>
                      <li style="width: 63px; float: left; display: block;"> <a href="#"><img draggable="false" alt="" src="images/t4.png"></a> </li>
                      <li style="width: 63px; float: left; display: block;"> <a href="#"><img draggable="false" alt="" src="images/t5.png"></a> </li>
                      <li class="flex-active-slide" style="width: 63px; float: left; display: block;"> <a href="#"><img draggable="false" alt="" src="images/t1.png"></a> </li>
                    </ul>
                  </div>
                  <ul class="flex-direction-nav">
                    <li><a tabindex="-1" class="flex-prev" href="#">Previous</a></li>
                    <li><a tabindex="-1" class="flex-next flex-disabled" href="#">Next</a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!--testimonial-container End Here --> 
    
    
    
    <!--partner-container Start Here -->
     <div class="our-partners">
      <div class="container">
        <div class="row">
         <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
               
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                	 <div class="col-md-3"><a href="#" class="thumbnail"><iframe  height="200" src="https://www.youtube.com/embed/tQv-lmCTspE" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/bS2-T5rtqtw" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/K2i5z2weeGQ" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/4Z5HfKHcEvw" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
										
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
						<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/hIVHk6eWSGI" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/M_LFt7482_k" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/LWAAp4S1pis" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/IUSwSCb9wA8" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/W6O_wZ-p8MY" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/-R3kWmRqgYM" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/Qbvdji6pO8U" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><iframe height="200" src="https://www.youtube.com/embed/iJygObiTEtQ" alt="Image" style="max-width:100%; width:100%;" allowfullscreen></iframe></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                
                
			</div><!---col-md-12 --->
        </div>
      </div>
    </div>
    <!--partner-container End Here --> 
    
    
    
    <!---photogallery sec start--->
	  <div class="container" style="margin-bottom: 25px">
	 
	   <h2 style="font-size: 36px;
    color: #000;
    font-weight: 900;
    letter-spacing: 3px;
    padding-bottom: 20px; padding-top:20px;
				  text-transform:uppercase"><center>Awards, News & Media</center></h2>
        
		  <div class="col-md-4" style="padding-left:1px; padding-right: 1px"><div class="overlay gallery-hover"><a href="#"><img src="images/profile-img-7.jpg" alt="" class="img-responsive" id="awards-sec-img"></a></div></div>
		  <div class="col-md-4" style="padding-left:1px; padding-right: 1px"><div class="overlay gallery-hover"><a href="#"><img src="images/news-22.jpg" alt="" class="img-responsive" id="awards-sec-img"></a></div></div>
			  <div class="col-md-4" style="padding-left:1px; padding-right: 1px"><div class="overlay gallery-hover"><a href="#"><img src="images/news-333.jpg" alt="" class="img-responsive" id="awards-sec-img"></a></div></div>
			  <div class="col-md-4" style="padding-left:1px; padding-right: 1px; padding-top:2px;"><div class="overlay gallery-hover"><a href="#"><img src="images/news-5.jpg" alt="" class="img-responsive" id="awards-sec-img"></a></div></div>
			
			  <div class="col-md-4" style="padding-left:1px; padding-right: 1px; padding-top:2px"><div class="overlay gallery-hover"><a href="#"><img src="images/news-44.png" alt="" class="img-responsive" id="awards-sec-img"></a></div></div>
		    <div class="col-md-4" style="padding-left:1px; padding-right: 1px; padding-top:2px"><div class="overlay gallery-hover"><a href="#"><img src="images/news-66.png" alt="" class="img-responsive" id="awards-sec-img"></a></div></div>
		  </div>
		  
   <!---photogallery sec end --->
   
  <p align="center"><strong></strong><a class="btn btn-primary btn-lg" href="img/Brochure-of-DCP-Program1.pdf" download="Brochure.pdf">Check النسخة العربية (Arabic Version) For More details of Dr. Mir Jawad Jar Khan</a></p>	

    
    <!--quote-container Start Here -->
   <!-- <div class="quote-container">
      <div class="right-banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <center><div class="quote-box animate-effect">
              <h4>Human touch strives to enhance its international profile for global patient Care <i></i></h4>
              <p style="color:rgba(255, 235, 59, 0.83);"> We redefine ourselves continuously challenging ourselves each day, to outreach you any moment,anywhere.
               </p>
				<a href="book-appointment.php">Book A Visit</a> </div></center>
          </div>
        </div>
      </div>
    </div>-->
    <!--quote-container End Here --> 
  </div>
  <!--content Section End Here --> 
  
  <!--footer Section Start Here -->
  <?php include ('footer.php');?>
  <!--footer Section End Here --> 
</div>
<!--Wrapper Section End Here --> 

 <?php include ('scripts.php');?>
</body>
</html>
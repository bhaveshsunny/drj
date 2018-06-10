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
        
        <script src="js/jssor.slider-26.7.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:125.00,t:-125.00}},{b:11000,d:500,c:{x:-125.00,t:125.00}}],
              [{b:0,d:600,x:535,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:800,c:{x:-250.0,t:250.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 2000,
              $Cols: 1,
              $Align: 0,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1920;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
        
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="images/11111.jpg" />
                <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">
                    <h2>Precision german based technology first time in India</h2>
                  <p style="color:black;"></p>
                  <a href="arthroscopy.php">READ MORE... </a></div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="images/22222.jpg" />
                <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">
                    <h2>Dr. Mir Jawad Zar Khan</h2>
                  <p style="color:black;">Specialist in Joint Replacements, Arthroscopy, Spine Surgeries</p>
                  <a href="about.php">READ MORE</a></div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="images/11111.jpg" />
                <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">
                    <h2>Center for Oxinium Knee Replacement</h2>
                 <p style="color:black;">Pain less surgery  Fast track joint replacement surgery totally pain less walk with in 4 hrs.</p>
                  <a href="joint-replacement.php">READ MORE</a></div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="images/22222.jpg" />
                <div data-u="caption" data-t="1" style="position:absolute;top:-50px;left:125px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">
                    <h2>No1 Knee Replacement in asia</h2>
                  <p style="color:black;">More than 5000+_ Hip & Knee Joint Replacements in Germany & India</p>
                  <a href="spine-surgery.php">READ MORE</a></div>
            </div>
            
<!--             <div data-p="170.00">
                <img data-u="image" src="images/11111.jpg" />
                <div data-u="caption" data-t="2" style="position:absolute;top:140px;left:-420px;width:500px;height:40px;background-color:rgba(255,188,5,0.8);font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;">
                    <h2>Center for Oxinium Knee Replacement</h2>
                 <p style="color:black;">Pain less surgery  Fast track joint replacement surgery totally pain less walk with in 4 hrs.</p>
                  <a href="joint-replacement.php">READ MORE</a></div>
            </div>-->
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
        
    </section>

  <!--slider Section Start Here -->
<!--  <section id="slider" class="top">

    <div class="img-slider">
      <div class="bx-wrapper" style="margin: 0px auto; max-width: 100%;">
        <div class="bx-viewport" style="width: 100%; height: 600px; overflow: hidden; position: relative;">
          <ul class="top-banner" style="width: auto; position: relative; transform: translate3d(0px, -1624.62px, 0px); transition-duration: 0s;">
           <li class="bx-clone" style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/11111.jpg"> </li>
           <li style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/11111.jpg"> </li>
           <li style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/22222.jpg"> </li>
            <li style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/11111.jpg"> </li>  
            <li style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/11111.jpg"> </li>
			<li style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/11111.jpg"> </li>
            <li style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/banner-img-3.png"> </li>
            <li class="bx-clone" style="list-style: none; width: 1366px; float: none; position: relative;"><img alt="#" src="images/banner-img-1.png"> </li>
          </ul>
        </div>
        <div class="bx-controls bx-has-controls-direction">
          <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div>
        </div>
      </div>
    </div>
    <div class="detail-content">
      <div class="container">
        <div class="detail">
          <div class="top-row"> <strong style="display: none;">HUMAN TOUCH HOSPITAL</strong> <strong style="display: none;">HUMAN TOUCH HOSPITAL</strong><strong style="display: none;">HUMAN TOUCH HOSPITAL</strong>  <strong style="display: block;">HUMAN TOUCH HOSPITAL </strong>
            <div class="direction-arrrow"> <a class="prv" href="javascript:;"></a> <a class="next" href="javascript:;"></a> </div>
          </div>
          <div class="bx-wrapper" style="margin: 0px auto; max-width: 100%;">
            <div class="bx-viewport" style="width: 100%; height: 200px; overflow: hidden; position: relative;">
              <ul class="bottom-sec" id="bottom-sec" style="left: -1839px; width: 515%; position: relative;">
                <li class="inner-bottom-sec bx-clone" style="list-style: none; width: 600px; float: left; position: relative;">
                  <h2>Precision german based technology first time in India</h2>
                  <p style="color:black;"></p>
                  <a href="arthroscopy.php">READ MORE... </a> </li>
                  
                  
                   <li class="inner-bottom-sec" style="list-style: none; width: 600px; float: left; position: relative;">
                  <h2>Dr. Mir Jawad Zar Khan</h2>
                  <p style="color:black;">Specialist in Joint Replacements, Arthroscopy, Spine Surgeries</p>
                  <a href="about.php">READ MORE</a> </li>
                  
                  <li class="inner-bottom-sec" style="list-style: none; width: 600px; float: left; position: relative;">
                  <h2>Center for Oxinium Knee Replacement</h2>
                 <p style="color:black;">Pain less surgery  Fast track joint replacement surgery totally pain less walk with in 4 hrs.</p>
                  <a href="joint-replacement.php">READ MORE</a> </li>
                  
                   <li class="inner-bottom-sec" style="list-style: none; width: 600px; float: left; position: relative;">
                  <h2>No1 Knee Replacement in asia</h2>
                  <p style="color:black;">More than 5000+_ Hip & Knee Joint Replacements in Germany & India</p>
                  <a href="spine-surgery.php">READ MORE</a> </li>
                  
                   <li class="inner-bottom-sec" style="list-style: none; width: 600px; float: left; position: relative;">
                  <h2>Knee & Hip replacement </h2>
                  <p style="color:black;">Partial knee or total hip arthroplasty using a RIO Robotic Arm first time in India</p>
                  <a href="emergency-care.php">READ MORE</a> </li>
                  
              </ul>
            </div>
            <div class="bx-controls bx-has-controls-direction">
              <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--slider Section End Here --> 
  
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
         Dr. Mir Jawad Zar Khan</a></strong> -  Is a senior orthopedic surgeon trained at germany and expert in trauma, knee & joint replacement and spine surgeon. He has completed his Masters of Science M.S  (Orthopaedics) Gold Medalist from Osmania University, Hyderabad and M.Ch Orthopedics from Usaim, Seychelles.  He has a record  breaking, 17 years of experience by handling more than 1 lakh trauma surgeries & 5000+ joint replacements, Arthroscopic reconstructions & fracture surgeries.
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
            <h2 style="border-left:2px solid #f5931f; padding-left:20px; color:#fff;"> <span>OUR DOCTORS</span></h2>
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
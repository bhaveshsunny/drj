<!DOCTYPE html>
<html lang="en">
	<?php include ('head.php');?>
	
	<link href="js/datepicker/datepicker.css" rel="stylesheet">
	
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" type="" />
  
  
	<style type="text/css">
	.project-discription .right-content .img-box li {
    float: left;
    width: 50%;
    padding: 0 0 3px 3px;
    list-style: none;
    z-index:9999;
}
.capbox {
	background-color: #92D433;
	border: #B3E272 0px solid;
	border-width: 0px 12px 0px 0px;
	display: inline-block;
	*display: inline; zoom: 1; /* FOR IE7-8 */
	padding: 8px 40px 8px 8px;
	}

.capbox-inner {
	font: bold 11px arial, sans-serif;
	color: #000000;
	background-color: #DBF3BA;
	margin: 5px auto 0px auto;
	padding: 3px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaDiv {
	font: bold 17px verdana, arial, sans-serif;
	font-style: italic;
	color: #000000;
	background-color: #FFFFFF;
	padding: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaInput { margin: 1px 0px 1px 0px; width: 135px; }

	</style>
	<body>
		<!--Wrapper Section Start Here -->
		<div id="wrapper">

			<!--header Section Start Here -->
			<?php include ('header.php');?>
			<!--header Section End Here -->

			<!--content Section Start Here -->
			<div id="content">

		

			 
			   	<div class="container-fluid" style="padding-right:0px; padding-left: 0px;">
						<section class="content-panel capital-campaign3">
               
            </section>
						</div>
			
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="breadcrumbs-box">
								<ul class="clearfix">
									<li>
										<a href="#">home</a>
									</li>
									<li>
										Book Appointment
									</li>
								</ul>
							</div>
						</div>
						
						
					
						
						<div class="col-xs-12">
						
						<div class="row">
						
						<div class="project-discription clearfix">
						<div class="col-md-12">
						 
                           <div class="our_contact clearfix">
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong> for using our template. Your message has been sent.
									</div>
								</div>
								<h3>Book An Appointment <i></i></h3>

								<div class="left-detail clearfix">
									<strong>Fill the form we will call you and fix the appointment on your best timings</strong>
									
									
									
									<form id="eventForm"  onsubmit="return checkform(this);" action="mail.php" method="post">
										<fieldset>
										
										    
											<span class="coll-1">
											<input type="text" name="name" required placeholder="FULL NAME" id="name">
											
											<input type="text" name="email" placeholder="EMAIL" id="email">
											
											<!-- <input type="text" name="age" placeholder="AGE" id="age" >	-->
						                    
						                     <!-- <input type="text" name="location" placeholder="LOCATION" id="location">  -->
											</span>
											

											<span class="coll-1 last">
											
					                      
						                       
					                       <input type="text" required name="phone" placeholder="PHONE" id="phone">
				                       																
				                       		 <!--<select id="subject" name="gender" class="form-group form-control">
						                       <option>SELECT GENDER</option>
							                       <option>Male</option>
							                       <option>Female</option>
							                       <option>Others</option>
						                       </select>-->														
					                       		
					                       		<!--														
					                       		<select id="subject" required name="subject" class="form-group form-control">
	                                                  <option>SELECT TREATMENT</option>
	                                                  <option>Joint Replacement</option>
														<option> Arthroscopy & Sports Injuries</option>
														<option> Arthroplasty </option>
														<option>Spine Surgery</option>
														<option> Shoulder Surgery </option>
														<option> Orthopaedic Oncology </option>
														<option>Neurology</option>
														<option>Rheumatology & Arthritis</option>
														<option>Hand & Microvascular Surgery</option>
														<option>Foot and Ankle Surgery</option>
														<option>Others</option>
													</select>-->																																										
																											
					                  <div class="input-group" >
     
        <input id="date" name="date" required placeholder="APPOINTMENT DATE" type="text"/>
       </div>

					                    																
						                       																
						                    </span>

											<div class="box clearfix">
												<textarea placeholder="REASON FOR APPOINTMENT" name="message" id="message" > </textarea>
												
											</div>
											
											<!-- START CAPTCHA -->
											<br>
											<div class="capbox">

											<div id="CaptchaDiv"></div>

											<div class="capbox-inner">
											Type the above number:<br>

											<input type="hidden" id="txtCaptcha">
											<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

											</div>
											</div>
											<br><br>
											<!-- END CAPTCHA -->

											
											<input type="submit" value="Book" id="submitbtn" style="background:#000; color:#fff;float: right; border: none;width: 184px;height: 53px;background: #f38929;letter-spacing: 1px;font-size: 15px;line-height: 21px;color: #fff;font-weight: 700;padding: 16px 10px;text-align: center;margin-top: 10px;">
										</fieldset>
									</form>

								</div>

								<div class="right-detail">
									
									<img src="images/appointment-img.jpg" alt="" class="img-responsive">
								</div>

							</div>
                       
							</div> <!--col-md-12 end--->
							
							
							</div>
							</div>
							
						</div>  <!--col-xs-12--->

						

					</div>

				</div>

			</div>
			<!--content Section End Here -->
			
			
			
			<!--footer Section Start Here -->
			<?php include ('footer.php');?>
			<!--footer Section End Here -->

		</div>
		<!--Wrapper Section End Here -->
       
       
        <?php include ('scripts.php');?>
        
        
        <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "Please Enter CAPTCHA Code";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "The CAPTCHA Code Does Not Match.";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>


        
	</body>
</html>
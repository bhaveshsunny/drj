
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
									
									
									
									<form id="eventForm" action="mail.php" method="post">
										<fieldset>
										
										    
											<span class="coll-1">
											<input type="text" placeholder="FULL NAME" id="name">
											
											<input type="text" placeholder="EMAIL" id="email">
											
											 <input type="text" placeholder="AGE" id="age" >	
						                    
						                      <input type="text" placeholder="LOCATION" id="location">  
											</span>
											

											<span class="coll-1 last">
											
					                      
						                       
					                       <input type="text" placeholder="PHONE" id="phone" class="error">
				                       																
				                       		 <select id="subject" class="form-group form-control">
						                       <option>SELECT GENDER</option>
							                       <option>Male</option>
							                       <option>Female</option>
							                       <option>Others</option>
						                       </select>														
					                       		
					                       																
					                       		<select id="subject" class="form-group form-control">
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
													</select>																																										
																											
					                  <div class="input-group" >
     
        <input id="date" name="date" placeholder="APPOINTMENT DATE" type="text"/>
       </div>

					                    																
						                       																
						                    </span>

											<div class="box clearfix">
												<textarea placeholder="REASON FOR APPOINTMENT" id="message" > </textarea>
												
											</div>
											
											<input type="button" value="SEND" id="submit" style="background:#0b3077; ">
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

        
	</body>
</html>
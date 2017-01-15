<?php

function notes_proj_1_temperature_converter(){
	/**
		* I store my notes in a functionn so i can open and close them as needed - yeah code folding
		*
		*
		*
		* TODO :: Convert '$_GET' calls to '$_POST'
		**/
}

include './Classes/Temperature_class.php';



#END config area


include_once './include/credentials-inc.php'; #keys to the kingdom
include_once './include/config-inc.php';      #site set up
#include_once './include/common-inc.php'; 			#generic functions
include_once './include/custom-inc.php'; 			#specific / customs functions
include_once './include/header-inc.php';




#
echo '<div class="itc250-loader"></div>';
#2Do   make dynamic
include 'include/nav-inc.php';


	echo '

	<header id="itc250-header" class="itc250-cover itc250-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<br />
							<br />
							<h2><a href="https://seattlecentral.instructure.com/courses/1411144/assignments/8978951?module_item_id=20397614"
								target="_blank">ITC 250 Project One</a></h2>
							<h1><small style="color: white;">Temperature Converter</small></h1>';




							echo'<div class="clearfix"></div>
								<div>
									<form action="' . THIS_PAGE . '" method="GET">

										<!-- degree -->
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-dashboard"></span>
											<input type="text" name="degree"
												class="form-control"
												placeholder="Enter value to be converted then select conversion type">
										</div>

										<br />

										<!-- select degree -->
										<div class="input-group">
											<select name="scale">
											<option value="">Select Temperature Type to convert to...</option>
											<option value="celcius">Celsius</option>
											<option value="fahrenheit">Fahrenheit</option>
											<option value="kelvin">Kelvin</option>
										</select>
										</div>

										<br>

										<!-- submit -->
										<div class="input-group">
											<input id="submit" type="submit" class="form-control"
											name="Convert Temperature" />
											<span class="input-group-addon"><span class="glyphicon glyphicon-chevron-right"></span></i></span>
										</div>
									</form>

								</div>

							<div class="clearfix"></div>';




							#THIS SHOULD BE DONE VIA POST - THESE AREN'T BOOKMARKABLE PAGES


							//check for input
							if (array_key_exists('degree',$_GET)){
								$scale = $_GET['scale'];
								$degree = $_GET['degree'];
								$firstLength = strlen($_GET['degree']);

								$temperature = new Temperature();

								//check that input is not NULL or NaN
								if(($firstLength > 0) && (is_numeric($_GET['degree'])))
									{
										if ($scale == "celcius")
									{
										 print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>celsius</td></tr>";

										 $temp = $temperature->c2f($degree);
										 print "<tr><td>$temp</td><td>fahrenheit</td></tr>";

										 $temp = $temperature->c2k($degree);
										 print "<tr><td>$temp</td><td>kelvin</td></tr>";
									}

									if ($scale == "fahrenheit")
									{
										 print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>farhenheit</td></tr>";

										 $temp = $temperature->f2c($degree);
										 print "<tr><td>$temp</td><td>celsius</td></tr>";

										 $temp = $temperature->f2k($degree);
										 print "<tr><td>$temp</td><td>kelvin</td></tr>";
									}

									if ($scale == "kelvin")
									{
										 print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>
										 $degree</td><td>kelvin</td></tr>";

										 $temp = $temperature->k2f($degree);
										 print "<tr><td>$temp</td><td>fahrenheit</td></tr>";

										 $temp = $temperature->k2c($degree);
										 print "<tr><td>$temp</td><td>celsius</td></tr>";
									}

									#Added Opening curly brace after else statement - WHY NO openng curly brace?
								}else{
									//print an error message if input is NULL or NaN
									echo "<span style = \"color:red\">*Please Enter a Valid Temperature.</span>";
								}




							}




						echo '</div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="itc250-project">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/proj-1.jpg" alt="Project title here" class="img-responsive">
						<h3>P1</h3>
						<span>Temperature Converter</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-2.jpg" alt="Project title here" class="img-responsive">
						<h3>P2</h3>
						<span>Project Title</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-3.jpg" alt="Project title here" class="img-responsive">
						<h3>Proj 1</h3>
						<span>Project Title</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-4.jpg"  alt="Project title here" class="img-responsive">
						<h3>Proj 1</h3>
						<span>Project Title</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-5.jpg"  alt="Project title here" class="img-responsive">
						<h3>Proj 1</h3>
						<span>Project Title</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-6.jpg"  alt="Project title here" class="img-responsive">
						<h3>Proj 1</h3>
						<span>Project Title</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-1.jpg"  alt="Project title here" class="img-responsive">
						<h3>Proj 1</h3>
						<span>Project Title</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-2.jpg"  alt="Project title here" class="img-responsive">
						<h3>Proj 1</h3>
						<span>Project Title</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-3.jpg"  alt="Project title here" class="img-responsive">
						<h3>Proj 1</h3>
						<span>Project Title</span>
					</a>
				</div>
			</div>
		</div>
	</div>


	<div id="itc250-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center itc250-heading">
					<h2>Lets Get Started</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Get In Touch</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	';

include 'include/footer-inc.php';








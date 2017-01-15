<?php

function notes_proj_1_temperature_converter(){
	/**
		* I store my notes in a functionn so i can open and close them as needed - yeah code folding
		*
		*
		*
		* TODO :: Convert '$_GET' calls to '$_POST'
		* UPDO :: Refactored switch statement. Refactor html to ps 1/2 standard
		* UPDO :: Resovle format bug (missing table tag)
		**/
}

include './Classes/Temperature_class.php';



#END config area



include_once './include/credentials-inc.php'; #keys to the kingdom
include_once './include/config-inc.php';      #site set up
#include_once './include/common-inc.php'; 			#generic functions
include_once './include/custom-inc.php'; 			#specific / customs functions
include_once './include/header-inc.php';



#override some style issues
echo '

<style>

	.removeUnderline a { color: #FFFFFF; text-decoration: none; }
</style>


<!-- make dropdown select pretty -->
<!-- Latest compiled and minified CSS -->


</script>
';


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

							<h1 style="color: white; text-decoration: none;">
								<a class="removeUnderline"
								href="https://seattlecentral.instructure.com/courses/1411144/assignments/8978951?module_item_id=20397614"
								target="_blank" style="text-decoration: none;" >
									<small style="color: white; text-decoration: none;" >
										Temperature Converter
									</small>
								</a>
							</h1>
							<br />';



							#when declaring method, it's lowercase so we know it is not the yet the value 'post' is not '$_POST'
							echo'<div class="clearfix"></div>

										<div class="col-md-10 col-md-offset-2 text-center">

											<form action="' . THIS_PAGE . '" method="post">

												<!-- degree -->
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
													<input
														style="background-color: #fff;"
														id="degree"
														type="text"
														class="form-control"
														name="degree"
														placeholder="Enter value to converted then select type">
												</div>'

?>

<!-- select degree -->

<hr />

	<div class="input-group">
		<span class="input-group-addon">@</span>
		<select class="form-control selectpicker">
			<option value="celcius">Celsius</option>
			<option value="fahrenheit">Fahrenheit</option>
			<option value="kelvin">Kelvin</option>
		</select>
	</div>



<hr />

<script>
	$(document).ready(function () {
		var mySelect = $('#first-disabled2');

		$('#special').on('click', function () {
			mySelect.find('option:selected').prop('disabled', true);
			mySelect.selectpicker('refresh');
		});

		$('#special2').on('click', function () {
			mySelect.find('option:disabled').prop('disabled', false);
			mySelect.selectpicker('refresh');
		});

		$('#basic2').selectpicker({
			liveSearch: true,
			maxOptions: 1
		});
	});
</script>



<?php
								echo '<br>

												<!-- submit -->
												<div class="input-group">
													<input
														class="form-control"style="background-color: #fff;"
														id="submit"
														type="submit"
														name="Convert Temperature" value="Convert Now" />
													<span class="input-group-addon"><span class="glyphicon glyphicon-chevron-right"></span></i></span>
												</div>

											</form>
										</div>

								<div class="clearfix"></div>


								<br /><br />';




								 #THIS SHOULD BE DONE VIA POST - THESE AREN'T BOOKMARKABLE PAGES


								 //check for input
								 if (array_key_exists('degree',$_POST)){
									$scale = $_POST['scale'];
									$degree = $_POST['degree'];
									$firstLength = strlen($_POST['degree']);

										 $temperature = new Temperature();

									 $str = '<table class="table table-hover">';
									//check that input is not NULL or NaN
									if(($firstLength > 0) && (is_numeric($_POST['degree'])))
										{
										if ($scale == "celcius")
										{
											 $str .= "<tr>
													<th colspan=2 class='text-center warning'> Conversion Results</th>
												 </tr>
													<tr>
														<td class='text-center info'>{$degree}</td>
														<td class='text-center info'>celsius</td>
													</tr>";

											 $temp = $temperature->c2f($degree);
											 $str .=  "<tr>
													 <td class='text-center warning'>{$temp}</td>
													<td class='text-center warning'>celsius</td>
												</tr>";

											 $temp = $temperature->c2k($degree);
											 $str .=  "<tr>
												 <td class='text-center info'>{$temp}</td>
												<td class='text-center info'>kelvin</td>
											</tr>"; }

										if ($scale == "fahrenheit")
										{
											$str .=  "<tr>
													<th colspan=2> Conversion Results</th>
												</tr>
												<tr>
													<td class='text-center info'>{$degree}</td>
													<td class='text-center info'>farhenheit</td>
												</tr>";

											$temp = $temperature->f2c($degree);
											$str .=  "<tr>
													<td class='text-center warning'>{$temp}</td>
													<td class='text-center warning'>celsius</td>
												</tr>";

											$temp = $temperature->f2k($degree);
											$str .=  "<tr>
												<td class='text-center info'>{$temp}</td>
												<td class='text-center info'>kelvin</td>
											</tr>";}

										 if ($scale == "kelvin")
										{
											$str .=  "<tr>
												<th colspan=2> Conversion Results</th>
											</tr>
											<tr>
												<td class='text-center info'>{$degree}</td>
												<td class='text-center info'>kelvin</td>
											</tr>";

											$temp = $temperature->k2f($degree);
											$str .=  "<tr>
												<td class='text-center warning'>{$temp}</td>
												<td class='text-center warning'>fahrenheit</td>
											</tr>";

											$temp = $temperature->k2c($degree);
											$str .=  "<tr>
												<td class='text-center info'>{$temp}</td>
												<td class='text-center info'>celsius</td>
											</tr>";}

									 } else { //print an error message if input is NULL or NaN
										$str .=  "<span style = \"color:red\">*Please Enter a Valid Temperature.</span>";
									}

									echo $str = $str . '</table>'; #we have to close the table - poorly formated html

								}




						echo '</div>
						</div>
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








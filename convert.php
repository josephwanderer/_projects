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

include './Classes/Temperature.class.php';



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

							<br />

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
										<div class="col-md-12 text-center">


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
														placeholder="Enter value to convert then select type">
												</div>

												<br />

												<!-- select degree -->
												<div class="form-group">
													<div class="col-xs-12">
														<select id="company" class="form-control col-sm-12 text-center  "
														name="scale" >
															<option value="">Select Temperature Type to convert from...</option>
															<option value="celcius">Celsius</option>
															<option value="fahrenheit">Fahrenheit</option>
															<option value="kelvin">Kelvin</option>
                                                            <option value="rankine">Rankine</option>
														</select>
													</div>
												</div>


												<br><br>

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

									//check that input is not NULL or NaN
									if(($firstLength > 0) && (is_numeric($_POST['degree'])))
										{
                                        
                                        //switch statement to convert the input depending on scale and format it for output
                                        switch ($scale) {
                                            case "celcius":
                                                $degC = number_format($degree, 2);
                                                $degF = number_format((Temperature::c2f($degree)), 2);
                                                $degK = number_format((Temperature::c2k($degree)), 2);
                                                $degR = number_format((Temperature::c2r($degree)), 2);
                                                break;
                                            case "fahrenheit":
                                                $degC = number_format((Temperature::f2c($degree)), 2);
                                                $degF = number_format($degree, 2);
                                                $degK = number_format((Temperature::f2k($degree)), 2);
                                                $degR = number_format((Temperature::f2r($degree)), 2);
                                                break;
                                            case "kelvin":
                                                $degC = number_format((Temperature::k2c($degree)), 2);
                                                $degF = number_format((Temperature::k2f($degree)), 2);
                                                $degK = number_format($degree, 2);
                                                $degR = number_format((Temperature::k2r($degree)), 2);
                                                break;
                                            case "rankine":
                                                $degC = number_format((Temperature::r2c($degree)), 2);
                                                $degF = number_format((Temperature::r2f($degree)), 2);
                                                $degK = number_format((Temperature::r2k($degree)), 2);
                                                $degR = number_format($degree, 2);
                                                break;
                                            default;
                                                $degC = "Error";
                                                $degF = "Error";
                                                $degK = "Error";
                                                $degR = "Error";
                                                break;
                                        }

                                        //print a table of the conversions
                                        echo 
                                            "
                                                <table class='table table-hover'>
                                                    <tr>
                                                        <th colspan=2 class='text-center warning'>Conversion Results</th>
                                                    </tr>
                                                    <tr>
                                                        <td class='text-center info'>$degC</td>
                                                        <td class='text-center info'>Celsius</td>
                                                    </tr>
                                                    <tr>
                                                        <td class='text-center warning'>$degF</td>
                                                        <td class='text-center warning'>Fahrenheit</td>
                                                    </tr>
                                                    <tr>
                                                        <td class='text-center info'>$degK</td>
                                                        <td class='text-center info'>Kelvin</td>
                                                    </tr>
                                                     <tr>
                                                        <td class='text-center warning'>$degR</td>
                                                        <td class='text-center warning'>Rankine</td>
                                                    </tr>
                                                </table>
                                            ";

                                     } else {
                                        //print an error message if input is NULL or NaN
                                        echo "<span style = \"color:red\">*Please Enter a Valid Temperature.</span>";
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








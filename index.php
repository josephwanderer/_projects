<?php

function notes_inc_index(){
	/**
		* I store my notes in a functionn so i can open and close them as needed - yeah code folding
		*
		*
		*
		* TODO ?
		**/
}




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

	<header id="itc250-header" class="itc250-cover" role="banner" style="background-image:url(images/elephants-water2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>"Good design adds value faster than it adds cost."</h1>
							<h2>- Thomas C. Gale</h2>
							<div class="row">
								<form class="form-inline" id="itc250-header-subscribe" action="proj-1-temperature-converter.php">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Assignment P1.">
											<button type="submit" class="btn btn-default">GO NOW</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="itc250-services" class="itc250-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Individual Skills</h3>
						<p>Individual work to help build a custom application to client specifications featuring Object Oriented Programming</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>Group Projects</h3>
						<p>Group projects that introduce process pieces such as design, documentation, Test Driven Development and Code Reviews</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-mouse"></i>
						</span>
						<h3>Advanced Concepts</h3>
						<p>Exploration of emerging technologies and best practices such as namespaces, transactions, benchmarking and AJAX</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="itc250-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center itc250-heading">
					<h2>ITC 250 Projects<br /><small>Winter, 2017</small></h2>
					<p>The ITC250 class is the second of three Web Application development classes.  Where the keyword for the ITC240 class is fundamentals, the keyword for the ITC250 is workflow.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="./proj-1-temperature-converter.php"><img src="images/proj-1.jpg" alt="Project deets go here" class="img-responsive">
						<h3>p1.</h3>
						<span>Temperature Converter</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/proj-2.jpg" alt="Project deets go here" class="img-responsive">
						<h3>P2.</h3>
						<span>Unknown</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/proj-3.jpg" alt="Project deets go here" class="img-responsive">
						<h3>P3.</h3>
						<span>Unknown</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/proj-4.jpg" alt="Project deets go here" class="img-responsive">
						<h3>P4.</h3>
						<span>Unknown</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/proj-5.jpg" alt="Project deets go here" class="img-responsive">
						<h3>P5.</h3>
						<span>Unknown</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 itc250-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/proj-6.jpg" alt="Project deets go here" class="img-responsive">
						<h3>P6.</h3>
						<span>Unknown</span>
					</a>
				</div>

			</div>
		</div>
	</div>
	<div id="itc250-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center itc250-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;If McDonalds were run like a software company, one out of every hundred Big Macs would give you food poisoning, and the response would be, &quot;We&quot;re sorry, here’s a coupon for two more.&quot;&rdquo;</p>
						</blockquote>
						<p class="author">Mark Minski, CEO<br /> <a href="#" target="_blank">A Company</a> <span class="subtext">Creative Director</span></p>
					</div>

				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;n the one and only true way. The object-oriented version of &quot;Spaghetti code&quot; is, of course, &quot;Lasagna code&quot;. (Too many layers)..&rdquo;</p>
						</blockquote>
						<p class="author">Pixadel, CEO<br /> <a href="#" target="_blank">Some Company</a> <span class="subtext">Creative Director</span></p>
					</div>


				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;For a long time it puzzled me how something so expensive, so leading edge, could be so useless. And then it occurred to me that a computer is a stupid machine with the ability to do incredibly smart things, while computer programmers are smart people with the ability to do incredibly stupid things. They are, in short, a perfect match.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, Founder<br /> <a href="#">Some Other Company</a> <span class="subtext">Creative Director</span></p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="itc250-blog" class="itc250-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center itc250-heading">
					<h2>ITC 250 Work Blog</h2>
					<p>Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.<br />
					- Linus Torvalds</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="itc250-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/work-4.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>School Pizza is awesome!</a></h3>
							<span class="posted_on">Jan. 3rd</span>
							<span class="comment"><a href="">12<i class="icon-speech-bubble"></i></a></span>
							<p>A New Year is up on us and a New Class begin. In class we went over the syllabis, expectations, and did a short code review.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="itc250-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/work-2.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>Code is poetry</a></h3>
							<span class="posted_on">Jan. 5th</span>
							<span class="comment"><a href="">8<i class="icon-speech-bubble"></i></a></span>
							<p>The New Year continues, and so does class IN a new room! In class we went we continued to go review the basics of writing good code.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="itc250-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/work-3.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>The Two\'s have it!</a></h3>
							<span class="posted_on">Jan. 10th</span>
							<span class="comment"><a href="">32<i class="icon-speech-bubble"></i></a></span>
							<p>Just like most New Year resolutions, our time in the new room was short. We built a simple form handler, broke up into groups.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
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








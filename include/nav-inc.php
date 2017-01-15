<?php

function notes_inc_nav(){
	/**
		* I store my notes in a functionn so i can open and close them as needed - yeah code folding
		*
		*
		*
		* TODO :: Make dynamic - set page to active - add in    class="active"
		**/
}

function isActive(){
	#if active page/category, add active class to page...

}

echo '
<!-- BEGIN   navigation -->
<div id="page">
<nav class="itc250-nav" role="navigation">
	<div class="container">
		<div class="row">
			<div class="left-menu text-right menu-1">
				<ul>
					<li class="has-dropdown">
						<a href="projects.html">Services</a>
						<ul class="dropdown">
							<li ><a href="p1d-TempCo.php">P1. Converter</a></li>
							<li><a href="proj-2.php">p2. ??</a></li>
							<li><a href="proj-3.php">p3. ???</a></li>
							<li><a href="proj-4.php">p4. ????</a></li>
						</ul>
					</li>
					<li><a href="about.html">About</a></li>
					<li class="has-dropdown">
						<a href="services.html">Services</a>
						<ul class="dropdown">
							<li><a href="#">Web Design</a></li>
							<li><a href="#">eCommerce</a></li>
							<li><a href="#">Branding</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="logo text-center">
				<div id="itc250-logo"><a href="index.php">ITC 250</a></div>
			</div>
			<div class="right-menu text-left menu-1">
				<ul>
					<li><a href="blog.html">Blog</a></li>
					<li class="has-dropdown">
						<a href="#">Tools</a>
						<ul class="dropdown">
							<li><a href="#">HTML5</a></li>
							<li><a href="#">Bootstrap</a></li>
							<li><a href="#">CSS3</a></li>
							<li><a href="#">PhPy</a></li>
							<li><a href="#">jQuery</a></li>
							<li><a href="#">Sass</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<!-- <li class="btn-cta"><a href="#"><span>Login</span></a></li> -->
				</ul>
			</div>
		</div>

	</div>
</nav>

<!-- END navigation -->
';

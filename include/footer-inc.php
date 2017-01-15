<?php

function notes_inc_footer(){
	/*
	 * I store my notes in a functionn so i can open and close them as needed - yeah code folding
	 *
	 *
	 *
	 *
	 */
}

echo '
	<footer id="itc250-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="itc250-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="itc250-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="itc250-footer-links">
						<li><a href="#">Something else?</a></li>
						<li><a href="#">Another link?</a></li>
						<li><a href="#">Resource et al</a></li>
						<li><a href="#">Another link here?</a></li>
						<li><a href="#">Whatever else</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 itc250-widget col-md-push-1">
					<h3>A Little About <a href="' . $link_userSite . '" >' . $userName . '</a></h3>
					<p>' . $userDeets . '</p>
					<p><a href="#">Learn More</a></p>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2017 Monkeeworks. All Rights Reserved.</small>
						<small class="block">Designed by <a href="#" target="_blank">Us!</a> Demo Images taken from <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="itc250-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

';

#Tha-tha-tha-that's all folks!

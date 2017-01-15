SEE: <a href="http://jsfiddle.net/wsxs4xqw/">live example</a>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">

	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/result-light.css">

	<style type="text/css">
		.form {
		max-width: 50%;
		min-width: 30%;
		border-width: 4px;
		border-color: #CCCCCC;
		border-radius: 8px;
		color: #222222;
		font-size: 17px;
		margin: 0px;
		background-color: #FFFFFF;
		padding: 20px;
}
.section0 {
		padding: 2px;
}
.section2 {
		font-size: 9px;
		padding: 3px;
}
.rofl {
		margin: auto;
		align: center;
		width: 80%;
}
.form label {
		color: #222222;
		font-size: 11px;
		font-family:'europa', Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
		display: block;
		margin-bottom: auto;
}
.form input[type=radio], input[type=checkbox] {
		margin: 10px;
		width: 13px;
}
.form div {
		display: block;
}
.form input, form textarea, form select {
		border-width: 1px;
		border-style: solid;
		border-color: #666666;
		border-radius: 4px;
		padding: 5px;
		width: 100%;
}
.form h1 {
		font-size: 40px;
		color: #289fcf;
		padding: 0px;
		margin: 0px;
		margin-bottom: 20px;
}
.jaja {
		margin-bottom: 11px;
}
.coz {
		coz: both;
}
.form textarea {
		height: 10px;
		width: 100%;
}
.form input[type=submit] {
		width: 44%;
		background-color: #CCCCCC;
		color: #222222;
}
.field {
		margin-bottom: 3px;
		width: 100%;
		max-width: 100%;
		min-width: 100%;
}
.priceform {
		width: auto;
		max-width: 270px;
		min-width: 200px;
		margin-top: 50px;
		margin-bottom: 50px;
		float: none;
		margin-left: auto;
		margin-right: auto;
}
.priceform p {
		font-size: 19px;
		font-family: europa, lucida sans;
		padding: 4px;
		border-radius: 4px;
}
.sortable {
		width: 100%;
		margin-left: 0px;
}
.range-slider .input-range {
		-webkit-appearance: none;
		width: 100%;
		height: 10px;
		border-radius: 5px;
		background: #ccc;
		outline: none;
}
.range-slider .input-range::-webkit-slider-thumb {
		-webkit-appearance: none;
		width: 20px;
		height: 20px;
		border-radius: 50%;
		background: #353535;
		cursor: pointer;
		-webkit-transition: background .15s ease-in-out;
		transition: background .15s ease-in-out;
}
.range-slider .input-range::-webkit-slider-thumb:hover {
		background: #e06161;
}
.range-slider .input-range:active::-webkit-slider-thumb {
		background: #e06161;
}
.range-slider .input-range::-moz-range-thumb {
		width: 20px;
		height: 20px;
		border: 0;
		border-radius: 50%;
		background: #353535;
		cursor: pointer;
		-webkit-transition: background .15s ease-in-out;
		transition: background .15s ease-in-out;
}
.range-slider .input-range::-moz-range-thumb:hover {
		background: #e06161;
}
.range-slider .input-range:active::-moz-range-thumb {
		background: #e06161;
}
.range-value {
		display: inline-block;
		position: relative;
		width: 60px;
		height: 40px;
		color: #fff;
		font-size: 16px;
		line-height: 20px;
		text-align: center;
		border-radius: 3px;
		background: #353535;
		padding: 5px 10px;
		margin-left: 7px;
		margin-bottom: 5px;
}
.range-value:after {
		position: absolute;
		top: 8px;
		left: -7px;
		width: 0;
		height: 0;
		border-top: 7px solid transparent;
		border-right: 7px solid #353535;
		border-bottom: 7px solid transparent;
}
.range-number {
		display: inline-block;
		position: relative;
		width: 60px;
		color: #fff;
		font-size: 16px;
		line-height: 20px;
		text-align: center;
		border-radius: 3px;
		background: #353535;
		padding: 5px 10px;
		margin-left: 7px;
		margin-bottom: 5px;
}
.range-number:after {
		position: absolute;
		top: 8px;
		left: -7px;
		width: 0;
		height: 0;
		border-top: 7px solid transparent;
		border-right: 7px solid #353535;
		border-bottom: 7px solid transparent;
}
::-moz-range-track {
		background: #ccc;
		border: 0;
}
input::-moz-focus-inner {
		border: 0;
}
	</style>

	<title></title>







<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$('.input-range').on('input', function () {
		$(this).next('.range-value').html(this.value);
});
});//]]>

</script>


</head>

<body>
	<form id="form" name="form" method="post" target="formfill" action="form-to-email.php">
		 <h1>Get Started</h1>

		<div class="rofl">
				<div class="jaja"></div>
				<div id="section0" class="sortable">
						<div class="field">
								<input type="text" id="Name" name="Name" placeholder="name" required>
						</div>
						<div class="field">
								<label for="Address"></label>
								<input type="text" id="Address" name="Address" placeholder="address" required>
						</div>
						<div class="field">
								<label for="zip"></label>
								<input type="text" id="zip" name="zip" placeholder="zip" required>
						</div>
				</div>
				<p class="section">Tell us about your home</p>
				<div class="section2">
						<div class="field">
								<label for="Bedrooms">Bedrooms</label>
						</div>
						<div class="range-slider">
								<input class="input-range" type="range" value="1" min="0" max="10"> <span class="range-value">1</span>

						</div>
						<div class="field">
								<label for="bathrooms">Bathrooms</label>
						</div>
						<div class="range-slider">
								<input class="input-range" type="range" value="1" min="0" max="10"> <span class="range-value">1</span>

						</div>
				</div>
				<p class="section">When should we come?</p>
				<div id="section4" class="sortable">
						<div class="field">
								<input type="date" id="datepicker" placeholder="Date">
						</div>
						<div class="field">
								<label for="Time">Time</label>
								<select name="Time" required id="Time">
										<option value>Morning 8am - 12pm</option>
										<option value>Afternoon 12pm - 3pm</option>
								</select>
						</div>
				</div>
				<p class="section">Contact Information</p>
				<div id="section5" class="sortable">
						<div class="field">
								<label for="Phone">Phone/Mobile</label>
								<input type="tel" id="Phone" name="Phone" placeholder="number" required>
						</div>
						<div class="field">
								<label for="Email">Email</label>
								<input type="email" id="Email" name="Email" placeholder="e-mail">
						</div>
						<div class="field">
								<input type="submit" id="submit" name="schedulecleaning" required>
						</div>
				</div>
		</div>
</form>

</body>

</html>


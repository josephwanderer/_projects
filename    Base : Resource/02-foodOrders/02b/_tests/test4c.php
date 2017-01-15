


<!DOCTYPE html>
<html class=''>
	<head>
		<script src='//assets.codepen.io/assets/editor/live/console_runner-ba402f0a8d1d2ce5a72889b81a71a979.js'></script>

		<script src='//assets.codepen.io/assets/editor/live/events_runner-902c66a0175801ad4cdf661b3208a97b.js'></script>

		

		<meta charset='UTF-8'><meta name="robots" content="noindex">
 


		<style class="cp-pen-styles"></style>
	</head>
	<body>


		SEE: <a href="http://codepen.io/anon/pen/eZPXpa?editors=1010">live example</a>

		<br /><br />

		<label for="ShortBox">Comic Storage Box, Short: $2.75</label>
		<input type="range" min="0" max="100" name="ShortBox" value="' . $_POST['ShortBox']. '" id="ShortBox" step="1" oninput="outputUpdate(value)">
		<output for="ShortBox" id="this->volume">?</output>

		<br /><br />

		<label for="LongBox">Comic Storage Box, Long: $4.50</label>
		<input type="range" min="0" max="100" name="LongBox" value="' . $_POST['LongBox']. '" id="LongBox" step="1" oninput="outputUpdate(value)">
		<output for="LongBox" id="volume">?</output>

		<br /><br />
		<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script>


		<script>var sliders = document.querySelectorAll('input[type="range"]');
		for (var i in sliders) {
				if (window.CP.shouldStopExecution(1)) {
						break;
				}
				sliders[i].onchange = function () {
						document.querySelector('output[for="' + this.name + '"]').innerHTML = this.value;
				};
		}
		window.CP.exitedLoop(1);
		//# sourceURL=pen.js
		</script>
	</body>
</html>

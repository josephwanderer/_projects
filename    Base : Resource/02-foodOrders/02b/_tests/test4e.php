


<!DOCTYPE html>
<html class=''>
	<head>
		<meta charset='UTF-8'><meta name="robots" content="noindex">
		<style class="cp-pen-styles"></style>
	</head>
	<body>


		<br /><br />

		<label for="ShortBox">Comic Storage Box, Short: $2.75</label>
		<input
			type="range"
			min="0" max="100"
			name="ShortBox"
			value="' . $_POST['ShortBox']. '"
			id="ShortBox"
			step="1"
			oninput="outputUpdate(value)">
		<output
			for="ShortBox"
			id="this->volume">?</output>
		<br /><br />


		<label for="LongBox">Comic Storage Box, Long: $4.50</label>
		<input
			type="range"
			min="0" max="100"
			name="LongBox"
			value="' . $_POST['LongBox']. '"
			id="LongBox" step="1"
			oninput="outputUpdate(value)">
		<output for="LongBox" id="volume">?</output>
		<br /><br />


		<label for="Boards">Cardboard Backing Boards (acid Free): $.50</label>
		<input
			type="range"
			min="0" max="100"
			name="Boards"
			value="' . $_POST['Boards']. '"
			id="Boards" step="1"
			oninput="outputUpdate(value)">
		<output for="Boards" id="volume">?</output>
		<br /><br />


		<label for="PolyBags">Polybags (acid Free): $.50</label>
		<input
			type="range"
			min="0" max="100"
			name="PolyBags"
			value="' . $_POST['PolyBags']. '"
			id="PolyBags" step="1"
			oninput="outputUpdate(value)">
		<output for="PolyBags" id="volume">?</output>
		<br /><br />


		<script src='./_js/stopExecutionOnTimeout.js?t=1'></script>

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

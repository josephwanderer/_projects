<script>
var sliders = document.querySelectorAll('input[type="range"]');

for(var i in sliders) {
	sliders[i].onchange = function() {
		document.querySelector('output[for="' + this.name + '"]').innerHTML = this.value;
	}
}

</script>

<form><

<label for="ShortBox">Comic Storage Box, Short: $2.75</label>
<input type="range" min="0" max="100" name="ShortBox" value="' . $_POST['ShortBox']. '" id="ShortBox" step="1" oninput="outputUpdate(value)">
<output for="ShortBox" id="this->volume">?</output>

<br /><br />

<label for="LongBox">Comic Storage Box, Long: $4.50</label>
<input type="range" min="0" max="100" name="LongBox" value="' . $_POST['LongBox']. '" id="LongBox" step="1" oninput="outputUpdate(value)">
<output for="LongBox" id="volume">?</output>

<br /><br />
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


<script>
var range = $('.input-range').on('input', function() {
	$(this).next('.range-value').html(this.value);
});

	range.on('input', function() {
	// this sets the html content of all elements with class range-value
	// to the value of the slider that is being moved
	value.html(this.value);
});

</script>


<div class="range-slider">
	<input class="input-range" type="range" value="0" min="0" max="25">
	<span class="range-value">0</span>
</div>

<div class="range-slider">
	<input class="input-range" type="range" value="0" min="0" max="25">
	<span class="range-value">0</span>
</div>



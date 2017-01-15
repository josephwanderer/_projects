<?php //myFooter-inc.php


	//#method to hop back along user history....
	echo '<br />
	<br />


	<button onclick="goBack()">Go Back</button>


	<script>
		function goBack()
		{
			window.history.back();
		}
	</script>';


	// END html render
	echo '<script src="_js/scripts.js"></script>
</body>
</html>';

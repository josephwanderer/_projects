<!-- lets test this -->




<style>
	body { padding: 20px; }
	form { padding: 10px; }
</style>


<script>
	var forms = document.getElementsByTagName('form');
	for (var i = 0; i < forms.length; i++) {
			forms[i].noValidate = true;

			forms[i].addEventListener('submit', function(event) {
					//Prevent submission if checkValidity on the form returns false.
					if (!event.target.checkValidity()) {
							event.preventDefault();
							//Implement you own means of displaying error messages to the user here.
					}
			}, false);
	}
</script>


<form action="google" method="post">
    <input type="text" required />
    <input type="submit" />
</form>

<form method="post" action="x.html">
    <input type="text" required />
    <input type="submit" />
</form>
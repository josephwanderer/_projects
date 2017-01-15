<!-- lets test this -->




<style>
	body { 
		padding: 20px; 
		}
	
	form { 
		padding: 10px; 
		}
	
	.invalid input:required:invalid { 
		background: #BE4C54; 
		}

	.invalid input:required:valid { 
		background: #17D654; 
		}

	input { 
		display: block;
  	margin-bottom: 10px;
		}
</style>


<script>
	function hasHtml5Validation () {
		return typeof document.createElement('input').checkValidity === 'function';
	}

	if (hasHtml5Validation()) {
		$('.validate-form').submit(function (e) {
			if (!this.checkValidity()) {
				e.preventDefault();
				$(this).addClass('invalid');
				$('#status').html('invalid');
			} else {
				$(this).removeClass('invalid');
				$('#status').html('submitted');
			}
		});
	}
	
	
	
	
	$('.validate-form').submit(function(e) {
  var form = $(this);
  
  // Check required elements
  var isValid = true;
  form.find('input[required]').each(function(index, element){
    if(!element.value) {
      isValid = false;
      $(element).addClass('invalid');
    }
  });

  // Check 'pattern' constrained elements
  form.find('input[pattern]').each(function(index, element){
    var $element = $(element);
    var pattern = new Regex($element.attr('pattern'));

    if(!pattern.test($element.value)) {
      isValid = false;
      $(element).addClass('invalid');
    }
  });

  // There could be more validation logic here... check individual elements for special rules that just apply to that one element.

  // After all validation is done, mark the form and prevent the submission if needed
  if(!isValid) {
    e.preventDefault();
    form.addClass('invalid');
  }

});
</script>


<h1>Cross Browser HTML5 Validation</h1>
<p>Works in the latest version of all browsers?</p>
<form class="validate-form" action="success.php">
  <input type="text" 
         title="required input" 
         placeholder="required" 
         required />
  <input type="text" 
         title="Must be 5 numeric numbers" 
         placeholder="zip code" 
         pattern="\d{5}"
         maxlength="5"
         required />
  <input type="submit" />
</form>

<p>Status: <span id="status">Unsubmitted</span></p>


<!-- lets test this -->

<script src="jquery.min-test.js"></script>


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


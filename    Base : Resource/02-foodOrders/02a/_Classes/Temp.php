<?php //Temp Class...

class Temp{ //BEGIN Person
	public  $FirstName     = ''; //not need for __toString()
	public  $Type          = '';
	public  $Temp          = 0;

	private $TempConverted = 0;



	public function __toString(){
		return  'Type submitted is: ' . $Type .
						'Temp to convert submit is ' . $Temp . '&deg;';

	} // END toString


	// keep properties in sequence
	//                         //technically called a field
	public function __construct($FirstName, $Type, $Temp)
	{
		//feed vaules in sequentially into initialization of the object.
		/**
		 * $TempConverted = new Temp('Max', 'Celcius', 32);
		 */

		// Constructor initializes the data
		// Doesn't return - only handles data

		//keep properties in sequence
		$this->FirstName  = $FirstName;
		$this->Type       = $Type;
		$this->Temp       = $Temp;
	} //END Temp constructor


	//Doesn't use the constructor...
	public function getTemp()
	{
		return '<b>' . $this->FirstName . '</b> submitted the following:<br />
		Conversion type is: <b>' . $this->Type . '</b><br />
		Temp to convert submitted is: <b>' . $this->Temp . '&deg;</b>';
	} //END getTemp()


	public function convertTemperature(){
		switch (htmlspecialchars($this->Type)) {
		case "f2c":
				$this -> TempConverted  = 5/9*($this->Temp-32);

				return $this->FirstName . ' Selected to convert ' . $this -> Temp . '&deg;
				Fahrenheit to Celcius ' . round($this->TempConverted, 2) . '&deg;';
				break;

		case "f2k":
				$this -> TempConverted  = 273.15 + (9/5*($this->Temp-32));

				return $this->FirstName . ' Selected to convert ' . $this -> Temp . '&deg;
				Fahrenheit to Kelvin ' . round($this->TempConverted, 2) . '&deg;';
				break;

		case "c2f":
				$this -> TempConverted  = 5/9*($this->Temp-32);

				return $this->FirstName . ' Selected to convert ' . $this -> Temp . '&deg;
				Celcius to Fahrenheit ' . round($this->TempConverted, 2) . '&deg;';
				break;

		case "c2k":
				$this -> TempConverted  = 273.15 - $this -> Temp;

				return $this->FirstName . ' Selected to convert ' . $this -> Temp . '&deg;
				Celcius to Kelvin ' . round($this->TempConverted, 2) . '&deg;';
				break;

		case "k2f":
				$this -> TempConverted  = ($this -> Temp - 273.15)* 1.8000 + 32.00;

				return $this->FirstName . ' Selected to convert ' . $this -> Temp . '&deg;
				Kelvin to Fahrenheit ' . round($this->TempConverted, 2) . '&deg;';
				break;

		case "k2c":
				$this -> TempConverted = 273.15 + $this -> Temp;

				return $this->FirstName . ' Selected to convert ' . $this -> Temp . '&deg;
				Kelvin to Celcius ' . round($this->TempConverted, 2) . '&deg;';
				break;

		default:
				return 'OOPS';
		} #END switch statement

	} #END function


	public function getForm(){


		// set select option based on last submited
		switch ($this->Type) {
			case "f2c":
					$this->select01 = "selected";
					break;
			case "f2k":
					$this->select02 = "selected";
					break;
			case "c2f":
					$this->select03 = "selected";
					break;
			case "c2k":
					$this->select04 = "selected";
					break;
			case "k2f":
					$this->select05 = "selected";
					break;
			case "k2c":
					$this->select06 = "selected";
					break;

			// if nothing selected, as for selection
			default:
					$this->select00 = "selected";
		}


		$myForm  = '<form action=' . THIS_PAGE . ' method="post">

		<input type="text" name="FirstName"
		value="' . $this->FirstName . '"
		placeholder="Please enter your first name..."/>
		<br />

		<input type="number" name="Temp"
		value="' . $this->Temp . '"
		placeholder="Please enter temperature in numeric form..."/>
		<br />

		<select name="Type" required="required">
				<option value="" ' . $this->select00 . '> Please select the conversion type</option>

				<option value="f2c" ' . $this->select01 . '>Fahrenheit to Celcius</option>
				<option value="f2k" ' . $this->select02 . '>Fahrenheit to Kelvin</option>
				<option value="c2f" ' . $this->select03 . '>Celcius to Fahrenheit</option>
				<option value="c2k" ' . $this->select04 . '>Celcius to Kelvin</option>
				<option value="k2f" ' . $this->select05 . '>Kelvin to Fahrenheit</option>
				<option value="k2c" ' . $this->select06 . '>Kelvin to Celcius</option>
			</select>

		<br />
		<br />

		<input type="submit" name="Submit" />

	</form>';

		return $myForm; //Return form
	} //END getForm
} //END Person Class

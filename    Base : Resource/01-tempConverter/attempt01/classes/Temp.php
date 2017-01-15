<?php

class Temp
{
	//initialize necessary properties
	public $tempEntered = 0;
	public $tempType    = '';
	public $myTemp      = 0;


	public function convertTemperature(){
		switch (htmlspecialchars($this->tempType)) {
		case "f2c":
				$this -> myTemp  = 5/9*($this->tempEntered-32);

				return 'You Selected to convert ' . $this -> tempEntered . '&deg;
				Fahrenheit to Celcius ' . round($this->myTemp, 2) . '&deg;';
				break;

		case "f2k":
				$this -> myTemp  = 273.15 + (9/5*($this->tempEntered-32));

				return 'You Selected to convert ' . $this -> tempEntered . '&deg;
				Fahrenheit to Kelvin ' . round($this->myTemp, 2) . '&deg;';
				break;

		case "c2f":
				$this -> myTemp  = 5/9*($this->tempEntered-32);

				return 'You Selected to convert ' . $this -> tempEntered . '&deg;
				Celcius to Fahrenheit ' . round($this->myTemp, 2) . '&deg;';
				break;

		case "c2k":
				$this -> myTemp  = 273.15 - $this -> tempEntered;

				return 'You Selected to convert ' . $this -> tempEntered . '&deg;
				Celcius to Kelvin ' . round($this->myTemp, 2) . '&deg;';
				break;

		case "k2f":
				$this -> myTemp  = ($this -> tempEntered - 273.15)* 1.8000 + 32.00;

				return 'You Selected to convert ' . $this -> tempEntered . '&deg;
				Kelvin to Fahrenheit ' . round($this->myTemp, 2) . '&deg;';
				break;

		case "k2c":
				$this -> myTemp = 273.15 + $this -> tempEntered;

				return 'You Selected to convert ' . $this -> tempEntered . '&deg;
				Kelvin to Celcius ' . round($this->myTemp, 2) . '&deg;';
				break;

		default:
				return 'OOPS';
		} #END switch statement

	} #END function


}

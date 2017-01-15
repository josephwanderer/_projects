<?php //Temp Class...

class OrderForm{ //BEGIN Person
	//Item Properties
	public  $Publisher    = ''; //The vendor - Marvel, DC, Archie
	public  $Title        = ''; //The title
	public  $TitleDesc    = ''; //Description of comic if any
	
  public  $Comment      = ''; // User comments/requests
	public  $Price        = 0;  //Price of an individual issue

	
	//Financial Properties
	public	$Quantity		  = 0;
	public  $SubTotal			= 0;
	public  $Tax  				= 0;
	public  $Total				= 0;


	// keep properties in sequence
	//                         //technically called a field
	public function __construct(
		$Publisher, $Title, $TitleDesc, 
		$comment, $Price, 
		$Quantity, $SubTotal, $Tax, $Total )
	{
		//feed vaules in sequentially into initialization of the object.
		/**
		 * $TempConverted = new Temp('Max', 'Celcius', 32);
		 */

		// Constructor initializes the data
		// Doesn't return - only handles data

		//keep properties in sequence
		$this->Publisher  = $Publisher;
		$this->Title      = $Title;
		$this->TitleDesc  = $TitleDesc;
		
		$this->Comment    = $Comment;
		$this->Price      = $Price;
		
		$this->Quantity		= $Quantity;
		$this->SubTotal		= $SubTotal;
		$this->Tax  			= $Tax;
		$this->Total			= $Total;	
	} //END Temp constructor


	public function getMyOrder(){

		// some basic math goes here
		$this->Price = $this->Price * .25;

		echo $this->Price;


	}


	public function getOrderForm(){


		$myForm  = '<form action=' . htmlspecialchars(THIS_PAGE) . ' method="post">

			<select name="Publish" required="required">
				<option value="" "selected"> Please select Publisher</option>

				<option value="Marvel" >Marvel</option>
				<option value="DC"     >DC</option>
				<option value="Image"  >Image</option>
			</select>
			<br /><br />

			<input type="text" name="Title"
			value="' . $this->Title . '"
			placeholder="Please select a Title..."/>
			
			<span class="error">* ' . $errTitle . '</span>
			
			<br /><br />

			<input type="number" name="Price"
			value="' . $this->Price . '"
			placeholder="Please enter number of copies of any particular issue interested in..."/>
			<br /><br />
			
			<textarea name="Comment" 
				value="' . $this->Comment . '" 
				placeholder="Anything we need to know?" 
				rows="5" cols="40"></textarea>

			<br />
			<br />

			<input type="submit" name="Submit" />

		</form>';

		return $myForm; //Return form
	} //END getForm
} //END Person Class

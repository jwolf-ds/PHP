<?php 

/************************************************* 

Basic interface and class in PHP oriented object.

-- An interface class called Car containing only a single method, finalCost();
-- A class, Chevy, that implements Car with a protected variable called cost and a constructor which 
   takes the cost in argument and sets it. Uses the method finalCost() which takes in argument a tax 
   percentage and returns the final cost of the car in $ using the cost set when the object is initialized.
-- Uses the Chevy class to get the cost of a Chevy with a tax of 12% and the initial cost of 20000. 
   Echo the cost in the screen.
-- Runtime execution below as well.
-- A class called Ford which implements Car and have the cost calculated witha handling fee attached to it 
   of $1,000 to be calculated before tax.

***************************************************/

interface Car {
    public function finalCost($tax);
}

class Chevy implements Car {

	protected $cost;
    private $tax_rate;

	function __construct($car_cost) {		
			$this->cost = $car_cost;		
		}

	function set_cost($new_cost) {
		 	 $this->cost = $new_cost;
		}

    function finalCost($tax_rate) {
    		 return $this->cost *= (100+$tax_rate)/100;
    }
}

class Ford implements Car {

	protected $cost;
    private $tax_rate;

	function __construct($cost) {
        	$handling_fee = 1000;
			$this->cost = $cost + $handling_fee;		
		}

	function set_cost($new_cost) {
		 	 $this->cost = $new_cost;
		}

    function finalCost($tax_rate) {
    		 return $this->cost *= (100+$tax_rate)/100;
    }
}

$myCar = new Chevy(20000);
echo "My Chevy costs: $".$myCar->finalCost(12), "<br>";

$executionTime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
echo "My Chevy took $executionTime to execute. <br>";

$myCar = new Ford(20000);
echo "My Ford costs: $".$myCar->finalCost(12);

?>

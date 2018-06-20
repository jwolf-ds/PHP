<?php 

/************************************************* 

Purpose: This is an exercice to test your basic knowledge of interface and class in PHP oriented object.

Instruction:

1. Create an interface class called Car. It should contain only a single method, finalCost();

2. Create another class, Chevy, that implements Car. It should have a protected variable called cost. It should have a constructor which takes the cost in argument and sets it. It should have the method finalCost() which takes in argument a tax percentage and returns the final cost of the car in $ using the cost set when the object is initialized.

3. Use the Chevy class to get the cost of a Chevy with a tax of 12% and the initial cost of 20000. Echo the cost in the screen.

4. Please put all your code below, do not create a separate file. Do the runtime execution below as well. You can wrap it in HTML doc structure for bonus points.

5. Bonus: if you have time, create a class called Ford which implements Car and have the cost calculated. However this time, Ford has a handling fee attached to it of $1,000 to be calculated before tax.

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
<?php 

/************************************************* 

Basic interface and class in PHP oriented object.

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

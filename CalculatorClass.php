<?php
	//Defining Calculator class
	class Calculator{
		//Method of calculator class
		function add($a,$b){
		return $a+$b;
		}
		function sub($a,$b){
		if($a>$b)
			return $a-$b;
		else
			return $b-$a;
		}
		function mul($a,$b){
			return $a*$b;
		}
		function div($a,$b){
			return $a/$b;
		}
	}
	//Defining Another class
	class AdvancedCalculator{
		//Method of class
		function fact($a){
			$res=1;
			if($a==0)
				$res=1;
			else{
				while($a>1){
					$res=$res*$a;
					$a--;
				}
			}			
			return $res;
		}
	}
	
	//Creationg object 
	$cal=new Calculator;
	//Calling method of a object
	echo "Addition is:".$cal->add(3,6)."<br>";
	echo "Subtraction is:".$cal->sub(3,6)."<br>";
	echo "Multiplycation is:".$cal->mul(3,6)."<br>";
	echo "Dicision is:".$cal->div(3,6)."<br>";
	//Creationg object of class
	$adcal=new AdvancedCalculator;
	echo "Factorial is:".$adcal->fact(5);
?>
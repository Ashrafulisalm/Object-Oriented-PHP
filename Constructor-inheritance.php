<?php
	class Base{
		function __construct(){
			echo "Constructor of base class.<br>";
		}
	}
	
	class Derived extends Base{
		function __construct(){
			//It have to declare in child class otherwise child only call its constructor
			parent::__construct();
			echo "Constructor of derived class.";
		}
	}
	
	$obj=new Derived;
	
	//////With Parameter
	class Base1{
		public $a;
		function __construct($a){
			$this->a=$a;
			echo "Constructor of base class.<br>";
			echo "Value of base class:".$this->a."<br>";
		}
	}
	
	class Derived1 extends Base1{
		public $b;
		//for both parent and child class parameter will get by child constructor
		function __construct($a,$b){
			//It have to declare in child class otherwise child only call its constructor
			parent::__construct($a);
			$this->b=$b;
			echo "Constructor of derived class.";
			echo "Value of derived class:".$this->b."<br>";
		}
	}
	
	$obj1=new Derived1(20,10);
	
	
?>
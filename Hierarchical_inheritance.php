<?php
	class Data{
		public $a;
		public $b;
		public function getData($x,$y){
			$this->a=$x;
			$this->b=$y;
		}
	}
	//Extends the Data class
	class Add extends Data{
		function add(){
			return $this->a+$this->b;
		}
	}
	//It also extends data class
	class Sub extends Data{
		function sub(){
			if($this->a>$this->b)
				return $this->a-$this->b;
			else
				return $this->b-$this->a;
		}
	}
	//creating obj for Add class
	$obj=new Add;
	//giving parameter for add class
	$obj->getData(5,6);
	echo "Addition is: ".$obj->add();
	echo "<br>";
	
	//creating obj for Sub class
	$obj1=new Sub;
	//Giving parameter for Sub class
	$obj1->getData(2,6);
	echo "Subtraction is: ".$obj1->sub();
?>
<?php
	//Parent Class
	class Grandfather{
		public $land;
		public $villa;
		public function grandpa(){
			$this->land="100 acr";
			$this->villa="4000 sqft";
			$temp=$this->land."land and ".$this->villa."<br>";
			return $temp;
		}
	
	}
	//Child class inherite from parent Class
	class Father extends Grandfather{
		public $car;
		public $palace;
		public function inheritance($car,$palace){
			$this->car=$car;
			$this->palace=$palace;
			echo "Grandpa has ".$this->grandpa();
			echo "Father has a car ".$this->car." and ";
			echo "Father build ".$this->palace." from gramdpa's ".$this->villa.".<br>";
		}
	}
	//Grandchild inherite from father and also from grandfather class
	class I_got extends Father{
		public function mine(){
			echo "I Got all";
		}
	}
	
	//Object of grandchild class that can access all three class 
	$obj=new I_got;
	$obj->inheritance('BMW 7 Series','6000 sqft Triplex House');
	$obj->mine();
	
?>
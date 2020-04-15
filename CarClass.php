<?php
	//Defining a class-(Used to define new Datatype)
	class Car{
		public $carmodel;
		
		//Method of a Class
		public function Audi($model){
			$this->carmodel=$model;
			if($this->carmodel=='A3'){
				echo "Car brand is Audi.<br>";
				echo "Engine type i4 1600cc.<br>";
				echo "Body type Hatchback.<br>";
			} elseif($this->carmodel=='A5'){
				echo "Car brand is Audi.<br>";
				echo "Engine type v6 2000cc Terbo.<br>";
				echo "Body type Sedan.<br>";
			} elseif($this->carmodel=='A8'){
				echo "Car brand is Audi.<br>";
				echo "Engine type v8 3000cc Hybred.<br>";
				echo "Body type Sedan.<br>";
			} elseif ($this->carmodel=='Q3'){
				echo "Car brand is Audi.<br>";
				echo "Engine type i4 2500cc.<br>";
				echo "Body type SUV.<br>";
			}
		}
		
		//Another Method of a Class
		public function BMW($model){
			$this->carmodel=$model;
			if($this->carmodel=='320i'){
				echo "Car brand is BMW.<br>";
				echo "Engine type i4 1400cc.<br>";
				echo "Body type Hatchback.<br>";
			} elseif($this->carmodel=='520d'){
				echo "Car brand is BMW.<br>";
				echo "Engine type i4 2000cc Turbo.<br>";
				echo "Body type Sedan.<br>";
			} elseif($this->carmodel=='730'){
				echo "Car brand is BMW.<br>";
				echo "Engine type v8 3500cc Hybred Turbo.<br>";
				echo "Body type Sedan.<br>";
			} elseif ($this->carmodel=='x5'){
				echo "Car brand is Audi.<br>";
				echo "Engine type v8 4500cc.<br>";
				echo "Body type SUV.<br>";
			}
		}
		
		//Another Method of a Class
		public function Hammer(){
			echo "Car brand is Hammer.<br>";
			echo "Engine type v8 4500cc.<br>";
			echo "Body type Large SUV.<br>";
		}
	}
	
	//Creating a object of a class(Object is a class type variable) 
	$car=new Car;
	//Acssing method of a class
	$car->Audi('A5');
	echo "<br>";
	$car->BMW('x5');
	echo "<br>";
	$car->Hammer();
	
?>
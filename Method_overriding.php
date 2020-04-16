<?php
	class Student{
		public $name;
		public $roll;
		function getData(){
			echo "Name: ",$this->name='Ashraf'."<br>";
			echo "Roll: ".$this->roll=104;		
		}
	}
	
	class Teacher extends Student{
		//This method override the method of Student class
		function getData(){
			echo "Name: ",$this->name='Mukta'."<br>";
			echo "Roll: ".$this->roll=103;		
		}
	}
	//After override the Teacher class get the teacher class data
	$obj=new Teacher;
	$obj->getData();
	echo "<br><br>";
	//Shows the Student class data
	$obj=new Student;
	$obj->getData();
	
	/*
	--Output--
	Name: Mukta
	Roll: 103

	Name: Ashraf
	Roll: 104 */
?>
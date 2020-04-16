<?php
	//Abstract Class
	abstract class Student{
		public $name;
		public $roll;
		public $result;
		//Abstract Method
		abstract function getData();
		//Non abstract Method
		function result($res){
			$this->result=$res;
			echo "Result is: ".$this->result;
		}
		
	}
	//Abstruct class have to extends/inherite for getting data by object
	class Teacher extends Student{
		//Abstract method Implementation
		function getData(){
			echo "Name: ".$this->name='Ashraf'."<br>";
			echo "Roll: ".$this->roll='104'."<br>";
		}
	}
	
	$obj=new Teacher;
	$obj->getData();
	$obj->result('3.06');
	
	/*
	--Output--
	Name: Ashraf
	Roll: 104
	Result is: 3.06
	*/
?>
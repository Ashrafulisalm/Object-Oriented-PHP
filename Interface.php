<?php
	//Interface like abstruct class(Define here and implement lataer)
	interface Student{
		const name='Ashraful';
		const roll=13025;
		function getData();
	}
	//Interface Inherite another Interface
	interface Classes extends Student{
		const classteacher='Ali newaz Baghar';
		function getClassData();
	} 
	
	//A class is needed to implement the Interfaces
	class School implements Classes{
		function getData(){
			//property can be access through either Interface_name or self keyword
			echo "My name is ".Student::name."<br>";
			echo "My roll is: ".self::roll."<br>";
		}
		function getClassData(){
			echo "My Class Teacher is: ".Classes::classteacher;
		}
	} 
	//Creating object to access the class
	$obj=new School;
	$obj->getData();
	$obj->getClassData();
?>
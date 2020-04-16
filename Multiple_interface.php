<?php
	//Interface like abstruct class(Define here and implement lataer)
	interface Class_nine{
		public const subject='Physics';
		public const classname='Nine';
		function getData();
	}
	//another Interface
	interface Class_Ten{
		public const subject1='Chemistry';
		public const classname1='Ten';
	}
	
	//Class to inherite
	class Data{
		public $phone="01765848689";
	}
	//class can inherete and Multiple_implements(Multiple Inheritance)
	class School extends Data implements Class_nine,Class_Ten{
		function getData(){
			echo "Subject: ".Class_nine::subject."<br>";
			echo "Class: ".Class_nine::classname."<br>";
			echo "Subject: ".Class_Ten::subject1."<br>";
			echo "Class: ".Class_Ten::classname1."<br>";
			echo "Contact: ".$this->phone;
		}
	}
	//Object to get data 
	$obj=new School;
	$obj->getData();
	
?>
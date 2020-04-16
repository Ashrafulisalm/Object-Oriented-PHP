<?php
	class Student{
		public static $Name;
		public static $Roll;
		public function details($name,$roll){
			//"self::$variable" is used to access static veriable where generally "$this->variable"
			echo "Name is:".self::$Name=$name."<br>";
			echo "Role is:".self::$Roll=$roll."<br>";
		}
	} 
	
	$d= new Student;
	$d->details('Ashraf',13025);
	
	class Teacher{
		public static $Name;
		public static $Phone;
		//Static method can only access static property
		public static function details($name,$phone){
			echo "Name is:".self::$Name=$name."<br>";
			echo "Phone is:".self::$Phone=$phone."<br>";
		}
	}
	
	echo "<br> In teacher class<br>";
	//calling a static method(No need to create object)
	Teacher::details('Sazzad','01765848689');
	
	
?>
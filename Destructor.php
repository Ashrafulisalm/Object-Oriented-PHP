<?php
	class EnggFaculty{
		//Default Constructor(Without parameter)-Called automatically at the start of object
		function __construct(){
			echo "Welcome to Engineering Faculty!<br>";
		}
		//Destructor(Will called automatically after all work is done.)
		function __destruct(){
			echo "End of Class/Object.<br>";
		}
		
		//Methods
		function ICT(){
			echo "Dept. of Information and communication Technology.<br>";
		}
		
		function CSE(){
			echo "Dept. of Computer Science and Engineering.<br>";
		}
		
		function TE(){
			echo "Dept. of Textile Engineering.<br>";
		}
		
	}
	
	class ScienceFaculty{
		public $dept;
		//Parameterized Constructor
		function __construct($dept){
			echo "<br>Its in new Class.<br>";
			$this->dept=$dept;
			if($this->dept=='Math'){
				echo "Welcome to dept of Mathematics.<br>";
			} elseif($this->dept=='Chem'){
				echo "Welcome to dept of Chemistry.<br>";
			} elseif ($this->dept=='Phy'){
				echo "Welcome to dept of Physics.<br>";
			}
		}
	}
	
	$data=new EnggFaculty;			//here it call the constructor
	$data->ICT();
	$data->TE();
	$d=new ScienceFaculty('Phy');   //call constructor with parameter
?>
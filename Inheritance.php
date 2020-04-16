<?php
	class University{
		public $dept;
		public $student;
		public $semester;
		function dept($dept,$student){
			$this->dept=$dept;
			echo "Dept of ".$this->dept."<br>";
			echo "Number of Students ".$this->student=$student."<br>";
		}
	}
	class Dept extends University{
		public function semestername($semester){
			echo "Semester name is ".$this->semester=$semester."<br>";
		}
	}
	
	$obj=new Dept;
	$obj->dept('ICT',50);
	$obj->semestername('2-1');
	
?>
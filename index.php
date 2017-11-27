<?php

class HelloName{
	
	var $name;
	
	function setName($a){
		$this->name = $a;
	}
	
	function getName(){
		return $name;
	}
	
	function __construct($a){
		$this->setName($a);
	}
	
	function print(){
		print "Hello ".$this->name."!!<br>";
	}
	
}


$hn = new HelloName("Alejandro");
$hn->print();
$hn->setName("Hugo");
$hn->print();

?>
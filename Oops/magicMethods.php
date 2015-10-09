<?php

class ABC{
	
	private $a = ["abc"=>"ABC", "xyz"=>"XYZ"];
	
	public function __construct(){
		
		echo " Hello \n";
	}
	public function __destruct() {
		
		echo "Bye";
	}		
	
	public function __get($name){
		echo "trying to call array" ;
		
	}
	
	public function __set($name,$value){
		
		if (array_key_exists($name,$this->$value))
		{
			echo "\n sucess";
			
		}
		else{echo "aray not exist";}
		
		
	}
	public function __unset($class)
	{
		echo "echoinhg";
		unset($this->$array[$name]);
		
	} 
	
	public function __call($name ,$value){
		
		echo "method calling" ; 
	}

	public function __toString(){
		
		echo get_class($this);
		
	}
	
	public function __invoke($abc){
		echo "object invoked";
		}
	
}

$ab= new abc();
//	$ab->$a= 'XYZ';
//unset($ab->$a);
//echo "bye1";
//echo $ab-> $a  = "world" ;
 echo $ab;
$ab->hello();

$ab("hi");
?>
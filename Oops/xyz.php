<?php

class Customer {
	private $data = array();
 
	public function __set($dt, $vl) {
		$this->data[$dt] = $vl;
	}
 
	public function __get($dt) {
		return $this->data[$dt];
	}
 
	public function __isset($dt) {
		return isset($this->data[$dt]);
	}
 
	public function __unset($dt) {
		return unset($this->data[$dt]);
	}
}
 
$c = new Customer();
$c->name = "Sunil Bhatia";
 
echo isset($c->name)."\n";
echo unset($c->name);


?>
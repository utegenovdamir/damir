<?php 

interface I_read{
public function read();	
}

interface I_write{
public function write();	
}

class A implements I_read, I_write{
	public $str = "Имя:";
	public $name = "<br>Дамир";

 public function read() {
 	echo $this -> str;
 }
		 public function write (){
		 	 echo $this -> name;
		 }	
}


$obj = new A; 
$obj -> read();
$obj -> write();

?>
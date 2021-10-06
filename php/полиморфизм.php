<?php  

class A{
	public function fun(){
		echo "Hello,\n";
	}
	public function test(){
		$this -> fun();
	}
}
 
 class B extends A
 {
 
 	public function fun()
 	{
 		echo "world !\n";
 	}
 }

 $obj = new A;
 $obj -> test();
 $obj = new B(); 
 $obj -> test();
?>
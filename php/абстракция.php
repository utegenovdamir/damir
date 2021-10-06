<?php  

abstract class A{
	abstract protected function fun();
	public function test(){
		echo "Hello,\n";
	}
}
 
 class B extends A
 {
 
 	public function fun()
 	{
 		echo "world !\n";
 	}
 }

 $obj = new B(); 
 $obj -> test();
 $obj -> fun();
?>
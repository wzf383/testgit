<?php
/* 
  class person{
 	public $name;
 	public $sex;
 	public $age;
 	public function __construct(){
 		$this->name="张三";
 		$this->sex="男";
 		$this->age="30";
 	}
 
 	public function showinf(){
 		echo $this->name."<br/>";
 		echo $this->sex."<br/>";
 		echo $this->age."<br/>";
 	}
 
 	public function __destruct(){
 		echo "<br/>对象已经用完了";
 	}
 	public static function show(){
 		echo "调用了静态方法";
 	}
 }
 $p=new person();
 echo $p->showinf(); 
 
 //person::show(); */

class student{
	public $name;
	public $birday;
	public $sex;
	public $num;
	public function __construct(){
		$this->name="小钒";
		$this->birday="888-88-8";
		$this->sex="男";
		$this->num="07160737";
	}

	public function showstudent(){
		echo $this->name."<br/>";
		echo $this->birday."<br/>";
		echo $this->sex."<br/>";
		echo $this->num."<br/>";
	}

	
}
$p=new student();
echo $p->showstudent();
 
 ?>
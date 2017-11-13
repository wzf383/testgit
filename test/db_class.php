<?php
    header("Content-type:text/html;charset=utf8");
	class ConnDB{
		private $local;
		private $username;
		private $pwd;
		private $db;
		private $connID;
		private $code;
		public function __construct($local,$username,$pwd,$connID,$code,$db){
			$this->local=$local;
			$this->username=$username;
			$this->pwd=$pwd;
			$this->connID=$connID;
			$this->code=$code;
			$this->db=$db;
			$this->connect();
		}
		public function connect(){
			if($this->connID=="pconn"){
				$this->connID=mysql_pconnect($this->local,$this->username,$this->pwd)or die("Connect MySQL False");
			}else{
				$this->connID=mysql_connect($this->local,$this->username,$this->pwd)or die("Connect MySQL False");
			
			}
			mysql_select_db($this->db,$this->connID) or die("Connect DB False");
			mysql_query("SET NAMES $this->code");
			return $this->connID;                                 //返回数据库连接对象
			
		}

	}
class AdminDB{
function executeSQL ($sql, $connID){
    $sqlType = strtolower(substr(trim($sql), 0, 6));	//提取SQL语句的类型
    $rs = mysql_query($sql,$connID);                //执行SQL语句  
	if ($sqlType == 'select') {                      //如果是select查询
    	//$arrayData = mysql_fetch_array($rs);              //返回查询记录集
    	foreach ($rs as $key=>$link)
    	{
    	foreach ($link as $value){
    		echo $value."<br>";
    	}
    	}
        if (count($arrayData) == 0 || $rs == false) {  //如果没查询到或发生错误
        	return false;                         //返回false
        } else {                                  //否则
               
              //  print_r($arrayData);                  //返回记录集
               // echo $arrayData;
              // return true;
               return $arrayData;
            // print_r($arrayData);  
        }
       
        //print_r($arrayData);
      //  echo  $arrayData;
    } elseif ($sqlType == 'insert' || $sqlType == 'update' || $sqlType == 'delete') {  //如果执行插入、更新或删除语句
       return $rs;                        //返回语句执行状态，即成功返回true，失败返回false
    } else {
       return false;                      //如果不是上述查询，则返回false
    }
   
}
      
}

$connobj=new ConnDB("localhost","root","","conn","utf8","db_test13");	//实例化数据库连接类
$conn=$connobj->connect();		//返回连接标识

$admindb=new AdminDB();						//数据库操作类实例化
$res=$admindb->executeSQL ("select * from tb_grade",$conn);	//调用数据库操作类中方法执行查询语句
if($res){					//如果返回结果为真，则输出数据
	var_dump($res);
	//print_r($res);
	//print_r($arrayData);		//输出一个数组。
	//return $arrayData;
	
}


/* $res1=$admindb->executeSQL ("select * from tb_grade",$conn);	//调用数据库操作类中方法执行查询语句
if($res1){					//如果返回结果为真，则输出数据
	print_r($res1);
	//print_r($arrayData);		//输出一个数组。

} */
?>

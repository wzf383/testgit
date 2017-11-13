<?php
	class calc{
	
		public function szys($s1,$s2,$fh){  //四则运算，两个操作数，一个运算符
			switch ($fh){
				case '0':
					return $s1+$s2;
				break;
				case '1':
				    return $s1-$s2;
				break;
				case '2':
					return $s1*$s2;
				break;
				case '3':
					return $s1/$s2;
				break;
				default:
				    return '运算错误'.$fh;
			}
		}
		public function mj($k1,$k2){
			return $k1*$k2;
		}
		
	}
?>
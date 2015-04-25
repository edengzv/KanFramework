<?php
class Algorithm extends Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		//获取两个随机数
		$num1 = rand(1,1000);
		do{
			$num2 = rand(1,1000);
		}while($num2 == $num1);
		echo $num1.' '.$num2.'<br/>';

		$ra = 0;
		$rb = 0;
		//针对原数组各个元素求异或
		for($i=1;$i<=1000;$i++){
			$ra ^= $i;
		}
		//针对除去两个数数组各个元素求异或
		for($i=1;$i<=1000;$i++){
			if($i != $num1 && $i != $num2){
				$rb ^= $i;
			}
		}
		//对抑或的结果求异或，这样的结果其实就是 num1 ^ num2
		$rc = $ra ^ $rb;
		//因为num1 != num2 ,所以他们异或后的结果必然有一位是1，这个1可能是在num1中的，也可能是在num2中的
		//但不可能同时在num1 和 num2 中
		//因此可以根据该位，把数组分为两部分，一部分数改位为1，一部分该位为0
		//这样num1 和 num2 就分别在这两部分中
		//所以，只要分别把这两部分中其他数剔除掉，就可以分别得到num1 和 num2 了
		//异或，对！还是通过异或去除相同元素！
		$flag = 1;
		while($flag){
			if($rc & $flag){
				break;
			}
			$flag <<= 1;
		}
		$arr = array();//分到两个数组
		$brr = array();
		$u = 0;
		$v = 0;
		//把去除掉两个数
		for($i=1;$i<=1000;$i++){ 
			if($i != $num1 && $i != $num2){
				if($i & $flag){
					$arr[$u++] = $i;
				}else{
					$brr[$v++] = $i;
				}
			}
		}
		for($i=1;$i<=1000;$i++){
			if($i & $flag){
				$arr[$u++] = $i;
			}else{
				$brr[$v++] = $i;
			}
		}
		$ru = 0;//分别求异或
		for($i=0;$i<$u;$i++){
			$ru ^= $arr[$i];
		}
		$rv = 0;
		for($i=0;$i<$v;$i++){
			$rv ^= $brr[$i];
		}
		echo $ru.' '.$rv;
	}
}
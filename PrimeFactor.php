<?php

class PrimeFactor {

	public static function generate($value){
		//test0 -> return array();
		//test1 -> return array();
		//test2 -> 
		//if(($value==0)||($value==1))return array();
		//return array(2);
		//test3 -> 
		//if(($value==0)||($value==1))return array();
		//return array($value);
		//test4 -> 
		$result = array();
		$semilla = 2;
		while($value>1){
			while($value % $semilla==0){
				
			
				array_push($result,$semilla);
				$value/=$semilla;
			}
			$semilla++;
			
		
		}
		return $result;
			
	}
}

?>
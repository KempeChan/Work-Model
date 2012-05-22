<?php
class fn{
	public static alert(){
		echo "test";
	} 
	
	public static pre($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	
	public static insertOnce($arr,$otherFieldValue){
              # 字符串构造函数，可以由专门的类管理
              $insertValue = '';
              foreach($arr as $key => $v){
                       
                       if($v != NULL){
                                $insertValue .= "($otherFieldValue,$v)"; 
                                if(count($arr)-1 != $key){
                                          $insertValue .= ",";
                                 }
                       }
              }
              # 输出格式: (1,1),(1,2),(1,3)
              # INSERT INTO template_department_map(template_id,department_id) VALUES(1,2),(1,3),(2,3);

	}
	
	public static test{
		echo "this is a test!";
	}


}


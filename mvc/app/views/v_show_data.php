<?php

class v_show_data{

public function show ($arr=[]){

    
   for($i=0 ; $i< count($arr) ; $i +=1 ){

      echo '<h1>' . $arr[$i] . '</h1>'   ; 

        
    

   }
   

}


}

?>
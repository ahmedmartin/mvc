<?php 

class sign_up extends controller{

   public function add (){
      // if(isset($id)&&isset($name)&&isset($email)&&isset($password)){
 
       $v = $this -> view('v_sign_up');

       
       $arr = $v -> get_data();
       print_r ($arr);

      if(isset($arr)){
      $id  = $arr[0];
      $name = $arr[1];
      $email = $arr[2];
      $password = $arr[3];
      }

       if(isset($name)){

         echo 'hnaaaaa';

         $sign_up = $this-> model('m_sign_up');
        
        echo  $sign_up->insert($id,$name,$email,$password);
       }
        



       //}else
       //  echo 'should enter all data (id , name , email , password)';
   }


}
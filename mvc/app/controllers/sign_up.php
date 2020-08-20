<?php 

class sign_up extends controller{

   public function add ($id,$name,$email,$password){
       if(isset($id)&&isset($name)&&isset($email)&&isset($password)){
 
        $sign_up = $this-> model('m_sign_up');
        $sign_up->insert($id,$name,$email,$password);
      //  $this-> view('sign_up',$sign_up->insert());



       }else
         echo 'should enter all data id , name , email , password';
   }

}
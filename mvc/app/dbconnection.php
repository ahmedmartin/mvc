<?php

class dbconnection {


   public $con = '';

   public function __construct(){

    $this-> con = mysqli_connect('localhost', 'root', '', 'test');

   }
    

    public function select (){//$email,$password){

        $query = "select * from users ";   //where email ='". $email."'and password =". $password ;
        $result = mysqli_query($this->con,$query);
        $arr = [] ;
        if($result){
            $i = 0;
           while ($row = mysqli_fetch_assoc($result)){
               
               $arr[$i] = $row['id'] . ','.$row['name'] . ','.$row['email']. ',' .$row['password'];
               $i +=1;
           }

        }
           return $arr;
    }

    public function insert ($id,$name,$email,$password){

        
        $query = "insert into users (id, name, email, password) VALUES ('" .$id. "', '" .$name. "', '" .$email. "', '" .$password. "')";
        $result = mysqli_query($this->con,$query);
        if($result){
           return 'inserted success';
        }else
          echo ' '. mysqli_error($this->con);
    }

}
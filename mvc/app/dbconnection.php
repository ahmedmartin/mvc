<?php

class connection{


   public $con = mysqli_connected("localhost","root","","test");
    

    public function select ($email,$password){

        $query = "select * from users where email ='" $email."'and password =". $password ;
        $result = mysqli_query($this->con,$query);
        if($result)
           return true;
    }

    public function insert ($id,$name,$email,$password){

        $query = "insert into users (id, name, email, password) VALUES ('".$id."', '".$name."
        ', '".$email."', '".$password."')";
        $result = mysqli_query($con,$query);
        if($result)
           return 'inserted success';
    }

}
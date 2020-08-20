<?php

class sign_up{

public function insert($id,$name,$email,$password){

    $dp = new dbconnection();
    return $dp-> insert($id,$name,$email,$password);

}

}
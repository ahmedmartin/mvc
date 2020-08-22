<?php

class m_sign_up {

public function insert($id,$name,$email,$password){

    echo 'db.........';
    require_once'../app/dbconnection.php';
    $dp = new dbconnection();
    return $dp -> insert($id,$name,$email,$password);

}

}
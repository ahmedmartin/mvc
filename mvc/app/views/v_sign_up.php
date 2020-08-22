

<form   method="POST">
    <input type="text"  name="id"/>
    <input type="text"  name="name"/>
    <input type="text"  name="email"/>
    <input type="password"  name="pass"/>
    <input type="submit" name='sign_in'  value="sign_up"/>

    <?php

class v_sign_up {

   public function get_data(){
    if(isset($_POST['sign_in'])){
        
         return [$_POST['id'],$_POST['name'],$_POST['email'],$_POST['pass']];
    
    }
   }


}

?>

</form>



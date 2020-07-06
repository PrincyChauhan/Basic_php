<?php

if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
    
    echo "Hello".$username;
    echo "Your password is ".$password;
    
}

?>
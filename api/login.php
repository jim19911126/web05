<?php

include_once "db.php";

$user=$Admin->count($_POST);

if ($user) {
    $_SESSION['login']=1;
    to("../backend.php");
}else{
    echo "<script>alert('帳號或密碼錯誤');location.replace('../index.php?do=login')</script>";
    
}


?>
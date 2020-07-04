<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

if(mb_strlen($login)<3||mb_strlen($login)>15){
    echo "Invalid login length (3-15)";
    exit();
} else if(mb_strlen($address)<4||mb_strlen($address)>30){
    echo "Invalid address length (4-30)";
    exit();
}else if(mb_strlen($email)<4||mb_strlen($email)>30){
    echo "Invalid e-mail length (4-30)";
    exit();
}else if(mb_strlen($password)<4||mb_strlen($password)>15){
    echo "Invalid password length (4-15)";
    exit();
}

$password = md5($password."kvitka067");
require_once "../blocks/connect.php";

global $mysqli;
connectDB();

$mysqli->query("INSERT INTO `users` (`login`,`email`,`password`,`address`) 
                         VALUES ('$login', '$email','$password','$address')");
closeDB();
$result=true;

if($result){
    echo("<script>alert('User Successfully Registered')</script>");

    echo("<script>window.location = '/';</script>");

}
else {
    header('Location: /');
}

?>
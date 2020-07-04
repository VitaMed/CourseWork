<?php
$login = $_POST['nameUser'];
$address = $_POST['addressUser'];
$email = $_POST['emailUser'];

if(mb_strlen($login)<3||mb_strlen($login)>60){
    echo "Invalid login length (3-60)";
    exit();
} else if(mb_strlen($address)<3||mb_strlen($address)>60){
    echo "Invalid address length (3-60)";
    exit();
}else if(mb_strlen($email)<3||mb_strlen($email)>60){
    echo "Invalid e-mail length (3-60)";
    exit();
}

require_once "blocks/connect.php";

global $mysqli;
connectDB();

$mysqli->query("INSERT INTO `UsersOrders` (`nameUser`,`addressUser`,`emailUser`,`order`,`total`) 
                         VALUES ('$login', '$address','$email','not order','null')");
closeDB();
$result=true;

if($result){

    echo("<script>window.location = '/';</script>");

}
else {
    header('Location: /');
}

?>
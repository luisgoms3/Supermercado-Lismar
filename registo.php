<?php
require_once "ligacao.php";

$email = $_POST['email'];
$nome = ($_POST['nome']);
$apelido = $_POST['apelido'];
$palPasse = ($_POST['palPasse']);

$connect = mysqli_connect("localhost", "root", "", "supermercadolismar");
$query_select = "SELECT email FROM utilizadores WHERE email ='$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];


if($logarray == $email){
    $val3 = 1;
    echo"<script language='javascript' type='text/javascript'> alert('Esse email já existe');window.location.href='criarconta.php';</script>";
    die();
}else{
    $val3 = 2;
}

if($val3 == 2){
    $query = "INSERT INTO utilizadores (email, nome, apelido, palpasse, tipo, tentativasrestantes) VALUES ('$email','$nome','$apelido',MD5('$password'),'3','5')";
    $insert = mysqli_query($connect,$query);
}

?>
<!DOCTYPE html>
<head>
</head>
<?php

header("Location: login.php");
?>

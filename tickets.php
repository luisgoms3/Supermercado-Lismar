
<?php
require_once "ligacao.php";

$nome = ($_POST['nome']);
$email = ($_POST['email']);
$telemovel = ($_POST['telemovel']);
$mensagem = ($_POST['mensagem']);

$connect = mysqli_connect("localhost", "root", "", "supermercadolismar");
$query = "INSERT INTO tickets (nome, email, telemovel, mensagem) VALUES ('$nome','$email','$telemovel','$mensagem')";
$insert = mysqli_query($connect,$query);


?>
<!DOCTYPE html>
<head>
</head>
<?php

header("Location: sucesso_mensagem.php");
?>

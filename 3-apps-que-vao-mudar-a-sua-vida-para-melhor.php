<?php

date_default_timezone_set('America/Sao_Paulo');

$id_leads = $_POST["id_leads"];
$ip = $_SERVER['REMOTE_ADDR'];
$data = date("Y-m-d");
$hora = date("H:i:s");
$nome = $_POST["nome"];
$email = $_POST["email"];

//echo $id_leads;
//echo $ip;
//echo $data;
//echo $hora;
//echo $nome;
//echo $email;

 //$strcon = mysqli_connect('localhost', 'root', '', 'gamaleads') or die('Erro ao conectar ao banco de dados');
 $strcon = mysqli_connect('us-cdbr-iron-east-05.cleardb.net', 'b23b58fbf6bfbb', '46af30d5', 'heroku_ed7ae2b5f9d0b07') or die('Erro ao conectar ao banco de dados');
 $sql = "INSERT INTO leads VALUES ";
 $sql .= "('$id_leads','$ip', '$data', '$hora', '$nome', '$email')";
 echo $sql;
 mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
 mysqli_close($strcon);
 echo "Cadastrado com sucesso!";

 header("location: 3-apps-que-vao-mudar-a-sua-vida-para-melhor-download.html");
 ?>

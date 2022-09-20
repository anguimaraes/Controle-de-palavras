<?php
session_start();
include_once "class/Registro.php";
include_once "class/Connect.php";

$registro = new Registro();

$palavra = $_POST['palavra'];
$significado = $_POST['significado'];
$comentario = $_POST['comentario'];

$id_registro = $registro->insertRegistro($palavra, $significado, $comentario);

// $conn = new Connect();
// $pdo = $conn->connect_db();
// $pdo->exec("INSERT INTO registro VALUES()"); 


//var_dump($_SESSION['last_id']);
// $id_atual = $_SESSION['last_id'];

// $tensao_banco = $comentario * $significado;
// $valor_nominal = (($capacidade_bateria/($palavra/$tensao_banco)) * 0.7) *60;
// $valor_real = (($capacidade_bateria/($palavra/($tensao_banco*0.83))) * 0.7) * 60;

// $_SESSION['tensao_banco'] = number_format($tensao_banco,2,'.','');
// $_SESSION['valor_nominal'] = number_format($valor_nominal,2,'.','');
// $_SESSION['valor_real'] = number_format($valor_real,2,'.','');


if($id_registro == false){
	echo"<script language='javascript' type='text/javascript'>window.location.href='./index.php'?id=2;</script>";

}else{
	echo"<script language='javascript' type='text/javascript'>window.location.href='./index.php?id=1';</script>";
}


?>
<?php
session_start();
include_once "class/Registro.php";

$registro = new Registro();

$id_registro = $_POST['id_registro'];
$tensao_banco = $_POST['tensao_banco'];
$valor_nominal = $_POST['valor_nominal'];
$valor_real = $_POST['valor_real'];

$resInsert = $registro->insertCalculo($id_registro, $tensao_banco, $valor_nominal, $valor_real);


if($resInsert == true){
     header("location: index.php?id=1");
}else{
	header("location: index.php?id=2");
	}


?>
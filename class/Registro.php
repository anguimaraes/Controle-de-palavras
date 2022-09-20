<?php

class Registro
{

    public function insertRegistro($palavra, $significado, $comentario)
    {
        include_once "Connect.php";
        $conn = new Connect();
        $pdo = $conn->connect_db();
        $sql = $pdo->prepare("INSERT INTO registro (palavra, significado, comentario) VALUES (:palavra, :significado, :comentario)");

        $sql->bindValue(":palavra", $palavra);
        $sql->bindValue(":significado", $significado);
        $sql->bindValue(":comentario", $comentario);
        $sql->execute();
        $resultInsert = $sql->rowCount();
        if ($resultInsert > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertCalculo($id_registro, $tensao_banco, $valor_nominal, $valor_real)
    {
        include_once "Connect.php";
        $conn = new Connect();
        $cn = $conn->connect_db();
        $sql = $cn->prepare("UPDATE registro
         SET tensao_banco=:tensao_banco, valor_nominal=:valor_nominal, valor_real=:valor_real 
         WHERE id_registro=:id_registro");


        $sql->bindValue(":id_registro", $id_registro);
        $sql->bindValue(":tensao_banco", $tensao_banco);
        $sql->bindValue(":valor_nominal", $valor_nominal);
        $sql->bindValue(":valor_real", $valor_real);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function buscaRegistro()
    {
        include_once "Connect.php";
        $conn = new Connect();
        $cn = $conn->connect_db();
        $sql = $cn->prepare("SELECT * FROM registro WHERE id_registro<>0");
        $sql->execute();
        $totalres = $sql->rowCount();
        if ($totalres > 0) {
            $dados = $sql->fetchall(PDO::FETCH_ASSOC);
            return array($totalres, $dados);
        } else {
            return false;
        }
    }

    public function verificaRegistro($id_registro)
    {
        include_once "Connect.php";
        $conn = new Connect();
        $cn = $conn->connect_db();
        $sql = $cn->prepare("SELECT * FROM registro WHERE id_registro=:id_registro");
        $sql->bindValue(":id_registro",$id_registro);
        $sql->execute();
        $tem = $sql->rowCount();
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
        if($tem>0){
            return $dados;
        }else{
            return false;
        }
    }
}

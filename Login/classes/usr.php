<?php

class usr{

    private $pdo; 
    public $msgErro = "";
    public function conect($nome, $host, $user, $senha){
        global $pdo;
            try{
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $user, $senha);
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
    }
    }

    public function cadastrar($nome, $email, $senha){
        global $pdo;
        //verificando se existe o email no banco de dados 
        $sql = $pdo-> prepare('SELECT id_user FROM users WHERE email = :e');
        $sql-> bindValue(":e", $email);
        $sql->execute();
        if($sql-> rowCount() > 0){
            return false; //já cadastrado
        }
        else{//Senão, cadastrar>
            $sql = $pdo->prepare('INSERT INTO users (nome, email, senha) VALUES (:n, :e, :s)');

            $sql-> bindValue(":n", $nome);
            $sql-> bindValue(":e", $email);
            $sql-> bindValue(":s", md5($senha));
            $sql-> execute();
            return true;//cadastrado com sucesso
        }
    }

    public function logar($email, $senha){
        global $pdo;
        $sql = $pdo-> prepare("SELECT id_user FROM users WHERE email = :e AND senha = :s");
        $sql-> bindValue(":e", $email);
        $sql-> bindValue(":s", md5($senha));
        $sql->execute();
        if ($sql->rowCount() > 0){//criar sessão

            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_user'] = $dado['id_users'];
            return true; //logar bem sucedido
        }
        else{
            return false; //não foi possível logar
        }
    }
}


?>
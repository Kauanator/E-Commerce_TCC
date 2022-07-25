<?php 
    require_once "../Login/classes/usr.php";
    $u = new usr;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href='../style/style.css'>
</head>
<body>
    <h1> Faça seu Cadastro :^)</h1>
    <div>
        <form action="" name='formuser' method=''>
            <input type="text" name="nome" id="nome"  placeholder="digite seu nome" maxlength='30'>
                
            <input type="email" name="Email" id="" placeholder="insira seu email" maxlength='40'> <!--required-->

            <div id="correctMail"></div>
            <input type="email" name="confirmEmail" onkeyup="verifyEmail()" id="email" placeholder="confirme seu e-mail" maxlength="40"> <!--required-->


            <div id='errorPassForce'></div>
            <input type="password" name="pass" id="passForce" onkeyup="validPassForce()" placeholder="crie uma senha" maxlength="15"> <!--required-->
            <div id="show">
            <input type="checkbox" id="check" onclick="showPass()"><p id="p1">Mostrar senha</p>
        </div>
            <div id="congrats"></div>
            <input type="password" name="confirm_pass" id="" onkeyup="verifyPass()" placeholder="confirme sua senha" >  <!--required-->
            
            <input type="submit" id="btn" onclick="verifyPass()" value="Cadastrar">
            <!--
                ***adicionar o required a cada input***
            -->
        </form>
    </div>
    <script src="./JS/script.js">
    </script>
<?php
//verificando se clicou no botão
isset($_POST['nome']);
{
    
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["Email"]);
    $senha = addslashes($_POST["pass"]);
    $confirmSenha = addslashes($_POST["confirm_pass"]);
    
    //verificando se o campo está vazio
    if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmSenha))
    {
        $u->conect("general","localhost","root","");
        if($u->msgErro == ""){// resultado ideal
            if($senha == $confirmSenha){
                if($u->cadastrar($nome,$email,$senha)){
                    echo "Cadastrado com sucesso! Acesse a página de login para entrar na sua conta";
                }else{
                    echo "Email já cadastrado";
                }
            }else{
                echo "Senhas não conrespondem!";
            }
        }
        else{
            echo "Erro: ".$u->msgErro;
        }
    }else {
        echo "Preencha todos os campos";
    }
}
?>
</body>
</html>
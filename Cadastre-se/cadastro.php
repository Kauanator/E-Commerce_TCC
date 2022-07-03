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

            <div id="congrats"></div>
            <input type="password" name="confirm_pass" id="" onkeyup="verifyPass()" placeholder="confirme sua senha" > <!--required-->
            
            <input type="submit" id="btn" onclick="verifyPass()" value="Cadastrar">
            
        </form>
    </div>
    <script src="./JS/script.js">
    </script>
</body>
</html>
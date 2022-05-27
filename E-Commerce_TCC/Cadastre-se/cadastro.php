<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href='./style/style.css'>
    <style>
        h1{
            color: aliceblue;
        }

        span{
            color: aliceblue;
        }
    </style>
</head>
<body>
    <h1> Faça seu Cadastro :^)</h1>
    <div>
        <form action="" name='formuser' method=''>
            <input type="text" name="nome" id="nome" placeholder="digite seu nome">

            <input type="email" name="e-mail" id="e-mail" placeholder="insira seu email"><!--required-->

                <input type="email" name="email" id="email" placeholder="confirme seu email" ><!--required-->

            <div id='errorPassForce'></div>
                    <input type="password" name="pass" id="passForce" onkeyup="validPassForce()" placeholder="crie uma senha"><!--required-->

            <div id="congrats"></div>
                    <input type="password" name="confirm_pass" id="" onkeyup="verifyPass()" placeholder="confirme sua senha" ><!--required-->
            
            <input type="submit" id="btn" onclick="verifyPass()" value="Cadastrar">
        </form>
    </div>
    <script src="./JS/main.js">
    </script>
</body>
</html>
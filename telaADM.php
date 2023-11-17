<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Tela Adm</title>
</head>
<body>
    <form method="POST">
        <h1>Acesso de Adm</h1>
    
        <label>Usario: </label>
        <input type="text" name="tUser" id="tUser"/>
        <br><br>

        <label>Senha: </label>
        <input type="text" name="tSenha" id="tSenha"/>
        <br><br>

        <button> Cadastrar
            <?php 
                if(('tUser' == 'usuario') && ('tSenha' == 'admin')){
                    
                }else{
                    echo "Senha Incorreta realize o processo novamente";
                }
            ?>
        </button>

    <button id="Voltar"> <a href="index.php"> Voltar </a></button>
    </form>
</body>
</html>
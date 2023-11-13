<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Cadastro Farmacia A</title>
</head>
<body>
    <?php include 'cadastro.php'; ?>
    <form method="POST">
        <h1>Farmácia A</h1>
        <label>Nome: </label>
        <input type="text" name="tNome" id="tNome"/>
        <br><br>

        <label>RG: </label>
        <input type="text" name="tRG" id="tRG"/>
        <br><br>

        <label>Telefone: </label>
        <input type="text" name="tTelefone" id="tTelefone"/>
        <br><br>

        <label>Plano de Saúde: </label>
        <input type="checkbox" name="tSP" id="tSP"> Sim </input>
        <input type="checkbox" name="tNP" id="tNP"> Não </input>

        <label>Plano de Saúde: </label>

        <?php
        if ($_POST['tNP']) {
            // The checkbox for "Não" is checked
            echo "Plano de Saúde não selecionado.";
        } else {
            // The checkbox for "Não" is not checked
            echo "Plano de Saúde selecionado.";
        }
        ?>


        <select name="listPlano" id="listPlano">
            <option value="0"></option>
            <option value="1">UniMed</option>
            <option value="2">Bradesco</option>
            <option value="3">Cartão de Todos</option>
            <option value="4">Notre Dame</option>
        </select>
        <br><br>

        <label>Uso do Farmacia Popular: </label>
        <input type="checkbox" name="tFS" id="tFS"> Sim </input>
        <input type="checkbox" name="tFN" id="tFN"> Não </input>
        <select name="listFarm" id="listFarm">
            <option value="0"></option>
            <option value="1">FarmaConde</option>
            <option value="2">Drogaria São Paulo</option>
            <option value="3">UltraFarma</option>
            <option value="4">BiFarma</option>
        </select>
        <br><br>



        <button id="button"> Cadastrar 
        <?php
            session_start();
            //Passe o Dado para o construtor
            $_SESSION['nome']          = $_POST['tCPF'];
            $_SESSION['RG']            = $_POST['tNome'];
            $_SESSION['telefone']      = $_POST['tTelefone'];
            $_SESSION['plano']         = $_POST['tPlano'];
            $_SESSION['farmaciaPop']   = $_POST['tFarmaciaP'];

        ?>
        </button>
        <br><br>
        <button id="Voltar"> <a href="index.php"> Voltar </a></button>
    </form>

</body>
</html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Cliente Cadastrado</title>
            <meta http-equiv="refresh" content="0 ;../index.php"/>
    </head>
    <body>
        <?php
        $nomeCliente = $_GET['nome'];
        $cpf = $_GET['CPF'];
        $telefone = $_GET['telefone'];
        $celular = $_GET['celular'];
        $endereco = $_GET['endereco'];
        $email = $_GET['email'];
        $dataNascimento = $_GET['dataNascimento'];
        $sexo = $_GET['sexo'];
        if ($nomeCliente == ''){
            print('<script type="text/javascript">alert("Faltou preencher")</script>');
        }
        else {
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");
            mysql_query("insert into cliente (nomeCliente,CPF,endereco,celular,telefone,email,dataNascimento,sexo) values ('$nomeCliente','$cpf','$endereco','$celular','$telefone','$email','$dataNascimento','$sexo')")
                    or die('<script type="text/javascript">alert("Não é possível inserir o Cliente!")</script>');
            print('<script type="text/javascript">alert("Cliente inserido com sucesso! ")</script>');
        }
        ?>
       
    </body>
</html>
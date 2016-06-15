<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Cliente Cadastrado</title>
            <meta http-equiv="refresh" content="2 ;../views/listaClientes.php"/>
    </head>
    <body>
        <?php
        $nomeCliente = $_POST['nome'];
        $nomeCliente = $_POST['CPF'];
        $nomeCliente = $_POST['nome'];
        $nomeCliente = $_POST['nome'];
        $nomeCliente = $_POST['nome'];
        
        if ($nomeCliente == '')
            print('<script type="text/javascript">alert("Faltou preencher Categoria de Veículo")</script>');
        else {
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");
            mysql_query("insert into cliente (nome,cpf,endereco,celular,telefone,email,dataNascimento,sexo) values ('$nomeCliente','$CP','$modelo','$cor','$ano','$opcionais','$portas','$placa','$disponibilidade')")
                    or die('<script type="text/javascript">alert("Não é possível inserir o categoria veículo!")</script>');
            print('<script type="text/javascript">alert("Categoria Veículo inserida com sucesso: ")</script>');
        }
        ?>
        <p><a href="inserirCatVeiculo.php">Voltar</a></p>
        <p><a href="../views/listaVeicDisp.php">Mostrar</a></p>
    </body>
</html>
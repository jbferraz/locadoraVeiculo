<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Veículo cadastrado</title>
            <meta http-equiv="refresh" content="0 ;../views/listaCatVeicDisp.php"/>
    </head>
    <body>
        <?php
        $descCatVeiculo = $_POST['descCatVeiculo'];
        if ($descCatVeiculo == '')
            print('<script type="text/javascript">alert("Faltou preencher Categoria de Veículo")</script>');
        else {
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");
            mysql_query("insert into categoriaveiculo (descCatVeiculo) values ('$descCatVeiculo')")
                    or die('<script type="text/javascript">alert("Não é possível inserir o categoria veículo!")</script>');
            print('<script type="text/javascript">alert("Categoria Veículo inserida com sucesso: ")</script>');
        }
        ?>
        <p><a href="inserirCatVeiculo.php">Voltar</a></p>
        <p><a href="../views/listaCatVeicDisp.php">Mostrar</a></p>
    </body>
</html>
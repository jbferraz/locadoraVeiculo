<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type" content="2 ;../views/listaVeicDisp.php">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <head>

            <meta http-equiv="refresh" content="0 ;../views/listaCatVeicDisp.php">
        </head>
        <body>
            <center>
                <center>
                    <h1>Categoria DELETADA</h1>
                </center>
                <?php
                $cod = $_GET['cod_del'];
                require("../controller/conecta.inc");
                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                mysql_query("update categoriaveiculo set catAtivo=0 WHERE idCatVeiculo ='$cod'") or die('<script type="text/javascript">alert("Categoria Deletada com sucesso: $placa")</script>');
                print('<script type="text/javascript">alert("Categoria Deletada com sucesso: $placa")</script>');
                ?>
            </center>
        </body> 
    </meta>
</html>
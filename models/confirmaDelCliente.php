<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type" content="2 ;../views/listaVeicDisp.php">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <head>

            <meta http-equiv="refresh" content="0 ;../views/listaVeicDisp.php">
        </head>
        <body>
            <center>
                <center>
                    <h1>Veículo DELETADO</h1>
                </center>
                <?php
                $cod = $_GET['cod_del'];
                require("../controller/conecta.inc");
                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                mysql_query("UPDATE cliente SET `cliAtivo`=0 WHERE CPF ='$cod'") or die('<script type="text/javascript">alert("Veículo Deletado com sucesso: $placa")</script>');
                print('<script type="text/javascript">alert("Cliente Deletado com sucesso!")</script>');
                ?>


            </center>
        </body> 
    </meta>
</html>
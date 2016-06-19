<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <head>
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Marca DELETADa</title>
            <meta http-equiv="refresh" content="0;../views/listaMarcaDisp.php"/>
        </head>
        <body>
            <center>
                
                <?php
                $cod = $_GET['cod_del'];
                require("../controller/conecta.inc");
                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                mysql_query("DELETE FROM `marca` WHERE idMarca ='$cod'") or die('<script type="text/javascript">alert("Veículo Deletado com sucesso: $placa")</script>');
                print('<script type="text/javascript">alert("Marca deletada com sucesso!")</script>');
                ?>


            </center>
        </body> 
    </meta>
</html>
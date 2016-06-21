<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <meta http-equiv="refresh" content="0 ;../views/listaVeicDisp.php">
        <title>Confirma Veículos</title>
        <head>
            <center>
                <h1>Veículo Atualizado</h1>
            </center>
        </head>
        <body>
            <center>
                <table align=‘center'>
                    <tr><td align='center'>
                            <div id="quatro"> 
                                <?php
                                $cod = $_GET['idLocacao'];
                                $KmDevolucao = $_GET["kmDevolucao"];
                                $dataDevolucao = $_GET["dataDevolucao"];
                                
                                $idVeiculo = $_GET ['idVeiculo'];
                                
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                print("Devoluçao realizada:<p>");
                                mysql_query("UPDATE locacao SET kmDevolucao='$KmDevolucao',dataDevolucao='$dataDevolucao' where idLocacao='$cod'") or die("Não é possível alterar dados do veículo!");
                                 mysql_query("UPDATE veiculo SET disponivel='1'where idVeiculo='$idVeiculo'") or die("Não é possível alterar dados de categoria!");
                                ?>
                            </div>
                        </td></tr>
                </table>
            </center>
        </body>        

</html>


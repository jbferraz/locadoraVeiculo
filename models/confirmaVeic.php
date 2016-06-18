<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <meta http-equiv="refresh" content="2 ;../views/listaVeicDisp.php">
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
                                $cod = $_GET['cod_alter'];
                                $modelo_alter = $_GET["modelo_alter"];
                                $categoriaveiculo_alter = $_GET["categoria_alter"];
                                $cor_alter = $_GET["cor_alter"];
                                $valorKm_alter = $_GET["valorKm_alter"];
                                $valorLivre_alter = $_GET["valorLivre_alter"];
                                $nomeMarca_alter = $_GET["marca_alter"];
                                $ano_alter = $_GET["ano_alter"];
                                $placa_alter = $_GET["placa_alter"];


                                //falta verificar se campos estão preenchidos
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                print("Alteração do veículo realizada:<p>");
                                print("$placa_alter <b>$modelo_alter</b> <p>");
                                mysql_query("UPDATE veiculo SET modelo='$modelo_alter',categoriaVeiculo_idCatVeiculo='$categoriaveiculo_alter',cor='$cor_alter',marca_idMarca='$nomeMarca_alter', ano='$ano_alter',placa='$placa_alter',valorKm='$valorKm_alter',valorLivre='$valorLivre_alter' where idVeiculo='$cod'") or die("Não é possível alterar dados do veículo!");
                                print("Dados alterados com sucesso!");
                                ?>

                            </div>
                        </td></tr>
                </table>
            </center>
        </body>        

</html>


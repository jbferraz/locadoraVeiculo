<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <meta http-equiv="refresh" content="10 ;../views/listaVeicDisp.php">
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

                                    mysql_query("UPDATE locacao SET kmDevolucao='$KmDevolucao',dataDevolucao='$dataDevolucao',status=0 where idLocacao='$cod'") or die("Não é possível alterar dados do veículo!");
                                    mysql_query("UPDATE veiculo SET disponivel='1'where idVeiculo='$idVeiculo'") or die("Não é possível alterar dados de categoria!");

                                    $resultado = mysql_query("Select * from Locacao, Veiculo, Cliente where Cliente_idCliente=idCliente and Veiculo_idVeiculo=idVeiculo and idLocacao='$cod'") or die("Não é possível consultar veículos locados.");
                                    $linha = mysql_fetch_array($resultado);
                                    $Codigo = $linha["idLocacao"];
                                    $Cliente = $linha["nomeCliente"];
                                    $Modelo = $linha["modelo"];
                                    $DtRetirada = $linha["dataRetirada"];
                                    $KmRetirada = $linha["kmRetirada"];
                                    $KmLivre = $linha['kmLivre'];
                                    $valorLivre =$linha['valorLivre'];
                                    $valorKm = $linha['valorKm'];
                                    //$DtRetirada = date("d/m/Y", strtotime($DtRetirada));
                                    //$DataDevolucao = date("d/m/Y", strtotime($dataDevolucao));
                                    $diferenca = strtotime($dataDevolucao) - strtotime($DtRetirada);
                                    $dias = floor($diferenca / (60 * 60 * 24));
                                    print("<h3>Dados da Locação:</h3><p>");
                                    Print ("<b>Locação:</b> $Codigo<p>");
                                    Print ("<b>Cliente:</b> $Cliente<p>");
                                    Print ("<b>Veículo:</b> $Modelo<p>");
                                    Print ("<b>Data de Retirada:</b> $DtRetirada<p>");
                                    Print ("<b>Data de Devolução:</b> $dataDevolucao<p>");
                                    
                                    if ($linha["kmLivre"] == 1){
                                    $valor =($valorLivre *$dias);
                                    Print ("<b>Totais de dias: </b>$dias<p>");
                                    Print ("<b>Valor: R$ </b> $valor<p>");
                                    
                                    
                                    }Else{
                                        $kmPercorrido=($KmDevolucao - $KmRetirada);
                                        $valor = ($valorKm*$kmPercorrido);
                                        Print ("<b>Total de Km's percorridos: $kmPercorrido<p>");
                                        Print ("<b>Valor: R$ $valor");
                                    }
                                    ?>
                                    <script type="text/javascript">alert("Devolução realizada com sucesso!")</script>
                                    <p><a href="../views/listaVeicDisp.php" class="button_voltar">Voltar</a>
                                </div>
                            </td></tr>
                    </table>
                </center>
            </body>        

            </html>


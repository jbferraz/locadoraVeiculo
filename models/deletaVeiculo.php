<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <head>
            <center>
                <h1>Deleta Veículo</h1>
            </center>
        </head>
        <body>
            <center>
                <table align=‘center'>
                    <tr><td align='center'>
                            <div id="quatro"> 
                                <?php
                                $cod = $_GET['cod'];
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $result = mysql_query("Select * from marca,veiculo,categoriaveiculo where veiculo.marca_idMarca=marca.idMarca AND veiculo.categoriaVeiculo_idCatVeiculo = categoriaveiculo.idCatVeiculo AND idVeiculo ='$cod'") or die("Não é possível retornar dados do funcionário!");
                                $linha = mysql_fetch_array($result);

                                $modelo = $linha['modelo'];
                                $cor = $linha['cor'];
                                $ano = $linha['ano'];
                                $portas = $linha['portas'];
                                $placa = $linha['placa'];
                                $marca = $linha['nomeMarca'];


                                print("<h3>Deletando o veículo:</h3><p>");
                                print("<b>Modelo:</b> $modelo<br>");
                                print("<b>Marca:</b> $marca<br>");
                                print("<b>Placa:</b> $placa<br>");
                                print("<b>Cor: </b>$cor<br>");
                                print("<b>Ano:</b> $ano");
                                
                                
                                ?>
                                <form action="confirmaDelVeic.php" method="get">
                                    <input type="hidden" name="cod_del" value="<?php print($placa) ?>">
                                    <br><input type="submit" value="Deletar Dados">
                                </form>
                            <p>
                        <a href="../views/listaVeicDisp.php" class="button_voltar" >Voltar</a>
                        </p>
                        </div>
                 </td></tr>
             </table>
        </center>
        </body>        
</html>


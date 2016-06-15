<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <script type="text/javascript">

                window.onload = function () {
                    document.getElementById("categoria").onchange = function () {
                        this.parentNode.action = this.value + ".php";
                    }
                }
            </script>
            <title>Veículos Disponiveis</title>
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    </head>
    <body>
        <center>
            <table align=‘center'>
                <center>
                    <h1>Mostra os Veículos Disponiveis</h1>
                </center>
                <tr><td align='center'>
                        <div id="quatro"> 
                            <form>
                                <?php
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $resultado = mysql_query("Select * from veiculo, Marca where disponivel=1 and marca_idMarca=idMarca order by modelo") or die("Não é possível consultar veículos disponiveis.");
                                print("<table border='1' bordercolor='blue'>");
                                print("<tr><td><b>Código</td>");
                                print("<td><b>Marca</td>");
                                print("<td><b>Modelo</td>");
                                print("<td><b>Ano</td>");
                                print("<td><b>Cor</td>");
                                print("<td><b>Portas</td>");
                                print("<td><b>Opcionais</td>");
                                print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
                                while ($linha = mysql_fetch_array($resultado)) {
                                    $Codigo = $linha["idVeiculo"];
                                    $Marca = $linha["nomeMarca"];
                                    $Modelo = $linha["modelo"];
                                    $Ano = $linha["ano"];
                                    $Cor = $linha["cor"];
                                    $Portas = $linha["portas"];
                                    $Opcionais = $linha["opcionais"];
                                    print("<tr><td align='center'>$Codigo</td>");
                                    print("<td>$Marca</td>");
                                    print("<td>$Modelo</td>");
                                    print("<td>$Ano</td>");
                                    print("<td>$Cor</td>");
                                    print("<td>$Portas</td>");
                                    print("<td>$Opcionais</td>");
                                    print("<td><a href='../models/deletaVeiculo.php?cod=$Codigo'>Deletar</a></td>"); //Refatorar Deletar
                                    print("<td><a href='../models/alteraVeiculo.php?cod=$Codigo'>Alterar</a></td></tr>"); //Refatorar Alterar
                                }
                                print("</table></center>");
                                ?>
                                <p><a href="../models/insereVeiculo.php" class="button_voltar" >Inserir</a></p>
                                <p><a href="../index.php" class="button_voltar" >Voltar</a></p>
                            </form>
                        </div>
                    </td></tr>
            </table>

    </body>
</html>
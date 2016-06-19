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
            <title>Veículos Locados</title>
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    </head>
    <body>
        <ul><!--Inicio Menu-->
           <li><a class="active" href="listaVeicDisp.php">Veículos disponíveis</a></li>

           <div class="dropdown">
               <li><a class="dropbtn">Cliente</a>
                   <div class="dropdown-content">
                       <a href="../models/insereCliente.php">Inserir Cliente</a>
                       <a href="../views/listaClientes.php">Listar Clientes</a>
                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Veículo</a>
                   <div class="dropdown-content">
                       <a href="../models/insereVeiculo.php">Inserir Veículo</a>
                       <a href="../views/listaVeiculos.php">Listar Veículos</a>

                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Marca</a>
                   <div class="dropdown-content">
                       <a href="../models/insereMarca.php">Inserir Marca</a>
                       <a href="../views/listaMarcaDisp.php">Listar Marcas</a>
                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Categoria</a>
                   <div class="dropdown-content">
                       <a href="../models/insereCatVeiculo.php">Inserir Categoria</a>
                       <a href="../views/listaCatVeicDisp.php">Listar Categorias</a>
                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Locação</a>
                   <div class="dropdown-content">
                       <a href="../views/listaVeicDisp.php">Locar Veículo</a>
                       <a href="../views/listaLocAbertas.php">Locações Abertas</a>
                       <a href="listaLocacoes.php">Histórico</a>
                   </div>
               </li>
           </div>
       </ul><!--Fim Menu-->
        <center>
            <table align=‘center'>
                <center>
                    <h1>Veículos Locados</h1>
                </center>
                <tr><td align='center'>
                        <div id="quatro"> 
                            <form>
                                <?php
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $resultado = mysql_query("Select * from Locacao, Veiculo, Cliente where Cliente_idCliente=idCliente and Veiculo_idVeiculo=idVeiculo order by dataLocacao") or die("Não é possível consultar veículos locados.");
                                print("<table border='1' bordercolor='blue'>");
                                print("<tr><td><b>Código</td>");
                                print("<td><b>Cliente</td>");
                                print("<td><b>Veículo</td>");
                                print("<td><b>Data Locação</td>");
                                print("<td><b>Data Retirada</td>");
                                print("<td><b>Data Devolução</td>");
                                print("<td><b>Km Retirada</td>");
                                print("<td><b>Km Devolução</td>");
                                print("<td><b>Km Decorrida</td>");
                                print("<td><b>Km Livre</td>");
                                print("<td><b>Valor</td></tr>");
                                while ($linha = mysql_fetch_array($resultado)) {
                                    $Codigo = $linha["idLocacao"];
                                    $Cliente = $linha["nomeCliente"];
                                    $Modelo = $linha["modelo"];
                                    $DtLocacao = $linha["dataLocacao"];
                                    $DtRetirada = $linha["dataRetirada"];
                                    $DtDevolucao = $linha["dataDevolucao"];
                                    $KmRetirada = $linha["kmRetirada"];
                                    $KmDevolucao = $linha["kmDevolucao"];
                                    $KmDecorrida = $KmDevolucao-$KmRetirada;
                                    if ($KmDecorrida<0){
                                        $KmDecorrida=0;
                                    }
                                    if ($linha["kmLivre"] == 1){
                                        $KmLivre="Sim";
                                    }Else{
                                        $KmLivre="Não";
                                    }
                                    if ($linha["kmLivre"] == 1){
                                        $valor=$linha["valorLivre"];
                                    }Else{
                                        $valor=$linha["valorKm"]*$KmDecorrida;
                                    }
                                    print("<tr><td align='center'>$Codigo</td>");
                                    print("<td>$Cliente</td>");
                                    print("<td>$Modelo</td>");
                                    print("<td>$DtLocacao</td>");
                                    print("<td>$DtRetirada</td>");
                                    print("<td>$DtDevolucao</td>");
                                    print("<td>$KmRetirada</td>");
                                    print("<td>$KmDevolucao</td>");
                                    print("<td>$KmDecorrida</td>");
                                    print("<td>$KmLivre</td>");
                                    print("<td>$valor</td>");
                                   
                                }
                                print("</table></center>");
                                ?>
                                <p><a href="../index.php" class="button_voltar">Voltar</a></p>
                            </form>
                        </div>
                    </td></tr>
            </table>

    </body>
</html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
           
           @import '../config/style.css';
         </style>
    </head>
    <body>
        <ul>
            <li><a class="active" href="../views/listaVeicDisp.php">Veículos disponíveis</a></li>
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
                        <a href="../views/listaMarcaDisp.php">Listar Marca</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Categoria</a>
                    <div class="dropdown-content">
                        <a href="../models/CatVeiculo.php">Inserir Categoria</a>
                        <a href="../views/listaCatVeicDisp.php">Listar Categoria</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
               <li><a class="dropbtn">Locação</a>
                   <div class="dropdown-content">
                       <a href="../views/listaVeicDisp.php">Locar Veículo</a>
                       <a href="../views/listaLocAbertas.php">Locações Abertas</a>
                       <a href="../views/listaLocacoes.php">Histórico</a>
                   </div>
               </li>
           </div>
        </ul>
         <center>
            <h1>Alterar Veículo</h1>
            <table align=‘center'>
                <tr><td align='center'>
                        <div id="quatro">
                            <?php
                                $cod = $_GET['cod'];
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $resultado = mysql_query("Select * from Locacao, Veiculo, Cliente where Cliente_idCliente=idCliente and Veiculo_idVeiculo=idVeiculo and idLocacao='$cod'") or die("Não é possível consultar veículos locados.");
                                $linha = mysql_fetch_array($resultado);
                                $Codigo = $linha["idLocacao"];
                                $Cliente = $linha["nomeCliente"];
                                $idVeiculo = $linha["idVeiculo"];
                                $Modelo = $linha["modelo"];
                                $DtLocacao = $linha["dataLocacao"];
                                $DtRetirada = $linha["dataRetirada"];
                                $KmRetirada = $linha["kmRetirada"];
                                $KmLivre = $linha['kmLivre'];
                                $DtLocacao = date("d/m/Y H:i", strtotime($DtLocacao));
                                $DtRetirada = date("d/m/Y", strtotime($DtRetirada));
                                print("<b>Locação Nº: </b>$Codigo<p>");
                                print("<b>Cliente:</b> $Cliente<p>");
                                print("<b>Veículo:</b> $Modelo<p>");
                                print("<b>Data Locação:</b> $DtLocacao<p>");
                                print("<b>Retirada:</b> <time>$DtRetirada</time><p>");
                                print("<b>KM Retirada:</b> $KmRetirada<p>");
                                if ($linha["kmLivre"] == 1){
                                         print("<b>KM Livre:</b> Sim<p>");
                                    }Else{
                                        print("<b>KM Livre:</b> Não<p>");
                                    }
                               
                               
                            ?>
                            <form action="confirmaDevolucao.php"method="get">
                                <input type="hidden" name="idLocacao" value="<?php print($Codigo)?>">
                                <input type="hidden" name="idVeiculo" value="<?php print($idVeiculo)?>">
                                
                              
                                <label for="lname">KM Devolução:</label>
                            <input type="text" name="kmDevolucao" required>
                                <label for="lname">data Devolução:</label>
                             <input type="date" name="dataDevolucao" required>
                                
                                <p><input type="submit" value="Concluir">
                            </form>
                            <p><a href="mostraf.php">Cancelar e voltar</a>
                        </div>
                    </td></tr>
            </table>
        </center>
    </body>
</html>



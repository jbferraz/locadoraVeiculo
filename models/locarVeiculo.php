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
                                $resultado1 = mysql_query("Select * from marca,veiculo,categoriaveiculo where veiculo.marca_idMarca=marca.idMarca AND veiculo.categoriaVeiculo_idCatVeiculo = categoriaveiculo.idCatVeiculo AND idVeiculo ='$cod'") or die("Não é possível retornar dados do funcionário!");
                                $linha = mysql_fetch_array($resultado1);
                                $Codigo = $linha["idVeiculo"];
                                $modelo = $linha["modelo"];
                                $placa= $linha["placa"];
                                $valorLivre= $linha["valorLivre"];
                                $valorKm= $linha["valorKm"];
                                
                                print("<h3>Locação:</h3><p>");
                                print("<b>Veículo:</b> $modelo<p>");
                                print("<b>Placa:</b> $placa<p>");
                                print("<b>KM:</b> R$ $valorKm<p>");
                                print("<b>Diária:</b> R$ $valorLivre<p>");
                            ?>
                            <form action="confirmaLocacao.php"method="get">
                                <input type="hidden" name="idVeiculo" value="<?php print($Codigo)?>">
                                <label for="cliente">Cliente</label>
                                <select name="idCliente">
                                <?php
                                  
                                    $result = mysql_query("Select * from cliente order by nomeCliente") or die("Não é possível consultar marca.");
                                    while ($linha = \mysql_fetch_array($result)) {
                                        $idCliente = $linha["idCliente"];
                                        $nomeCliente = $linha["nomeCliente"];
                                        print("<option value='$idCliente'>$nomeCliente</option>");
                                    }
                                ?>
                            </select>
                                <label for="lname">Retirada:</label>
                            <input type="date" name="dataRetirada" required>
                                <label for="lname">Devolução:</label>
                            <input type="date" name="dataDevolucao" required>
                                <label for="lname">KM Livre:</label>
                                <select id="kmLivre" name="kmLivre"required>
        
                                <option value= '1'>Sim</option>
                                <option value='0'>Não</option>
                                
                                </select>
                            <label for="lname">KM Retirada:</label>
                            <input type="text" name="kmRetirada" required>
                                
                                <p><input type="submit" value="Concluir">
                            </form>
                            <p><a href="mostraf.php">Cancelar e voltar</a>
                        </div>
                    </td></tr>
            </table>
        </center>
    </body>
</html>



<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        
        <meta charset="UTF-8" http-equiv="Content-Type"/>
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <title>Cadastrar Veículo</title>
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
                       <a href="insereVeiculo.php">Inserir Veículo</a>
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
                       <a href="../models/insereLocacao.php">Inserir Locação</a>
                       <a href="../models/devolveVeicLocado.php">Devolve Veículo</a>
                       <a href="../views/listaLocAbertas.php">Locações Aberta</a>
                       <a href="../views/listaLocacoes.php">Listar Locações</a>
                   </div>
               </li>
           </div>
       </ul>
    <center>
        <table align=‘center'>
            <center>
                <h1>Cadastrar Veículo</h1>
            </center>
            <tr><td align='center'>
                    <div id="quatro"> 
                        <form action="veiculoInserido.php">
                            <label for="categoria">Categoria</label>
                            <select name="categoriaveiculo">
                                <?php
                                    require("../controller/conecta.inc");
                                    conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                    $result = mysql_query("Select * from categoriaveiculo order by descCatVeiculo") or die("Não é possível consultar marca.");
                                    while ($linha = \mysql_fetch_array($result)) {
                                        $idCatVeiculoD = $linha["idCatVeiculo"];
                                        $descCatVeiculoD = $linha["descCatVeiculo"];
                                        print("<option value='$idCatVeiculoD'>$descCatVeiculoD</option>");
                                    }
                                ?>
                            </select>
                            <label for="marca">Marca</label>
                            <select name="marca">
                                <?php

                                $resultado = mysql_query("Select * from marca order by nomeMarca") or die("Não é possível consultar marca.");
                                while ($linha = \mysql_fetch_array($resultado)) {
                                    $CodigoD = $linha["idMarca"];
                                    $NomeD = $linha["nomeMarca"];
                                    print("<option value='$CodigoD'>$NomeD</option>");
                                }
                                ?>
                            </select>
                            <label for="fname">Modelo</label>
                            <input type="text" name="modelo"placeholder="Fiesta" required>
                            <label for="lname">Cor</label>
                            <input type="text" name="cor"placeholder="Azul" required>
                            <label for="lname">Ano</label>
                            <input type="text" name="ano" placeholder="AAAA" required>
                            <label for="lname">Portas</label>
                            <input type="text" name="portas"placeholder="Ex: 4" required>
                            <label for="lname">Opcionais</label>
                            <input type="text" name="opcionais"placeholder="Ex: Completo" required>
                            <label for="lname">Valor KM</label>
                            <input type="text" name="valorKm"placeholder="100,00" required>
                            <label for="lname">Valor Diaria</label>
                            <input type="text" name="valorLivre"placeholder="100,00" required>
                            <label for="lname">Placa</label>
                            <input type="text" name="placa"placeholder="AAA-1234" required>
                            <label for="disponibilidade">Disponibilidade</label>
                            <select id="disponibilidade" name="disponibilidade"required>
                                <option value= '0'>Não</option>
                                <option value='1'>Sim</option>
                            </select>

                            <input type="submit" value="Inserir Veículo" >
                            <p>
                            <a href="../views/listaVeicDisp.php" class="button_voltar" >Cancelar e voltar</a>
                            </p>

                        </form>
                    </div>
                </td></tr>
        </table>
    </center>
    </body>        
</html>

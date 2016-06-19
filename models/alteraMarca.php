<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
    <style type="text/css">
        @import '../config/style.css';
    </style>
    <head>
        
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
                       <a href="../views/listaLocacoes.php">Histórico</a>
                   </div>
               </li>
           </div>
       </ul>
<center>
    <table align=‘center'>
        <center>
            <h1>Alterar Marca</h1>
        </center>
        <tr><td align='center'>
                <div id="quatro">
                    
                    <?php
                        
                        $cod = $_GET['cod'];
                        require("../controller/conecta.inc");
                        conecta_bd() or die("Não é possível conectar-se ao servidor.");
                        $resultado = mysql_query("Select * from marca where idMarca ='$cod'") or die("Não é possível retornar dados do funcionário!");
                        $linha = mysql_fetch_array($resultado);
                        $Codigo = $linha["idMarca"];
                        $nomeMarca = $linha["nomeMarca"];
                        print("<h3>Alterar dados de categoria:</h3><p>");
                    ?> 
                    <form action="confirmaMarca.php"method="get">

                        <input type="hidden" name="cod_alter" value="<?php print($Codigo)?>">
                        <label for="fname">Categoria Veículo</label>
                        <input type="text" name="nomeMarca_alter" value="<?php print ($nomeMarca) ?>">
                        <p><input type="submit" value="Alterar Dados">
                    </form>
                    <p><a href="..\locadoraVeiculos\index.php" class="button_voltar">Cancelar e voltar</a>
                        </form>
                </div>
            </td></tr>
    </table>
</center>
</html>

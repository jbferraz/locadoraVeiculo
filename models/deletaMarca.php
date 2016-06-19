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
                       <a href="../views/listaMarcaDisp.php">Listar Marcas</a>
                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Categoria</a>
                   <div class="dropdown-content">
                       <a href="../models/CatVeiculo.php">Inserir Categoria</a>
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
                
                <h1>Deleta Veículo</h1>
            
                <table align=‘center'>
                    <tr><td align='center'>
                            <div id="quatro"> 
                                <?php
                                $cod = $_GET['cod'];
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $result = mysql_query("Select * from marca where idMarca ='$cod'") or die("Não é possível retornar dados do funcionário!");
                                $linha = mysql_fetch_array($result);
                                $idMarca = $linha['idMarca'];
                                $marca = $linha['nomeMarca'];
                                print("<h3>Deletando:</h3><p>");
                                print("<b>Marca:</b> $marca<br>");
                                ?>
                                <form action="confirmaDelMarca.php" method="get">
                                    <input type="hidden" name="cod_del" value="<?php print($idMarca) ?>">
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


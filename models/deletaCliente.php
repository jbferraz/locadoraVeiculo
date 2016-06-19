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
                       <a href="../views/listaVeicDisp.php">Listar Veículos</a>

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
                <center>
                <h1>Deleta Veículo</h1>
            </center>
                <table align=‘center'>
                    <tr><td align='center'>
                            <div id="quatro"> 
                                <?php
                                $cod = $_GET['cod'];
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $result = mysql_query("Select * from cliente where idCliente ='$cod'") or die("Não é possível retornar dados do funcionário!");
                                $linha = mysql_fetch_array($result);
                                
                                $nomeCliente = $linha['nomeCliente'];
                                $cpf = $linha['CPF'];
                                $telefone = $linha['telefone'];
                                $celular = $linha['celular'];
                                $endereco = $linha['endereco'];
                                $email = $linha['email'];
                                $dataNascimento = $linha['dataNascimento'];
                                $sexo = $linha['sexo'];


                                print("<h3>Deletando o Cliente:</h3><p>");
                                print("<b>Nome:</b>  $nomeCliente<br>");
                                print("<b> Cpf:</b> $cpf<br>");
                                ?>
                                <form action="confirmaDelCliente.php" method="get">
                                    <input type="hidden" name="cod_del" value="<?php print($cpf) ?>">
                                    <br><input type="submit" value="Deletar Dados">
                                </form>
                            <p>
                        <a href="../views/listaClientes.php" class="button_voltar" >Cancelar e voltar</a>
                        </p>
                        </div>
                 </td></tr>
             </table>
        </center>
        </body>        
</html>



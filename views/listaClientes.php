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
            <title>Clientes</title>
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    </head>
    <body>
        <ul>
           <li><a class="active" href="listaVeicDisp.php">Veículos Disponíveis</a></li>

           <div class="dropdown">
               <li><a class="dropbtn">Cliente</a>
                   <div class="dropdown-content">
                       <a href="../models/insereCliente.php">Inserir Cliente</a>
                       <a href="listaClientes.php">Listar Clientes</a>
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
                    <h1>Clientes</h1>
                </center>
                <tr><td align='center'>
                        <div id="quatro"> 
                            <form>
                                <?php
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $resultado = mysql_query("Select * from cliente where cliAtivo=1 order by nomeCliente") or die("Não é possível consultar veículos disponiveis.");
                                print("<table border='1' bordercolor='blue'>");
                                print("<tr><td><b>Código</td>");
                                print("<td><b>Nome</td>");
                                print("<td><b>Cpf</td>");
                                print("<td><b>Sexo</td>");
                                print("<td><b>Data Nasc.</td>");
                                print("<td><b>Telefone</td>");
                                print("<td><b>Celular</td>");
                                print("<td><b>Endereço</td>");
                                print("<td><b>E-mail</td>");
                                print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
                                while ($linha = mysql_fetch_array($resultado)) {
                                    $Codigo = $linha["idCliente"];
                                    $nomeCliente = $linha['nomeCliente'];
                                    $cpf = $linha['CPF'];
                                    $telefone = $linha['telefone'];
                                    $celular = $linha['celular'];
                                    $endereco = $linha['endereco'];
                                    $email = $linha['email'];
                                    $dataNascimento = $linha['dataNascimento'];
                                    $sexo = $linha['sexo'];
                                    print("<tr><td align='center'>$Codigo</td>");
                                    print("<td>$nomeCliente</td>");
                                    print("<td>$cpf</td>");
                                    print("<td>$sexo</td>");
                                    print("<td>$dataNascimento</td>");
                                    print("<td>$telefone</td>");
                                    print("<td>$celular</td>");
                                    print("<td>$endereco</td>");
                                    print("<td>$email</td>");
                                    print("<td><a href='../models/deletaCliente.php?cod=$Codigo'>Deletar</a></td>"); //Refatorar Deletar
                                    echo("<td><a href='../models/alteraCliente.php?cod=$Codigo'>Alterar</a></td></tr>");
                                }
                                print("</table></center>");
                                ?>
                                
                            </form>
                        </div>
                    </td></tr>
            </table>

    </body>
</html>
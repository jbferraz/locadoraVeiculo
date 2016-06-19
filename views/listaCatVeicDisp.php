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
            <title>Categorias de Veículos</title>
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
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
                       <a href="../models/insereCatVeiculo.php">Inserir Categoria</a>
                       <a href="../views/listaCatVeicDisp.php">Listar Categorias</a>
                   </div>
               </li>
           </div>
       </ul>
        <center>
            <table align=‘center'>
                <center>
                    <h1>Categorias de Veículos</h1>
                </center>
                <tr><td align='center'>
                        <div id="quatro"> 
                            <form>
                                <?php
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $resultado = mysql_query("Select * from categoriaveiculo order by descCatVeiculo") or die("Não é possível consultar categoria de veículos.");
                                print("<table border='1' bordercolor='blue'>");
                                print("<tr><td><b>Código</td>");
                                print("<td><b>Descrição Categoria</td>");
                                print("<td><b>Deletar</td><td><b>Alterar</td></tr>");
                                while ($linha = mysql_fetch_array($resultado)) {
                                    $Codigo = $linha["idCatVeiculo"];
                                    $descCatVeiculo = $linha["descCatVeiculo"];
                                    print("<tr><td align='center'>$Codigo</td>");
                                    print("<td>$descCatVeiculo</td>");
                                    print("<td><a href='../models/deletarCatVeiculo.php?cod=$Codigo'>Deletar</a></td>"); //Refatorar Deletar
                                    print("<td><a href='../models/alteraCatVeiculo.php?cod=$Codigo'>Alterar</a></td></tr>"); //Refatorar Alterar
                                }
                                print("</table></center>");
                                ?>
                                <p><a href="../models/insereCatVeiculo.php" class="button_voltar" >Inserir</a></p>
                                <p><a href="../index.php" class="button_voltar" >Voltar</a></p>
                            </form>
                        </div>
                    </td></tr>
            </table>

    </body>
</html>
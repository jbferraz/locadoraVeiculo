<?php
session_start();
?>

<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <style type="text/css">
            @import 'config/style.css';
        </style>
        <script type="text/javascript">

            window.onload = function () {
                document.getElementById("categoria").onchange = function () {
                    this.parentNode.action = this.value + ".php";
                }
            }
        </script>
        

        <title>Locadora de Veículos</title>
        <meta charset="UTF-8" http-equiv="Content-Type" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    </head>

    <body>
        <ul>
           <li><a class="active" href="../locadoraVeiculo/views/listaVeicDisp.php">Veículos disponíveis</a></li>

           <div class="dropdown">
               <li><a class="dropbtn">Cliente</a>
                   <div class="dropdown-content">
                       <a href="../locadoraVeiculo/models/insereCliente.php">Inserir Cliente</a>
                       <a href="../locadoraVeiculo/views/listaClientes.php">Listar Clientes</a>
                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Veículo</a>
                   <div class="dropdown-content">
                       <a href="../locadoraVeiculo/models/insereVeiculo.php">Inserir Veículo</a>
                       <a href="../locadoraVeiculo/views/listaVeicDisp.php">Listar Veículos</a>

                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Marca</a>
                   <div class="dropdown-content">
                       <a href="../locadoraVeiculo/models/insereMarca.php">Inserir Marca</a>
                       <a href="../locadoraVeiculo/views/listaMarcaDisp.php">Listar Marcas</a>
                   </div>
               </li>
           </div>
           <div class="dropdown">
               <li><a class="dropbtn">Categoria</a>
                   <div class="dropdown-content">
                       <a href="../locadoraVeiculo/models/insereCatVeiculo.php">Inserir Categoria</a>
                       <a href="../locadoraVeiculo/views/listaCatVeicDisp.php">Listar Categorias</a>
                   </div>
               </li>
           </div>
       </ul>
        
        <div id="corpo">
            <div id="topo">
                <h1>
                    .: Locadora de Veículos :.<p>
                        <script language="JavaScript">
                            var d = new Date();
                            document.write("Bem vindo!!! - " + d.toLocaleString());
                        </script>
                </h1>
            </div>
        </div>
    </body>
</html>
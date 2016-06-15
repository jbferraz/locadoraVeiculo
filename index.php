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
            <div id="conteudo">
                <a href="views/listaVeicDisp.php" class="button_voltar">Mostrar Veículos Disponiveis</a>
            </div>

        </div>
    </body>
</html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <meta http-equiv="refresh" content="0 ;../views/listaCatVeicDisp.php">
        <title>Confirma Categoria</title>
        <head>
            
        </head>
        <body>
            <center>
                <h1>Categoria Atualizada</h1>
                <table align=‘center'>
                    <tr><td align='center'>
                            <div id="quatro"> 
                                <?php
                                $cod = $_GET['cod_alter'];
                                $categoriaveiculo_alter = $_GET["categoria_alter"];
                                //falta verificar se campos estão preenchidos
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                print("Alteração de categoria realizada:<p>");
                                print("Cód: $cod <b>Categoria: $categoriaveiculo_alter</b> <p>");
                                mysql_query("UPDATE categoriaveiculo SET descCatveiculo='$categoriaveiculo_alter'where idCatVeiculo='$cod'") or die("Não é possível alterar dados de categoria!");
                                print("Dados alterados com sucesso!");
                                ?>
                            </div>
                        </td></tr>
                </table>
            </center>
        </body>        

</html>


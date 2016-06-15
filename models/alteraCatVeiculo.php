<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
    <style type="text/css">
        @import '../config/style.css';
    </style>
    <head>
        
    </head>
<body>
<center>
    <table align=‘center'>
        <center>
            <h1>Alterar Categorica Veículo</h1>
        </center>
        <tr><td align='center'>
                <div id="quatro">
                    <?php
                        $cod = $_GET['cod'];
                        require("../controller/conecta.inc");
                        conecta_bd() or die("Não é possível conectar-se ao servidor.");
                        $resultado = mysql_query("Select * from categoriaveiculo where idCatVeiculo ='$cod'") or die("Não é possível retornar dados do funcionário!");
                        $linha = mysql_fetch_array($resultado);
                        $Codigo = $linha["idCatVeiculo"];
                        $descCatVeiculo = $linha["descCatVeiculo"];
                        print("<h3>Alterar dados de categoria:</h3><p>");
                    ?> 
                    <form action="confirmaCatVeic.php"method="post">

                        <input type="hidden" name="cod_alter" value="<?php print($Codigo)?>">
                        <label for="fname">Categoria Veículo</label>
                        <input type="text" name="descCatVeiculo_alter" value="<?php print ($descCatVeiculo) ?>">
                        <p><input type="submit" value="Alterar Dados">
                    </form>
                    <p><a href="mostraf.php">Cancelar e voltar</a>
                        </form>
                </div>
            </td></tr>
    </table>
</center>
</html>

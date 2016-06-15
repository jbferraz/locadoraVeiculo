<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
    <style type="text/css">
        @import '../config/style.css';
    </style>
    <head>
        <center>
            <h1>Alterar Veículo</h1>
        </center>
    </head>
<body>
<center>
    <table align=‘center'>
        <tr><td align='center'>
                <div id="quatro">
                    <?php
                        $cod = $_GET['cod'];
                        require("../controller/conecta.inc");
                        conecta_bd() or die("Não é possível conectar-se ao servidor.");
                        $resultado1 = mysql_query("Select * from marca,veiculo,categoriaveiculo where veiculo.marca_idMarca=marca.idMarca AND veiculo.categoriaVeiculo_idCatVeiculo = categoriaveiculo.idCatVeiculo AND idVeiculo ='$cod'") or die("Não é possível retornar dados do funcionário!");
                        $linha = mysql_fetch_array($resultado1);
                        $Codigo = $linha["idVeiculo"];
                        $modelo = $linha["modelo"];
                        $categoriaveiculo = $linha["descCatVeiculo"];
                        $cor = $linha["cor"];
                        $ano = $linha["ano"];
                        $placa = $linha["placa"];
                        $idMarca = $linha["idMarca"];
                        $idCatVeiculo = $linha["idCatVeiculo"];
                        $nomeMarca = $linha["nomeMarca"];
                        $disponibilidade = $linha["disponivel"];
                        print("<h3>Alterar dados do veículo:</h3><p>");
                    ?>
                   
                    
                    <form action="confirmaVeic.php"method="get">

                        <input type="hidden" name="cod_alter" value="<?php print($Codigo)?>">
                        <label for="fname">Modelo</label>
                        <input type="text" name="modelo_alter" value="<?php print ($modelo) ?>">
                        <label for="fname">Cor</label>
                        <input type="text" name="cor_alter" value="<?php print ($cor) ?>">
                        <label for="fname">Ano</label>
                        <input type="text" name="ano_alter" value="<?php print ($ano) ?>">
                        <br>Categoria: <select name="categoria_alter">
                            <option value="<?php print("$idCatVeiculo"); ?>" selected><?php print("$categoriaveiculo"); ?></option> <!-- exibe o departamento atual do funcionário -->
                            <?php
                            $resultado3 = mysql_query("Select * from categoriaveiculo where idCatVeiculo <>'$idCatVeiculo' order by descCatVeiculo") or die("Não é possível consultar departamentos.");
                            while ($linha = mysql_fetch_array($resultado3)) {
                                $idCatVeiculo = $linha["idCatVeiculo"];
                                $descCatVeiculo = $linha["descCatVeiculo"];
                                print("<option value='$idCatVeiculo'>$descCatVeiculo</option>");
                            }
                            ?>
                        </select>
                        <br>Marca: <select name="marca_alter">
                            <option value="<?php print("$idMarca"); ?>" selected><?php print("$nomeMarca"); ?></option> <!-- exibe o departamento atual do funcionário -->
                            <?php
                            $resultado2 = mysql_query("Select * from marca where idMarca <>'$idMarca' order by nomeMarca") or die("Não é possível consultar departamentos.");

                            while ($linha = mysql_fetch_array($resultado2)) {
                                $CodigoD = $linha["idMarca"];
                                $NomeD = $linha["nomeMarca"];
                                print("<option value='$CodigoD'>$NomeD</option>");
                            }
                            ?>
                        </select>
                        <label for="fname">Placa</label>
                        <input type="text" name="placa_alter" value="<?php print ($placa) ?>">
                        <p><input type="submit" value="Alterar Dados">
                    </form>
                    <p><a href="mostraf.php">Cancelar e voltar</a>
                        </form>
                </div>
            </td></tr>
    </table>
</center>
</html>

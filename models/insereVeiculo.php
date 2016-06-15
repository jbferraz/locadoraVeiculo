<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
    <style type="text/css">
        @import '../config/style.css';
    </style>
    <head>
        <center>
            <h1>Cadastrar Veículo</h1>
        </center>
    </head>
<body>
<center>
    <table align=‘center'>
        <tr><td align='center'>
                <div id="quatro"> 
                    <form action="veiculoInserido.php">
                        <label for="categoria">Categoria</label>
                        <select name="categoriaveiculo">
                            <?php
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $result = mysql_query("Select * from categoriaveiculo order by descCatVeiculo") or die("Não é possível consultar marca.");
                                while ($linha = \mysql_fetch_array($result)) {
                                    $idCatVeiculoD = $linha["idCatVeiculo"];
                                    $descCatVeiculoD = $linha["descCatVeiculo"];
                                    print("<option value='$idCatVeiculoD'>$descCatVeiculoD</option>");
                                }
                            ?>
                        </select>
                        <label for="marca">Marca</label>
                        <select name="marca">
                            <?php
                           
                            $resultado = mysql_query("Select * from marca order by nomeMarca") or die("Não é possível consultar marca.");
                            while ($linha = \mysql_fetch_array($resultado)) {
                                $CodigoD = $linha["idMarca"];
                                $NomeD = $linha["nomeMarca"];
                                print("<option value='$CodigoD'>$NomeD</option>");
                            }
                            ?>
                        </select>
                        <label for="fname">Modelo</label>
                        <input type="text" name="modelo">
                        <label for="lname">Cor</label>
                        <input type="text" name="cor">
                        <label for="lname">Ano</label>
                        <input type="text" name="ano" placeholder="aaaa">
                        <label for="lname">Portas</label>
                        <input type="text" name="portas">
                        <label for="lname">Opcionais</label>
                        <input type="text" name="opcionais">
                        <label for="lname">Placa</label>
                        <input type="text" name="placa">
                        <label for="disponibilidade">Disponibilidade</label>
                        <select id="disponibilidade" name="disponibilidade">
                            <option value= '0'>Não</option>
                            <option value='1'>Sim</option>
                        </select>

                        <input type="submit" value="Inserir Veículo" >
                        <p>
                        <a href="../views/listaVeicDisp.php" class="button_voltar" >Voltar</a>
                        </p>

                    </form>
                </div>
            </td></tr>
    </table>
</center>
</body>        



</html>

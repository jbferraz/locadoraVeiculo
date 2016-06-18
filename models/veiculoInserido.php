<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Veículo cadastrado</title>
            <meta http-equiv="refresh" content="0 ;../views/listaVeicDisp.php"/>
    </head>
    <body>
        <?php
        $modelo = $_GET['modelo'];
        $categoriaveiculo = $_GET ['categoriaveiculo'];
        $cor = $_GET['cor'];
        $ano = $_GET['ano'];
        $opcionais = $_GET['opcionais'];
        $portas = $_GET['portas'];
        $placa = $_GET['placa'];
        $marca = $_GET['marca'];
        $disponibilidade = $_GET['disponibilidade'];
        if ($modelo == '' or $marca == ''){
            print('<script type="text/javascript">alert("Faltou preencher algum campo")</script>');
        }
        else {
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");

            mysql_query("insert into veiculo (marca_idMarca,categoriaVeiculo_idCatVeiculo, modelo, cor, ano, opcionais, portas, placa, disponivel) values ('$marca','$categoriaveiculo','$modelo','$cor','$ano','$opcionais','$portas','$placa','$disponibilidade')")
                    or die('<script type="text/javascript">alert("Não é possível inserir o veículo!")</script>');

            print('<script type="text/javascript">alert("Veículo inserido com sucesso: $placa")</script>');
        }
        ?>
        <p><a href="inserirVeiculo.php">Voltar</a></p>
        <p><a href="../views/listaVeicDisp.php">Mostrar</a></p>
    </body>
</html>
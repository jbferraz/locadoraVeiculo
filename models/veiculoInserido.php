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
            <title>Veículos Disponiveis</title>
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
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
        if ($modelo == '' or $marca == '')
            print("Faltou preencher algum campo...");
        else {
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");
            print("Inserindo o Carro:<p>");
            mysql_query("insert into veiculo (marca_idMarca,categoriaVeiculo_idCatVeiculo, modelo, cor, ano, opcionais, portas, placa, disponivel) values ('$marca','$categoriaveiculo','$modelo','$cor','$ano','$opcionais','$portas','$placa','$disponibilidade')")
                    or die("Não é possível inserir funcionário!");
            print("Veículo inserido com sucesso: $placa");
        }
        ?>
        <p><a href="inserirVeiculo.php">Voltar</a>
            <p><a href="../views/listaVeicDisp.php">Mostrar</a>/<p>
                </p>      
    </body>
</html>
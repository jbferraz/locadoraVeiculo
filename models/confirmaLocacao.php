<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Locação concluída</title>
            <meta http-equiv="refresh" content="0;../views/listaVeicDisp.php"/>
    </head>
    <body>
        <?php
        $Codigo = $_GET['idVeiculo'];
        
        $dataRetirada = $_GET['dataRetirada'];
        $dataDevolucao = $_GET['dataDevolucao'];
        $kmLivre = $_GET['kmLivre'];
        $KmRetirada = $_GET['kmRetirada'];
       
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");

                mysql_query("INSERT INTO locacao(Cliente_idCliente, Veiculo_idVeiculo, dataRetirada, dataDevolucao, kmRetirada, kmLivre) VALUES ('$cliente','$Codigo','$dataRetirada','$dataDevolucao','$KmRetirada','$kmLivre')")
                    or die('<script type="text/javascript">alert("Não é possível inserir o veículo!")</script>');
                mysql_query("UPDATE veiculo SET disponivel='0'where idVeiculo='$Codigo'") or die("Não é possível alterar dados de categoria!");

            print('<script type="text/javascript">alert("Veículo inserido com sucesso: $placa")</script>');
        ?>
    </body>
</html>

<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Locação concluída</title>
            <meta http-equiv="refresh" content="0 ;../views/listaVeicDisp.php"/>
    </head>
    <body>
        <?php
        $Codigo = $_GET['idVeiculo'];
        $cliente = $_GET['idCliente'];
        $dataRetirada = $_GET['dataRetirada'];
        $dataDevolucao = $_GET['dataDevolucao'];
        $kmLivre = $_GET['kmLivre'];
        $KmRetirada = $_GET['kmRetirada'];
       
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");

                mysql_query("INSERT INTO locacao(Cliente_idCliente, Veiculo_idVeiculo, dataRetirada, dataDevolucao, kmRetirada, kmLivre,status) VALUES ('$cliente','$Codigo','$dataRetirada','$dataDevolucao','$KmRetirada','$kmLivre','1')")
                    or die('<script type="text/javascript">alert("Não é possível inserir o veículo!")</script>');
                mysql_query("UPDATE veiculo SET disponivel='0'where idVeiculo='$Codigo'") or die("Não é possível Locar!");

            print('<script type="text/javascript">alert("Veículo locado com sucesso!")</script>');
        ?>
    </body>
</html>

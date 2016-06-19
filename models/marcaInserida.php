<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import '../config/style.css';
            </style>
            <title>Marca Cadastrada</title>
            <meta http-equiv="refresh" content="0;../views/listaVeicDisp.php"/>
    </head>
    <body>
        <?php
        $marca = $_GET['nomeMarca'];

        if ($marca == '') {
            print('<script type="text/javascript">alert("Faltou preencher algum campo")</script>');
        } else {
            require("../controller/conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");
            mysql_query("INSERT INTO marca(nomeMarca) SELECT '$marca'FROM DUAL WHERE NOT EXISTS(SELECT nomeMarca FROM marca WHERE nomeMarca = '$marca') ")
                    or die('<script type="text/javascript">alert("Não é possível inserir Marca!")</script>');

        print('<script type="text/javascript">alert("Marca inserida com sucesso!")</script>');
        }
            
             
        
               
        
        ?>

        
    </body>
</html>
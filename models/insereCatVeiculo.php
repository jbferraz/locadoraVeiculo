<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type"/>
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <title>Cadastrar Categoria Veículo</title>
    </head>
    <body>
    <center>
        <table align=‘center'>
            <center>
                <h1>Cadastrar Categoria Veículo</h1>
            </center>
            <tr><td align='center'>
                    <div id="quatro"> 
                        <form action="catVeiculoInserido.php" method="post">
                            <label for="categoria">Categoria</label>
                            <input type="text" name="descCatVeiculo">
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

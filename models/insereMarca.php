<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type"/>
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <title>Cadastrar Marca Veículo</title>
    </head>
    <body>
        <ul>
            <li><a class="active" href="../views/listaVeicDisp.php">Veículos disponíveis</a></li>

            <div class="dropdown">
                <li><a class="dropbtn">Cliente</a>
                    <div class="dropdown-content">
                        <a href="../models/insereCliente.php">Inserir Cliente</a>
                        <a href="../views/listaClientes.php">Listar Clientes</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Veículo</a>
                    <div class="dropdown-content">
                        <a href="../models/insereVeiculo.php">Inserir Veículo</a>
                        <a href="../views/listaVeiculos.php">Listar Veículos</a>

                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Marca</a>
                    <div class="dropdown-content">
                        <a href="insereMarca.php">Inserir Marca</a>
                        <a href="../views/listaMarcaDisp.php">Listar Marcas</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Categoria</a>
                    <div class="dropdown-content">
                        <a href="../models/insereCatVeiculo.php">Inserir Categoria</a>
                        <a href="../views/listaCatVeicDisp.php">Listar Categorias</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Locação</a>
                    <div class="dropdown-content">
                        <a href="../views/listaVeicDisp.php">Locar Veículo</a>
                        <a href="../views/listaLocAbertas.php">Locações Abertas</a>
                        <a href="../views/listaLocacoes.php">Histórico</a>
                    </div>
                </li>
            </div>
        </ul>
        <center>
            <table align=‘center'>
                <center>
                    <h1>Cadastrar Marca Veículo</h1>
                </center>
                <tr><td align='center'>
                        <div id="quatro"> 
                            <form action="marcaInserida.php" method="get">
                                <label for="marca">Marca</label>
                                <input type="text" name="nomeMarca">
                                    <input type="submit" value="Inserir Marca" >
                                        </form>
                                        <p>
                                            <a href="../views/listaMarcaDisp.php" class="button_voltar" >Cancelar e voltar</a>
                                        </p>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </body>        
</html>

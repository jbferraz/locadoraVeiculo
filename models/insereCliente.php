<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type"/>
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <title>Cadastro de Clientes</title>
    </head>
    <body>
         <ul>
            <li><a class="active" href="../views/listaVeicDisp.php">Veículos disponíveis</a></li>

            <div class="dropdown">
                <li><a class="dropbtn">Cliente</a>
                    <div class="dropdown-content">
                        <a href="insereCliente.php">Inserir Cliente</a>
                        <a href="../views/listaClientes.php">Listar Clientes</a>
                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Veículo</a>
                    <div class="dropdown-content">
                        <a href="../models/insereVeiculo.php">Inserir Veículo</a>
                        <a href="../views/listaVeicDisp.php">Listar Veículos</a>

                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li><a class="dropbtn">Marca</a>
                    <div class="dropdown-content">
                        <a href="../models/insereMarca.php">Inserir Marca</a>
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
        </ul>
    <center>
        <table align=‘center'>
            <center>
                <h1>Cadastrar Cliente</h1>
            </center>
            <tr><td align='center'>
                    <div id="quatro"> 
                        <form action="clienteInserido.php">
                            <label for="fname">Nome:</label>
                                <input type="text" name="nome">
                            <label for="lname">Telefone:</label>
                                <input type="text" name="telefone">
                            <label for="lname">Celular:</label>
                                <input type="text" name="celular">
                            <label for="lname">Cpf:</label>
                                <input type="text" name="CPF">
                            <label for="lname">Endereço:</label>
                                <input type="text" name="endereco">
                            <label for="lname">Data Nasc:</label>
                                <input type="text" name="dataNacimento" placeholder="dd-mm-aaaa">
                            <label for="lname">E-mail:</label>
                                <input type="text" name="email">
                            <label for="sexo">Sexo:</label>
                            <select id="sexo" name="sexo">
                                <option value= 'feminino'>Feminino</option>
                                <option value='masculino'>Masculino</option>
                                <option value='outros'>Outros</option>
                            </select>

                            <input type="submit" value="Inserir Cliente" >
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


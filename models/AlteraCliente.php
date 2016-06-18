<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <head>

        </head>
        <body>
            <ul>
                <li><a class="active" href="../views/listaVeicDisp.php">Veículos disponíveis</a></li>

                <div class="dropdown">
                    <li><a class="dropbtn">Cliente</a>
                        <div class="dropdown-content">
                            <a href="../models/insereCliente.php">Inserir Cliente</a>
                            <a href="../views/listaCliente.php">Listar Clientes</a>
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
                        <h1>Alterar Cadastro do Cliente</h1>
                    </center>
                    <tr><td align='center'>
                            <div id="quatro">

                                <?php
                                $cod = $_GET['cod'];
                                require("../controller/conecta.inc");
                                conecta_bd() or die("Não é possível conectar-se ao servidor.");
                                $resultado = mysql_query("Select * from cliente where idCliente ='$cod'") or die("Não é possível retornar dados do funcionário!");
                                $linha = mysql_fetch_array($resultado);
                                $Codigo = $linha["idCliente"];
                                $nomeCliente = $linha['nomeCliente'];
                                $cpf = $linha['CPF'];
                                $telefone = $linha['telefone'];
                                $celular = $linha['celular'];
                                $endereco = $linha['endereco'];
                                $email = $linha['email'];
                                $dataNascimento = $linha['dataNascimento'];
                                $sexo = $linha['sexo'];
                                print("<h3>Alterar dados do Cliente:</h3><p>");
                                ?> 
                                <form action="confirmaCliente.php"method="get">

                                    <input type="hidden" name="cod_alter" value="<?php print($Codigo) ?>">
                                    <label for="fname">Cliente</label>
                                        <input type="text" name="nome_alter" value="<?php print ($nomeCliente) ?>">
                                    <label for="fname">Cpf</label>
                                        <input type="text" name="CPF_alter" value="<?php print ($cpf) ?>">
                                    <label for="fname">Telefone</label>
                                        <input type="text" name="telefone_alter" value="<?php print ($telefone) ?>">
                                    <label for="fname">Celular</label>
                                        <input type="text" name="celular_alter" value="<?php print ($celular) ?>">
                                    <label for="fname">Endereço</label>
                                        <input type="text" name="endereco_alter" value="<?php print ($endereco) ?>">
                                    <label for="fname">E-mail</label>
                                        <input type="text" name="email_alter" value="<?php print ($email) ?>">
                                    <label for="fname">Data de Nasc.</label>
                                        <input type="date" name="dataNascimento_alter" value="<?php print ($dataNascimento) ?>">
                                    <label for="sexo">Sexo:</label>
                                    <select id="sexo" name="sexo_alter"value="<?php print ($sexo) ?>">

                                        <option value= 'feminino'>Feminino</option>
                                        <option value='masculino'>Masculino</option>
                                        <option value='outros'>Outros</option>
                                    </select>
                                   
                                    <p><input type="submit" value="Alterar Dados">
                                    
                                </form>
                            <p><a href="mostraf.php">Cancelar e voltar</a>
                        </form>
                    </div>
                </td></tr>
            </table>
        </center>
    </html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type"/>
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="./js/jquery.maskedinput-1.3.1.min.js"></script>

        <style type="text/css">

            @import '../config/style.css';
        </style>

        <title>Cadastro de Clientes</title>

    </head>
    <body>
        <script type="text/javascript">
            jQuery(function ($) {
                $.mask.definitions['~'] = '[+-]';
                //Inicio Mascara Telefone
                $('#tel').mask("(99) 9999-9999?9").ready(function (event) {
                    var target, phone, element;
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                    phone = target.value.replace(/\D/g, '');
                    element = $(target);
                    element.unmask();
                    if (phone.length > 10) {
                        element.mask("(99) 99999-999?9");
                    } else {
                        element.mask("(99) 9999-9999?9");
                    }
                });
                $('#cel').mask("(99) 9999-9999?9").ready(function (event) {
                    var target, phone, element;
                    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                    phone = target.value.replace(/\D/g, '');
                    element = $(target);
                    element.unmask();
                    if (phone.length > 10) {
                        element.mask("(99) 99999-999?9");
                    } else {
                        element.mask("(99) 9999-9999?9");
                    }
                });
                //Fim Mascara Telefone
                $("#cpf").mask("999.999.999-99");
            });

        </script>
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
            <div class="dropdown">
               <li><a class="dropbtn">Locação</a>
                   <div class="dropdown-content">
                       <a href="../models/insereLocacao.php">Inserir Locação</a>
                       <a href="../models/devolveVeicLocado.php">Devolve Veículo</a>
                       <a href="../views/listaLocAbertas.php">Locações Aberta</a>
                       <a href="../views/listaLocacoes.php">Listar Locações</a>
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
                                <input type="text" name="nome_alter" value="<?php print ($nomeCliente) ?>"required>
                                <label for="fname">Cpf</label>
                                <input type="text" name="CPF_alter" id="cpf"value="<?php print ($cpf) ?>"required>
                                <label for="fname">Telefone</label>
                                <input type="text" name="telefone_alter" id="tel" value="<?php print ($telefone) ?>"required>
                                <label for="fname">Celular</label>
                                <input type="text" name="celular_alter" id="cel"value="<?php print ($celular) ?>"required>
                                <label for="fname">Endereço</label>
                                <input type="text" name="endereco_alter" value="<?php print ($endereco) ?>"required>
                                <label for="fname">E-mail</label>
                                <input type="text" name="email_alter" value="<?php print ($email) ?>"required>
                                <label for="fname">Data de Nasc.</label>
                                <input type="date" name="dataNascimento_alter" value="<?php print ($dataNascimento) ?>"required>
                                <label for="sexo">Sexo:</label>
                                <select id="sexo" name="sexo_alter"value="<?php print ($sexo) ?>"required>
                                    <option value= 'feminino'>Feminino</option>
                                    <option value='masculino'>Masculino</option>
                                    <option value='outros'>Outros</option>
                                </select>
                                <p><input type="submit" value="Alterar Dados">
                            </form>
                                <p><a href="mostraf.php">Cancelar e voltar</a>
                        </div>
                </td></tr>
            </table>
        </center>
    </body>
</html>


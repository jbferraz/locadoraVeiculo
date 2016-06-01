<?php
session_start();
?>

<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
        <meta charset="UTF-8" http-equiv="Content-Type">
            <style type="text/css">
                @import 'config/style.css';
            </style>
            <script type="text/javascript">

                window.onload = function () {
                    document.getElementById("categoria").onchange = function () {
                        this.parentNode.action = this.value + ".php";
                    }
                }
            </script>
            <title>Locadora de Veículos</title>
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
    </head>

    <body>
        <div id="corpo">
            <div id="topo">
                <h1>
                    .: Locadora de Veículos :.<p>
                        <script language="JavaScript">
                            var d = new Date();
                            document.write("Bem vindo!!! - " + d.toLocaleString());
                        </script>
                </h1>
            </div>

            <form action="" name="formPesquisa" id="formPesquisa" method="post">

                <input type="text" class="campo" name="nome" id="nome" placeholder="Procure por um tipo de etiqueta" required>

                    <select class="campo" id="categoria" name="categoria" required>
                        <option value="" disabled selected="" >Escolha uma categoria de busca</option>
                        <option value="action/buscado_altura">Altura</option>
                        <option value="action/buscado_largura">Largura</option>
                        <option value="action/buscado_fabricante">Fabricante/Marca</option>
                        <option value="action/buscado_nome">Modelo/Nome</option>
                        <option value="action/buscado_tipopapel">Tipo do Papel</option>
                    </select>
                    <br><br>
                            <input name="acoes" id="acoes"  type="submit" class="botao_pes" value="Pesquisar" title="Irá pesquisar todos os tipos de etiquetas que você selecionou acima."><br><br><br>

                                            <?php
                                            if (!isset($_SESSION['id'])) {
                                                ?>
                                                | <a href="visao/login.php" class="jujuba">Efetuar login</a> |
                                                <a href="visao/verTodasEtiquetas.php" class="jujuba">Visualizar etiquetas</a> |
                                                <?php
                                            } else {
                                                ?>
                                                | <a href="sair.php" class="jujuba">Sair</a> |
                                                <a href="visao/cadUsuario.php" class="jujuba">Cadastrar usuario</a> |
                                                <a href="visao/cadFabricanteEtiqueta.php" class="jujuba">Cadastrar Fabricante/Etiqueta</a> |
                                                <a href="visao/verTodasEtiquetas.php" class="jujuba">Visualizar etiquetas</a> |
                                                <?php
                                            }
                                            ?>	
                                            </form>
                                            </div>
                                            </body>
                                            </html>
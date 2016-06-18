<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta charset="UTF-8" http-equiv="Content-Type">
        <style type="text/css">
            @import '../config/style.css';
        </style>
        <meta http-equiv="refresh" content="0 ;../views/listaClientes.php">
        <title>Confirma Cliente</title>
        <head>
            
        </head>
        <body>
            <center>
                <h1>Cliente Atualizado</h1>
                <table align=‘center'>
                    <tr><td align='center'>
                            <div id="quatro"> 
                                <?php
                                    $cod = $_GET['cod_alter'];
                                    $nomeCliente_alter = $_GET['nome_alter'];
                                    $cpf_alter = $_GET['CPF_alter'];
                                    $telefone_alter = $_GET['telefone_alter'];
                                    $celular_alter = $_GET['celular_alter'];
                                    $endereco_alter = $_GET['endereco_alter'];
                                    $email_alter = $_GET['email_alter'];
                                    $dataNascimento_alter = $_GET['dataNascimento_alter'];
                                    $sexo_alter = $_GET['sexo_alter'];


                                    //falta verificar se campos estão preenchidos
                                    require("../controller/conecta.inc");
                                    conecta_bd() or die('<script type="text/javascript">alert("Não é possível conectar-se ao servidor.")</script>');
                                    print("$nomeCliente_alter <p>");
                                    mysql_query("UPDATE cliente SET nomeCliente='$nomeCliente_alter',CPF='$cpf_alter',telefone='$telefone_alter',celular='$celular_alter', endereco='$endereco_alter',email='$email_alter',dataNascimento='$dataNascimento_alter',sexo='$sexo_alter' where idCliente='20'") or die('<script type="text/javascript">alert("Não é possível alterar o cliente! ")</script>');
                                    print('<script type="text/javascript">alert("Cliente alterado com sucesso! ")</script>')
                                   
                                ?>
                            </div>
                        </td></tr>
                </table>
            </center>
        </body>        

</html>


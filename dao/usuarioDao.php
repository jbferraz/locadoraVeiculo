<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioDao
 *
 * @author 631410170
 */
class usuarioDao {

    public function cadastrarUsuario($usuario) {

        global $con;

        try {

            $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
            $resultado = mysqli_query($con, "SELECT idUsuario FROM users WHERE usuario = '$usuario'");
            $num_rows = mysqli_num_rows($resultado);

             if ($num_rows > 0) {
                ?>
                <html>
                    <meta charset="UTF-8">
                     <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
                    <style type="text/css">@import "../css/estilo.css";</style>
                    <body>
                        <br><br>
                        <h3><img src="../img/ico/cross.ico"> Usuario <?php echo $usuario; ?> já cadastrado.</h3>
                        <h3>Página será redirecionado automaticamente dentro de 3 segundos.</h3>
                        <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../visao/cadUsuario.php">  
                    </body>
                </html>
                <?php
            } else {

            $sql = $con->prepare("INSERT INTO usuario(nome, nomeUsuario, senha)"
                    . "VALUES (?,?)");
            $sql->bind_param('ss', $u->usuario, $usuario->senha);
            if ($sql->execute())
                
                ?>
            <!DOCTYPE html>
            <html>
                <head>
                    <title>Cadastro Efetuado com sucesso!</title>
                     <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
                    <style type="text/css">
                        @import "../css/estilo.css";
                    </style>
                </head>
                <body>
                    <h3>Usuario cadastrado com sucesso</h3>
                    <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=../index.php">
                </body>
            </html>

            <?php
        }
        } catch (Exception $e) {
            echo "ERRO: " . $e->getMessage();
            echo "ERRO2: " . $sql->error;
        }//fim catch
    }

//fim function cadastrarUsuario();

    public function validar($usuario) {

        global $con;

        //var_dump($user);

        try {

            $sql = $con->prepare("SELECT idUsuario, usuario FROM usuario WHERE usuario = ? AND senha = ?");
            $sql->bind_param('ss', $usuario->usuario, $senha->senha);
            if ($sql->execute()) {
                $sql->bind_result($idUsuario, $usuario);
                $sql->fetch();
            }//fecha if

            return $nome;
        } catch (Exception $e) {
            echo "ERRO" . $e->getMessage();
        }
    }

//fim metodo
}
?>
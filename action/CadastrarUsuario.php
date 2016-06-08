<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastrarUsuario
 *
 * @author 631410170
 */

	if (isset($_POST)) {
		# code...
	include "../includes/conecta.inc.php";
	include "../class/Usuario.class.php";
	include "../dao/usuarioDAO.php";


	$usuario = $_POST['usuario'];
        $nomeUsuario= $_POST['nomeUsuario'];
	$senha = $_POST['senha'];


	$usuario = new Usuario("",$usuario,$nomeUsuario, $senha);
	$acoes = new usuarioDAO();

	$acoes->cadastrarUsuario($usuario);

	}//fim

 ?>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class usuario {

    private $idUsuario;
    private $usuario;
    private $nomeUsuario;
    private $senha;
  

    function __construct($idUsuario = "", $usuario = "", $nomeUsuario = "", $senha = "") {
        $this->idUsuario = $idUsuario;
        $this->usuario = $usuario;
        $this->nomeUsuario = $nomeUsuario;
        $this->senha = $senha;
       
    }

    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }

    public function __toString() {
        return "ID: " . $this->idUsuario . "<br>Nome: " . $this->nomeUsuario . "<br>Usuário: " . $this->usuario
                . "<br>Senha: " . $this->senha;
    }

}

?>


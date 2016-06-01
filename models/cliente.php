<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author 631410170
 */
class cliente {
   private $idCliente;
    private $nomeCliente;
    private $cpf;
    private $endereco;
    private $celular;
    private $telefone;
    private $email;
    private $dataNascimento;
    private $sexo;
    

    function __construct($idCliente = "", $nomeCliente = "", $cpf = "", $endereco = "", $celular = "", $telefone = "", $email = "",
            $dataNascimento = "", $sexo = "") {
        $this->idCliente = $idCliente;
        $this->nomeCliente = $nomeCliente;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->celular = $celular;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->dataNascimento = $dataNascimento;
        $this->sexo = $sexo;
    }

    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }

    public function __toString() {
        return "ID: " . $this->idCliente . "<br>Nome: " . $this->nomeCliente . "<br>Cpf: " . $this->cpf 
                . "<br>Endereço: " . $this->endereco . "<br>Celular " . $this->celular . "<br>Telefone: " 
                . $this->telefone . "<br>Email: " . $this->email
                . "<br>Data de Nasc: " . $this->dataNascimento . "<br>Sexo: " . $this->sexo;
    }

}

?>

<?php

class veiculo {

    private $idVeiculo;
    private $categoriaVeiculo_idCategoriaVeiculo;
    private $marca_idMarca;
    private $modelo;
    private $ano;
    private $cor;
    private $portas;
    private $opcionais;
    private $placa;
    private $valorLivre;
    private $valorKm;
    private $disponivel;

    function __construct($idVeiculo = "", $categoriaVeiculo_idCategoriaVeiculo = "", $marca_idMarca = "", $modelo = "", $ano = "", $cor = "", $portas = "", $opcionais = "", $placa = "", $valorLivre = "", $valorKm = "", $disponivel = "") {
        $this->idVeiculo = $idVeiculo;
        $this->categoriaVeiculo_idCategoriaVeiculo = $categoriaVeiculo_idCategoriaVeiculo;
        $this->marca_idMarca = $marca_idMarca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->portas = $portas;
        $this->opcionais = $opcionais;
        $this->placa = $placa;
        $this->valorLivre = $valorLivre;
        $this->valorKm = $valorKm;
        $this->disponivel = $disponivel;
    }

    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }

}

?>

<?php

class categoriaVeiculo{
    private $idCatVeiculo;
    private $descCatVeiculo;
    
    function __construct($idCatVeiculo="",$descCatVeiculo=""){
        $this->idCatVeiculo=$idCatVeiculo;
        $this->descCatVeiculo=$descCatVeiculo;
    }
    
    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }
    
    public function __toString() {
        return "ID: " . $this->idCatVeiculo . "<br>Categoria Veiculo: " . $this->descCatVeiculo;
    }
    
}

?>
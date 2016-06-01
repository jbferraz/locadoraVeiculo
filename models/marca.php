<?php

class marca {
    
    private $idMarca;
    private $nomeMarca;
    
    function __construct($idMarca="",$nomeMarca=""){
        $this->idMarca=$idMarca;
        $this->nomeMarca=$nomeMarca;
    }
    
    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }
    
    public function __toString() {
        return "ID: " . $this->idMarca . "<br>Marca: " . $this->nomeMarca;
    }
}
?>
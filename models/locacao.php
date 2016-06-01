<?php

class locacao {
    
    private $idLocacao;
    private $Cliente_idCliente;
    private $Veiculo_idVeiculo;
    private $dataLocacao;
    private $dataRetirada;
    private $dataDevolucao;
    private $kmRetirada;
    private $kmDevolucao;
    private $kmLivre;
    
    function __construct($idLocacao="",$Cliente_idCliente="",$Veiculo_idVeiculo="",$dataLocacao="",$dataRetirada="",$dataDevolucao="",$kmRetirada="",$kmDevolucao="",$kmLivre=""){
        $this->idLocacao=$idLocacao;
        $this->Cliente_idCliente=$Cliente_idCliente;
        $this->Veiculo_idVeiculo=$Veiculo_idVeiculo;
        $this->dataLocacao=$dataLocacao;
        $this->dataRetirada=$dataRetirada;
        $this->dataDevolucao=$dataDevolucao;
        $this->kmRetirada=$kmRetirada;
        $this->kmDevolucao=$kmDevolucao;
        $this->kmLivre=$kmLivre;
    }
    
    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    function &__get($prop) {
        return $this->$prop;
    }
    
    public function __toString() {
        return "ID: " . $this->idLocacao . "<br>idCliente: " . $this->Cliente_idCliente . "<br>idVeiculo: " . $this->Veiculo_idVeiculo 
                . "<br>Data Locação: " . $this->dataLocacao . "<br>Data Retirada: " . $this->dataRetirada . "<br>Data Devolução: " . $this->dataDevolucao 
                . "<br>Km Retirada: " . $this->kmRetirada . "<br>Km Devolução: " . $this->kmDevolucao . "<br>KM Livre: " . $this->kmLivre;
    }
    
}

?>
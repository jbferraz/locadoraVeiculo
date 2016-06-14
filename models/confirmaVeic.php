
<?php
$cod=$_GET['cod_alter'];
$modelo_alter = $_GET["modelo_alter"];
$categoriaveiculo_alter = $_GET["categoria_alter"];
$cor_alter = $_GET["cor_alter"];
$nomeMarca_alter = $_GET["marca_alter"];
$ano_alter = $_GET["ano_alter"];
$placa_alter = $_GET["placa_alter"];


//falta verificar se campos estão preenchidos
require("../controller/conecta.inc");
conecta_bd() or die("Não é possível conectar-se ao servidor.");
print("Alteração do veículo realizada:<p>");
print("$cod <b>$modelo_alter</b> <p>");
mysql_query("UPDATE veiculo SET modelo='$modelo_alter',categoriaVeiculo_idCatVeiculo='$categoriaveiculo_alter',cor='$cor_alter',marca_idMarca='$nomeMarca_alter', ano='$ano_alter',placa='$placa_alter' where idVeiculo='$cod'") or die("Não é possível alterar dados do departamento!");
print("Dados alterados com sucesso!");
?>
}

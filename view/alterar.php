<?php
$titulo = "Alteração de Ordem";
include 'cabecalho.php';?>
<h1>Alterar Ordem</h1>
<?php
if ($_POST){
$p2 = new \App\Model\Aberta();
$p2->setId($_POST['id']);
$p2->setProblemaConstatado($_POST['problemaConstatado']);
$p2->setSolucao(\App\Helper\Moeda::set($_POST['solucao']));
!empty($_POST['valor']) ? $p2->setValor(\App\Helper\Moeda::set($_POST['valor'])) : $p2->setValor(null);
!empty($_POST['dataFechamento']) ? $p2->setDataFechamento(\App\Helper\Data::set($_POST['dataFechamento'])) : $p2->setDataFechamento(null);

$pDAO = new \App\DAO\AbertaDAO();
if($pDAO->alterar($p2))
header("Location: produto-pesquisar.php?msg=2");

}
?>
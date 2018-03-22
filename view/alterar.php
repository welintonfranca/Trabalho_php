<?php
$titulo = "Alteração de Ordem";
include 'cabecalho.php';?>
<h1>Alterar Ordem</h1>

<?php
include '../vendor/autoload.php';
//verificar se o usuario esta logado
$uDAO = new \App\DAO\UsuarioDAO();
$uDAO->verificar();

if ($_POST){
$p2 = new \App\Model\Aberta();
$p2->setId($_POST['id']);
$p2->setProblemaConstatado($_POST['problemaConstatado']);
$p2->setSolucao($_POST['solucao']);
!empty($_POST['valor']) ? $p2->setValor(\App\Helper\Moeda::set($_POST['valor'])) : $p2->setValor(null);
!empty($_POST['dataFechamento']) ? $p2->setDataFechamento(\App\Helper\Data::set($_POST['dataFechamento'])) : $p2->setDataFechamento(null);

$pDAO = new \App\DAO\AbertaDAO();
if($pDAO->alterar($p2))
header("Location: pesquisar.php?msg=2");

}
$p = new \App\Model\Aberta();
isset($_GET) ? $p->setId($_GET['id']) : $p->setId($_POST['id']);

$pDAO = new \App\DAO\AbertaDAO();
$resultado = $pDAO->visualizar($p);

?>


<form action="alterar.php" method="post">
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" id="id" name="id" class="form-control" value="<?php echo $resultado['id'];?>">
    </div>
    <div class="form-group">
        <label for="problemaConstatado"> Problema Constatado</label>
        <input type="text" id="problemaConstatado" name="problemaConstatado" required autofocus class="form-control" value="<?php echo $resultado['problemaConstatado'];?>">
    </div>
    <div class="form-group">
        <label for="solucao">Solução</label>
        <input type="text" id="solucao" name="solucao" required class="form-control" value="<?php echo $resultado['solucao'];?>">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" id="valor" name="valor" class="form-control" value="<?php echo \App\Helper\Moeda::get( $resultado['valor']);?>">
    </div>
    <div class="form-group">
        <label for="dataFechamento">Data de Fechamento</label>
        <input type="date" id="dataFechamento" name="dataFechamento" class="form-control" value="<?php echo $resultado['dataFechamento'];?>">
    </div>

    <button type="submit" class="btn btn-success">
        <img src="../assets/images/ic_done_white_24px.svg" alt="inserir Ordem"> Alterar
    </button>
</form>
<?php include 'rodape.php';?>

<?php
$titulo = "Pesquisa de produtos";
include 'cabecalho.php';?>
    <h1>Pesquisar produtos</h1>
    <br>
    <form class="form-inline" action="pesquisar.php" method="get">
        <div class="form-group">
            <label for="nome">Nome: </label>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Antonio" autofocus>
        </div>
        <button type="submit" class="btn btn-primary mb-2">
            <img src="../assets/images/ic_search_white_24px.svg" alt="Pesquisar">
            Pesquisar
        </button>
    </form>
<?php
include '../vendor/autoload.php';
//verificar se o usuario esta logado
//$uDAO = new \App\DAO\UsuarioDAO();
//$uDAO->verificar();

if ($_GET['msg'] == 1)
    echo "<div class='alert alert-success'>Produto excluido com sucesso!</div>";
if ($_GET['msg'] == 2)
    echo "<div class='alert alert-success'>Produto alterado com sucesso!</div>";

$p = new \App\Model\Fechada();
isset($_GET['nome']) ? $p->setNome($_GET['nome']) : $p->setNome("");

$pDAO = new \App\DAO\FechadaDAO();
$fechamento = $pDAO->pesquisar($p);

if (count($fechamento) > 0) {

    ?>
    <table class='table table-striped table-hover'>
        <tr class='text-center'>
            <th>ID</th>
            <th class="text-left">Nome</th>
            <th class="text-left">Problema Constatado</th>
            <th>Solução</th>
            <th>Valor</th>
            <th>Data de Fechamento</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        foreach ($fechamento as $fechamento){
            echo "<tr class='text-center'>";
            echo "<td>{$fechamento->getId()}";
            echo "<td class='text-left'>{$fechamento->getNome()}";
            echo "<td>{$fechamento->getProblemaConstatado()}</td>";
            echo "<td>".App\Helper\Data::get($fechamento->getSolucao())."</td>";
            echo "<td><a class='btn btn-danger' href='produto-excluir.php?id={$fechamento->getId()}'>Excluir</a></td>";
            echo "<td><a class='btn btn-warning' href='produto-alterar.php?id={$fechamento->getId()}'>Alterar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
} else {
    echo "<div class='alert alert-danger'>Não existem produtos com a pesquisa informata!</div>";
}
include 'rodape.php';
?>
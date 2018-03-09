<?php
include '../vendor/autoload.php';

//verificar se o usuario esta logado
//$uDAO = new \App\DAO\UsuarioDAO();
//$uDAO->verificar();

if ($_POST){
    $p = new \App\Model\Aberta();
    $p->setNome($_POST['nome']);
    $p->setDescricao($_POST['descricao']);
    !empty($_POST{'dataAbertura'}) ? $p->setDataAbertura(\App\Helper\Data::set($_POST['dataAbertura'])) : $p->setDataAbertura(null);


    $pDAO = new \App\DAO\AbertaDAO();
    if ($pDAO->inserir($p))
        echo "<div class='alert alert-success'> O.S registrada com sucesso!</div>";

}

?>
<form action="inserir.php" method="post">
    <div class="form-group">
        <label for="nome"><span class="text-danger">*</span> Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" autofocus required>
    </div>
    <div class="form-group">
        <label for="descricao"><span class="text-danger">*</span> Descrição</label>
        <input type="text" id="desricao" name="descricao" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="dataAbertura">Data de Abertura</label>
        <input type="date" id="dataAbertura" name="dataAbertura" class="form-control">
    </div>
    <div class="form-group">
        Os campos com <span class="text-danger">*</span> não podem estar em branco.
    </div>
    <button type="submit" class="btn btn-success">
        <img src="../assets/images/ic_done_white_24px.svg" alt="Cadastrar o produto"> Cadastrar
    </button>
</form>

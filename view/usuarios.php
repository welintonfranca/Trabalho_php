<?php
$titulo = "Alteração de Ordem";
include 'cabecalho.php';?>

<?php
include '../vendor/autoload.php';

if ($_POST){
    $p = new \App\Model\Alterar();
    $p->setId($_POST['id']);
    $p->setEmail($_POST['email']);
    //$p->setSenha($_POST['senha']);

    $pDAO = new \App\DAO\AlterarDAO();
    if ($pDAO->cadUsuario($p))
        echo "<div class='alert alert-success'> Usuario cadastrado com sucesso!</div>";

}

?>


    <form action="usuarios.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" id="senha" name="senha" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-success">
            <img src="../assets/images/ic_done_white_24px.svg" alt="inserir usuario"> Cadastrar
        </button>
    </form>

<?php include 'rodape.php';?>
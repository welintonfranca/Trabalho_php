<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 08/03/2018
 * Time: 20:13
 */

namespace App\DAO;


class AbertaDAO extends Conexao
{

    public function inserir($aberta)
    {
        $sql = "insert into aberta (nome,endereco,telefone, descricao, dataAbertura) VALUES (:nome, :endereco, :telefone, :descricao, :dataAbertura)";
        try{
            $i = $this->conexao->prepare($sql);
            $i->bindValue("nome", $aberta->getNome());
            $i->bindValue("endereco", $aberta->getEndereco());
            $i->bindValue("telefone", $aberta->getTelefone());
            $i->bindValue("descricao", $aberta->getDescricao());
            $i->bindValue("dataAbertura", $aberta->getDataAbertura());
            $i->execute();
            return true;
        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}<\div>";

        }

    }
    public function pesquisar($aberta = null)
    {
        $sql = "select * from aberta where nome LIKE :nome";
        try{
            $p = $this->conexao->prepare($sql);
            $p->bindValue(":nome", "%".$aberta->getNome()."%");
            $p->execute();
            return $p->fetchAll(\PDO::FETCH_CLASS, "\App\Model\Aberta");

        }catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }
    public function visualizar($aberta)
    {
        $sql = "select * from aberta where id= :id";
        try{
            $p =  $this->conexao->prepare($sql);
            $p->bindValue(":id", $aberta->getId());
            $p->execute();
            return $p->fetch(\PDO::FETCH_ASSOC);

        }catch(\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }


    public function alterar($aberta){
        $sql = "update aberta set problemaConstatado = :problemaConstatado, solucao = :solucao, valor= :valor, dataFechamento = :dataFechamento where id = :id";
        try{
            $p =  $this->conexao->prepare($sql);
            $p->bindValue(":problemaConstatado", $aberta->getProblemaConstatado());
            $p->bindValue(":solucao", $aberta->getSolucao());
            $p->bindValue(":valor", $aberta->getValor());
            $p->bindValue(":dataFechamento", $aberta->getDataFechamento());
            $p->bindValue(":id", $aberta->getId());
            $p->execute();
            return true;

        }catch(\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }






}
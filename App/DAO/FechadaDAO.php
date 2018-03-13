<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 08/03/2018
 * Time: 20:13
 */

namespace App\DAO;


class FechadaDAO extends Conexao

{

    public function pesquisar($aberta = null)
    {
        $sql = "select * from aberta where nome LIKE :nome";
        try{
            $p = $this->conexao->prepare($sql);
            $p->bindValue(":nome", "%".$aberta->getNome()."%");
            $p->execute();
            return $p->fetchAll(\PDO::FETCH_CLASS, "\App\Model\Fechada");

        }catch (\PDOException $e) {
            echo "<div class='alert alert-danger'>{$e->getMessage()}</div>";
        }
    }

}
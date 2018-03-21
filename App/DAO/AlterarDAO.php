<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 20/03/2018
 * Time: 21:21
 */

namespace App\DAO;


class AlterarDAO extends Conexao

{
    public function cadUsuario($usuario){
        $sql = "update usuarios set email = :email, senha = :senha where id = :id";
        try{
            $i = $this->conexao->prepare($sql);
            $i->bindValue("email", $usuario->getEmail());
            $i->bindValue("senha", $usuario->getSenha());
            $i->bindValue(":id", $usuario->getId());
            $i->execute();
            return true;
        }catch (\PDOException $e){
            echo "<div class='alert alert-danger'>{$e->getMessage()}<\div>";

        }
    }
}
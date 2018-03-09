<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 08/03/2018
 * Time: 20:13
 */

namespace App\Model;


class Aberta
{
    private $id;
    private $nome;
    private $descricao;
    private $dataAbertura;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    /**
     * @param mixed $dataAbertura
     */
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;
    }

}
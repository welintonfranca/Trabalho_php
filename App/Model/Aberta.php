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
    private $problemaConstatado;
    private $solucao;
    private $valor;
    private $dataFechamento;
    private $status;

    /**
     * @return mixed
     */
    public function getProblemaConstatado()
    {
        return $this->problemaConstatado;
    }

    /**
     * @param mixed $problemaConstatado
     */
    public function setProblemaConstatado($problemaConstatado)
    {
        $this->problemaConstatado = $problemaConstatado;
    }

    /**
     * @return mixed
     */
    public function getSolucao()
    {
        return $this->solucao;
    }

    /**
     * @param mixed $solucao
     */
    public function setSolucao($solucao)
    {
        $this->solucao = $solucao;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getDataFechamento()
    {
        return $this->dataFechamento;
    }

    /**
     * @param mixed $dataFechamento
     */
    public function setDataFechamento($dataFechamento)
    {
        $this->dataFechamento = $dataFechamento;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


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
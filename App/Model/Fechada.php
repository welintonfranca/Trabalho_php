<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 08/03/2018
 * Time: 20:13
 */

namespace App\Model;


class Fechada
{
   private $id;
   private $nome;
   private $problemaConstatado;
   private $solucao;
   private $valor;
   private $dataFechamento;

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
}
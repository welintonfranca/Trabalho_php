<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 08/03/2018
 * Time: 19:40
 */

namespace App\DAO;


class Conexao
{
    protected $conexao;
    private $database = "db_ordemdeservico";
    private $host = "localhost";
    private $user = "root";
    private $senha = "#9258863709202202#";

    /**
     * Conexao constructor.
     */
    public function __construct()
    {
        $this->conexao = new \PDO("mysql:dbname={$this->database}; host={$this->host}", "{$this->user}", "{$this->senha}");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 08/03/2018
 * Time: 20:16
 */

namespace App\Helper;


class Moeda
{
    /*
     * para receber o valor do Banco de Dados
     */
    static public function get($valor)
    {
        return number_format($valor,2,',','.');
    }

    static public function set($valor)
    {
        return str_replace(',', '.', str_replace('.','', $valor));
    }

}
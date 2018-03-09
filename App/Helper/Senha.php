<?php
/**
 * Created by PhpStorm.
 * User: 00925473200
 * Date: 08/03/2018
 * Time: 19:43
 */
namespace App\Helper;
class Senha
{
    static public function gerar($senha)
    {
        return md5($senha);
    }
}
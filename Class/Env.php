<?php

/**
 * Created by PhpStorm.
 * User: Mark Domkan
 * Date: 5/1/2016
 * Time: 19:10
 */
class Env
{
    public $bd;


    /**
     * Env constructor.
     */
    public function __construct()
    {
        $this->bd = new BD();
    }
}
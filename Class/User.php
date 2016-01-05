<?php

/**
 * Created by PhpStorm.
 * User: Mark Domkan
 * Date: 4/1/2016
 * Time: 19:22
 */
class User
{
    private $name;
    private $pass;
    private $env;

    /**
     * User constructor.
     * @param $env
     */
    public function __construct(Env $env)
    {
        $this->env = $env;
    }


}


<?php 

/**
 * Created by PhpStorm.
 * User: Mark Domkan
 * Date: 4/1/2016
 * Time: 19:22
 */
class Game
{
    private $env;

    /**
     * Game constructor.
     */
    public function __construct(Env $env)
    {
        $this->env = $env;
    }
}
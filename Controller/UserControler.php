<?php

/**
 * Created by PhpStorm.
 * User: spine
 * Date: 05/01/2016
 * Time: 19:55
 */
class UserController
{
    /**
     * UserController constructor.
     */
    private $env;

    public function __construct(Env $env)
    {
        $this->env = $env;
    }


    public function Login()
    {
//   TODO: COSES
        session_start();
        $_SESSION['login'] = "MES COSES";
    }

    public function Register()
    {
        $this->env->bd->CreateUser();
    }


}
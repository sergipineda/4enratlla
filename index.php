<?php

include('Class/Env.php');

class Index
{
    /**
     * @var Env Environment class
     */
    private $env;
    /**
     * @var User User class
     */
    private $user;
    /**
     * @var Game Game class
     */
    private $game;


    /**
     * Principal method of the App
     */
    public function Init()
    {
        $this->env = new Env();
        if ($this->CheckLogin()) {

            if ($this->InGame()) {
                //TODO: redirect partida

            } else {
                //TODO: redirect dashborad

            }
        } else {


        }
    }


    /**
     * @return bool return true if user is logged.
     */
    public function CheckLogin()
    {
        if (isset($_SESSION['login']) && $_SESSION['login'] = !"") {
            return true;
        }
        return false;
    }


    /**
     * @return bool return true if the user is in agame
     */
    public function InGame()
    {
        if (isset($_SESSION['game']) && $_SESSION['game'] = !"") {
            return true;
        }
        return false;
    }


}


$index = new Index();
$index->Init();




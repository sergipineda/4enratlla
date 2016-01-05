<?php namespace joc;

class Index
{
    private $env;
    private $user;
    private $game;


    public function Init()
    {
        $this->env = new Env();
        if ($this->CheckToken()) {

            if ($this->InGame()) {
                //TODO: redirect partida

            } else {
                //TODO: redirect dashborad

            }
        } else {
            //TODO: redirec login

        }
    }


    public function CheckToken()
    {

//        TODO: si te toquen i es valid retornem true;


        return true;
    }


    public function InGame()
    {
        //TODO: si està en partida retornem true

        return true;
    }


}


$index = new Index();
$index->Init();




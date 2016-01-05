<?php

class Index
{
    private static $env;
    private static $user;
    private static $game;


    public static function Init()
    {
        self::$env = new Env();

    }


    public static function CheckToken()
    {

//        TODO: si te toquen i es valid retornem true;


        return true;
    }


    public static function InGame()
    {
        //TODO: si està en partida retornem true

        return true;
    }


}


Index::Init();
if (Index::CheckToken()) {
    if (Index::InGame()) {
        //TODO: redirect partida

    } else {
        //TODO: redirect dashborad

    }
}




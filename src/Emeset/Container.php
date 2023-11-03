<?php

/**
 * Exemple per a M07.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor,  té la responsabilitat d'instaciar els models i altres objectes.
 **/

namespace Emeset;

/**
 * Container: Classe contenidor.
 *
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Classe contenidor, la responsabilitat d'instaciar els models i altres objectes.
 **/
class Container
{
    public $config = [];
    public $sql;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config array paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config)
    {
        $this->config = $config;
        $this->sql = $this->db()->getConnection();
    }

    public function response()
    {
        return new \Emeset\Response();
    }

    public function request()
    {
        return new \Emeset\Request();
    }

    public function db(){
        return new \Daw\Db(
            $this->config["db"]["user"],
            $this->config["db"]["pass"],
            $this->config["db"]["db"], 
            $this->config["db"]["host"]
        );
    }

    public function tasks()
    {
        return new \Daw\Tasks($this->sql);
    }

    public function users()
    {
        return new \Daw\Users($this->sql);
    }

    public function registration(){

        return new \Daw\registration($this->sql);
    }

    public function login(){

        return new \Daw\login($this->sql);
    }

    public function change(){
        return new \Daw\user($this->sql);
    }

    public function getInfo(){
        return new \Daw\user($this->sql);
    }

}
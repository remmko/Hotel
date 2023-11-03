<?php

namespace Daw;

    class login{
        public $sql;
        
        public function __construct($sql){
            $this->sql = $sql;
        }


        public function login($username, $password){
            
            $stm = $this->sql->prepare('select id, login, password, Rol from Usuario where login =:user;');
            $stm->execute([':user'=>$username]);
            $result = $stm->fetch(\PDO::FETCH_ASSOC);
      

            if(is_array($result) && $result["password"] == hash("sha256",$password)){
                return $result;
            } else {
                return false;
            }

            
        
        }

    }

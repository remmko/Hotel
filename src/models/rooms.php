<?php

namespace Daw;

    class rooms{
        public $sql;
        
        public function __construct($sql){
            $this->sql = $sql;
        }


        public function countRooms(){
            
            $stm = $this->sql->prepare('SELECT COUNT(ID) from Apartamento');
            $stm->execute();
            $result = $stm->fetch(\PDO::FETCH_ASSOC);
            
            return $result;

        }


        public function getRooms(){
            $stm = $this->sql->prepare('SELECT * from Apartamento;');
            $stm->execute();
            $tasks = array();
            while ($result = $stm->fetch(\PDO::FETCH_ASSOC)) {
                $tasks[] = $result;
            }
            return $tasks;
        }

        public function getRoom($id){
            $stm = $this->sql->prepare('SELECT * from Apartamento where ID = :id;');
            $stm->execute([':id'=> $id]);
            $result = $stm->fetch(\PDO::FETCH_ASSOC);
            
            return $result;
        }

    }

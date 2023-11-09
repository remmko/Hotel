<?php

namespace Daw;

    class user{
        public $sql;
        
        public function __construct($sql){
            $this->sql = $sql;
        }


        public function change($name, $surename, $phone, $email, $address, $address2, $city, $zip, $login, $password){
    

            $sql = "UPDATE Usuario SET Nombre = :name, Apellidos = :surename, Telefono = :phone, CorreoElectronico = :email,
            Direccion = :address, Direccion2 = :address2, Ciudad = :city, CodigoPostal = :zip, login = :login, password = :password WHERE login  = :login;";
    
            $stmt = $this->sql->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':surename' => $surename,
                ':phone' => $phone,
                ':email' => $email,
                ':address' => $address,
                ':address2' => $address2,
                ':city' => $city,
                ':zip' => $zip,
                ':login' => $login,
                ':password' => $password
            ]);

        }

        public function getInfo($username){
            
            $stm = $this->sql->prepare('select * from Usuario where login =:user;');
            $stm->execute([':user'=>$username]);
            $result = $stm->fetch(\PDO::FETCH_ASSOC);
            return $result;

        }


        public function getUsers(){
            $stm = $this->sql->prepare('select * from Usuario');
            $stm -> execute();

            $tasks = array();
            while ($result = $stm->fetch(\PDO::FETCH_ASSOC)) {
                $tasks[] = $result;
            }

            return $tasks;
        }



        public function countUsers(){
            $stm = $this->sql->prepare('SELECT COUNT(ID) from Usuario');
            $stm->execute();
            $result = $stm->fetch(\PDO::FETCH_ASSOC);
            return $result;
        }



        public function deleteUser($id){
            $stm = $this -> sql -> prepare('DELETE FROM Usuario  WHERE ID = :id');
            $stm->execute([
                ':id'=>$id
            ]);

        }

        public function toGestor($id){
            $stm = $this -> sql -> prepare('UPDATE Usuario SET Rol = "gestor" WHERE ID = :id');
            $stm->execute([
                ':id'=>$id
            ]);

        }


        public function toClient($id){
            $stm = $this -> sql -> prepare('UPDATE Usuario SET Rol = "cliente" WHERE ID = :id');
            $stm->execute([
                ':id'=>$id
            ]);

        }

    }

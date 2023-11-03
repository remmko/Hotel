<?php

namespace Daw;

    class user{
        public $sql;
        
        public function __construct($sql){
            $this->sql = $sql;
        }


        public function change($name, $surename, $phone, $email, $address, $address2, $city, $zip, $login, $password){
            $sql = "UPDATE Usuario SET Nombre = :name, Apellidos = :surename, Telefono = :phone, CorreoElectronico = :email,
            Direccion = :address, Direccion2 = :address2, Ciudad = :city, CodigoPostal = :zip, login = :login, password = :password WHERE login = :login;";

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

    }

<?php

namespace Daw;

    class registration{
        public $sql;
        
        public function __construct($sql){
            $this->sql = $sql;
        }


        public function registration($name, $surname, $phone, $email, $defaultRol, $address, $address2, $city, $zip, $login, $password){
            $sql = "INSERT INTO Usuario (Nombre,Apellidos,Telefono,CorreoElectronico,Rol,Direccion,Direccion2,Ciudad,CodigoPostal,login,password) VALUES 
            (:name, :surename, :phone, :email, :rol :address, :address2, :city, :zip, :login, :password);";


            try {
                $stmt = $conn->prepare($sql);
                $stmt->execute([
                    ':name' => $name,
                    ':surename' => $surname,
                    ':phone' => $phone,
                    ':email' => $email,
                    ':rol' => $defaultRol,
                    ':address' => $address,
                    ':address2' => $address2,
                    ':city' => $city,
                    ':zip' => $zip,
                    ':login' => $login,
                    ':password' => $password
                ]);
                
               
            } catch (PDOException $e) {
                echo "Registration error: " . $e->getMessage();
            } 

        }

    }

?>
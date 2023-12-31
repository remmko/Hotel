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


        public function countRoom($userID){
            
            $stm = $this->sql->prepare('SELECT COUNT(addedBy) from Apartamento WHERE addedBy = :userID');
            $stm->execute([
                'userID' => $userID
            ]);
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


        public function getMyRooms($userID){
            $stm = $this->sql->prepare('SELECT * from Apartamento where addedBy = :userID;');
            $stm->execute([':userID'=> $userID]);
            while ($result = $stm->fetch(\PDO::FETCH_ASSOC)) {
                $tasks[] = $result;
            }
            return $tasks;
        }


        public function reserve($start, $end, $roomID, $price, $userid){
            $stm = $this->sql->prepare('INSERT INTO Reserva (FechaEntrada, FechaSalida,  PrecioTotal, FechaReserva, IDUsuario, IDApartamento)
            VALUES  (:start, :end, :price, DATE_FORMAT(CURDATE(), "%Y%m%d"),:userid, :roomID);');
            
            $stm->execute([
                ':start'=>$start,
                ':end' => $end,
                ':price'=>$price,
                ':userid' => $userid,
                ':roomID' => $roomID
            ]);

        }


        public function countReserve(){
            $stm = $this->sql->prepare('SELECT COUNT(ID) from Reserva');
            $stm->execute();
            $result = $stm->fetch(\PDO::FETCH_ASSOC);
            return $result;
        }


        public function countMyReserve($userID){
            $stm = $this->sql->prepare('SELECT COUNT(ID) from Reserva where IDUsuario = :userID');
            $stm->execute([
                ':userID' => $userID
            ]);
            $result = $stm->fetch(\PDO::FETCH_ASSOC);
            return $result;
        }


        public function getReserve($roomID){
            $stm = $this->sql->prepare('SELECT * from Reserva where IDApartamento = :roomID;');
            $stm->execute([
                ':roomID'=> $roomID
            ]);
            $tasks = array();
            while ($result = $stm->fetch(\PDO::FETCH_ASSOC)) {
                $tasks[] = $result;
            }

            return $tasks;
            
        }


        public function getMyReserve($userID){
            $stm = $this->sql->prepare('SELECT * from Reserva where IDUsuario = :userID;');
            $stm->execute([
                ':userID'=> $userID
            ]);
            $tasks = array();
            while ($result = $stm->fetch(\PDO::FETCH_ASSOC)) {
                $tasks[] = $result;
            }

            return $tasks;
            
        }


        public function deleteRoom($id){
            $stm = $this -> sql -> prepare('DELETE FROM Apartamento  WHERE ID = :id');
            $stm->execute([
                ':id'=>$id
            ]);

        }


        public function deleteReserve($id){
            $stm = $this -> sql -> prepare('DELETE FROM Reserva  WHERE ID = :id');
            $stm->execute([
                ':id'=>$id
            ]);
        }

    }



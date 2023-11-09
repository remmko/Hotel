<?php

namespace Daw;

    class adminpanel{
        public $sql;
        
        public function __construct($sql){
            $this->sql = $sql;
        }

        function addHotel($titulo, $direccionPostal, $latitud, $longitud, $descripcion, $metrosCuadrados, $numeroHabitaciones, $precioDiaTemporadaBaja, $precioDiaTemporadaAlta, $img, $userID){
            $sql = "INSERT INTO Apartamento (Titulo, DireccionPostal, Latitud, Longitud, Descripcion, MetrosCuadrados, NumeroHabitaciones, PrecioDiaTemporadaBaja, PrecioDiaTemporadaAlta, img, addedBy) 
            VALUES (:titulo, :direccionPostal, :latitud, :longitud, :descripcion, :metrosCuadrados, :numeroHabitaciones, :precioDiaTemporadaBaja, :precioDiaTemporadaAlta, :img, :userID)";
    
            try {
                $stm = $this->sql->prepare($sql);
                $stm->execute([
                    ':titulo' => $titulo,
                    ':direccionPostal' => $direccionPostal,
                    ':latitud' => $latitud,
                    ':longitud' => $longitud,
                    ':descripcion' => $descripcion,
                    ':metrosCuadrados' => $metrosCuadrados,
                    ':numeroHabitaciones' => $numeroHabitaciones,
                    ':precioDiaTemporadaBaja' => $precioDiaTemporadaBaja,
                    ':precioDiaTemporadaAlta' => $precioDiaTemporadaAlta,
                    ':img' => "img/".$img,
                    ':userID'=> $userID
                ]);
                
                echo "Succesful added!";
            } catch (PDOException $e) {
                echo "Add hotel error: " . $e->getMessage();
            } 
        }

        
    }

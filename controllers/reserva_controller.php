<?php

    class ControllerReserva
    {


        public function ListarQuarto($idQuarto){

            require_once('models/reserva_class.php');
            $listQuarto = new Reserva();
            $listQuarto->idQuarto = $idQuarto;
            return $listQuarto->SelectQuarto();



        }

        public function InsertReserva(){

            if($_SERVER['REQUEST_METHOD'] == 'post'){

                



            }


        }


    }


?>

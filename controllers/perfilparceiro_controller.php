<?php

    class ControllerPerfilParceiro
    {


        public function SelectHotel(){

            require_once('models/perfilparceiro_class.php');
            $lsthotel = new PerfilParceiro();
            $idParceiro = $_GET['idParceiro'];
            $lsthotel->idParceiro = $idParceiro;
            return $lsthotel->SelecionarHoteis();

        }


    }


?>

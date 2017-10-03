<?php

  class ControllerParceiroDestaque{


    public function Listar(){

      require_once('models/parceirosDestaque_class.php');
      $lstParceiro = new ParceiroDestaque();
      return $lstParceiro->SelectParceiroDestaque();

    }



  }


 ?>

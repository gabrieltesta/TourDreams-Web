<?php
  class ControllerSelectBuscaAvancada{

    public function ListarTipoDeEstadia(){

      require_once('models/buscaAvancada_class.php');
      $buscaAvancada_class = new SelectBuscaAvancada();
      return $lstParceiro->SelectTipoDeEstadia();


    }


  }
 ?>

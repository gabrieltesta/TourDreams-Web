<?php


class ControllerParceiro
{

  public function Listar(){

      require_once('models/parceiro_class.php');
      $lstParceiro = new Parceiro();
      return $lstParceiro->SelectParceiro();

    }
}
 ?>

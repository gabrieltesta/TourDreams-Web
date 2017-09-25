<?php


class ControllerParceiro
{

  public function Listar(){

      require_once('models/parceiro_class.php');
      $lstParceiro = new Parceiro();
      return $lstParceiro->SelectParceiro();

    }
    public function Excluir(){

      $idParceiro = $_GET['idParceiro'];

      $parceiro_class = new Parceiro();
      $parceiro_class->idParceiro = $idParceiro;
      $result = $parceiro_class->Delete($parceiro_class);

      if($result = 'erro'){
        header('location:gerenciamentoparceiros.php?erro');
      }else {
        header('location:gerenciamentoparceiros.php?ok');
      }
    }

    public function Visualizar(){
      $idParceiro = $_GET['idParceiro'];
      require_once('models/parceiro_class.php');

      $parceiro_class = new Parceiro();
      $parceiro_class->idParceiro=$idParceiro;
      $result = $parceiro_class->SelectById($parceiro_class);

      
    }

}
 ?>

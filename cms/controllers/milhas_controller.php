<?php


class ControllerMilhas
{

  public function Listar(){

      require_once('models/milhas_class.php');
      $lstMilhas = new Milhas();
      return $lstMilhas->SelectMilhas();

    }
    public function Excluir(){

      $idRecompensa = $_GET['idRecompensa'];

      $milhas_class = new Milhas();
      $milhas_class->idRecompensa = $idRecompensa;
      $result = $milhas_class->Delete($milhas_class);

      if($result = 'erro'){
        header('location:milhas.php?erro');
      }else {
        header('location:milhas.php?ok');
      }
    }

    public function Visualizar(){
      $idRecompensa = $_GET['idRecompensa'];

      require_once('models/milhas_class.php');

      $milhas_class = new Milhas();
      $milhas_class->idRecompensa=$idRecompensa;
      $result = $milhas_class->SelectById($milhas_class);

      require_once("milhas.php");


    }

    public function AtualizarRegistrar(){

      if($_SERVER['REQUEST_METHOD']=='POST'){
        $valorPontos=$_POST['txtvalorpontos'];
        $desconto=$_POST['txtdesconto'];

        $idRecompensa = $_GET['idRecompensa'];
        $milhas_class = new Milhas();

        $milhas_class->valorPontos=$valorPontos;
        $milhas_class->desconto=$desconto;
        $milhas_class->idRecompensa=idRecompensa;
      
        $milhas_class->Update($milhas_class);
      }
    }

}
 ?>

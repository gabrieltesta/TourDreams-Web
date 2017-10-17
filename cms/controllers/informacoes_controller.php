<?php


class ControllerInformacoes
{

     public function Inserir()
    {
        /*  Verifica se o método foi acionado por uma requisição de formulário
        POST.
        */
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['txtemail'];
            $logradouro = $_POST['txtlogradouro'];
            $telefone = $_POST['txttelefone'];
            
            $informacoes_class = new Informacoes();
            
            $informacoes_class->emailTourdreams=$email;
            $informacoes_class->idLogradouro=$logradouro;
            $informacoes_class->idTelefone=$telefone;
            

            $informacoes = $informacoes_class->Insert($informacoes_class);
            if ($informacoes == 'ok')
            {
                header('location:informacoes.php');
            }
            else
            {
                header('location:informacoes.php?erro');
            }
        }
    }

    public function Editar()
    {
        /*  Verifica se o método foi acionado por uma requisição de formulário
        POST.
        */
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
             $email = $_POST['txtemail'];
            $logradouro = $_POST['txtlogradouro'];
            $telefone = $_POST['txttelefone'];
            $idInformacao = $_GET['idInformacao'];


            $informacoes_class = new Informacoes();

              
            $informacoes_class->emailTourdreams=$email;
            $informacoes_class->idLogradouro=$logradouro;
            $informacoes_class->idTelefone=$telefone;
            $informacoes_class->idInformacao= $idInformacao;

            $informacoes= $informacoes_class->Update($informacoes_class);
            if ($informacoes == 'erro')
            {
                header('location:informacoes.php?erro');
            }
            else
            {
                header('location:informacoes.php');
            }
        }
    }

  public function Listar(){

      require_once('models/informacoes_class.php');
      $lstInformacoes = new Informacoes();
      return $lstInformacoes->SelectInformacoes();

    }
    public function Excluir(){

      $idInformacao = $_GET['idInformacao'];

      $informacoes_class = new Informacoes();
      $informacoes_class->idInformacao = $idInformacao;
      $result = $informacoes_class->Delete($informacoes_class);

      if($result = 'erro'){
                header('location:informacoes.php?erro');
      }else {
                header('location:informacoes.php');
      }
    }

    public function Visualizar(){

      $idInformacao = $_GET['idInformacao'];
        
      require_once('models/informacoes_class.php');
        
      $informacoes_class = new Informacoes();
      $informacoes_class->idInformacao = $idInformacao;
      $result = $informacoes_class->SelectById($informacoes_class);

      require_once("informacoes.php");


    }

     
}
 ?>

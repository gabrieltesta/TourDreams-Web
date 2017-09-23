<?php
    //Página faz o controle entre views e models segundo padrão MVC
    $controller = $_GET['controller'];
    if(isset($_GET['modo']))
    {
        $modo = $_GET['modo'];
    }

    switch ($controller)                                                        //Verifica a variável de controle
    {
        case 'login':
            if (isset($_POST['btnRegistro']))                                   //Verifica se o botão de cadastro foi acionado
            {
                header('location:registroUsuario.php');
            }
            if(isset($_POST['btnLogin']))                                       //Verifica se o botão de login foi acionado
            {
                header('location:perfilUsuario.php');
            }
            break;
         case 'conhecaseudestino':
                header("Location: conhecaseudestinobusca.php");
            break;
         case 'faleconosco':
                require_once('controllers/faleconosco_controller.php');
                require_once('models/faleconosco_class.php');
                if(isset($_POST['btnEnviarFeedback']))
                {
                    $controller_faleconosco = new ControllerFaleConosco;
                    $controller_faleconosco->Inserir();
                }
                break;

          case 'parceiro':
              require_once('controllers/parceiros_controller.php');
              require_once('models/parceiro_class.php');
              if(isset($_POST['btnRegistrarUsuario'])){

                  $controller_parceiro = new ControllerParceiro;
                  $controller_parceiro -> Inserir();

              }
          break;

    }
?>

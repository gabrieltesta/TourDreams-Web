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
            require_once('controllers/login_controller.php');
            require_once('models/login_class.php');
            if(isset($_POST['btnLoginCMS']))                                       //Verifica se o botão de login foi acionado
            {
                $controller_login = new ControllerLogin;
                $controller_login->Autenticar();
            }
            break;
        case 'deslogar':
            session_start();
            session_unset();
            session_destroy();
            session_write_close();
            header('location:index.php');
            break;
        case 'faleconosco':
            require_once('controllers/faleconosco_controller.php');
            require_once('models/faleconosco_class.php');
            $controller_faleconosco = new ControllerFaleConosco();
            switch($modo)
            {
                case 'excluir':
                    $controller_faleconosco->Excluir();
                    break;
            }
          case 'parceiro':
            require_once ('controllers/parceiros_controller.php');
            require_once ('models/parceiro_class.php');
            $controller_parceiro = new ControllerParceiro();
            switch ($modo) {

              case 'excluir':
                    $controller_parceiro->Excluir();
                break;
                case 'alterar':
                    $controller_parceiro->Visualizar();
                break;
                case 'editar':
                    $controller_parceiro->AtualizarRegistrar();
                  break;

            }
            break;

            case 'promocoes':
                require_once('controllers/promocoes_controller.php');
                require_once('models/promocoes_class.php');

                $controller_promocoes = new ControllerPromocoes();
                switch ($modo) {
                  case 'excluir':
                    $controller_promocoes->Excluir();
                    break;
                    case 'alterar':
                      $controller_promocoes->Visualizar();
                      break;
                      case 'editar':
                        $controller_promocoes->AtualizarRegistrar();
                        break;
                }
              break;

             case 'funcionario':
                require_once('controllers/funcionario_controller.php');
                require_once('models/funcionario_class.php');

                $controller_funcionario = new ControllerFuncionario();
                switch($modo){
                    case 'inserir':
                    $controller_funcionario->InserirFuncionario();
                    break;
                }
            break;

            case 'moeda':
                require_once('controllers/moedas_controller.php');
                require_once('models/moeda_class.php');

                $controller_moeda = new ControllerMoeda();
                switch($modo)
                {
                    case 'inserir':
                        $controller_moeda->Inserir();
                        break;
                    case 'visualizar':
                        $controller_moeda->Visualizar();
                        break;
                    case 'excluir':
                        $controller_moeda->Excluir();
                        break;
                    case 'editar':
                        $controller_moeda->Editar();
                        break;
                }
                break;
    }
?>

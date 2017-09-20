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
    }
?>

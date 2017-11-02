<?php
class ControllerLogin
{
    public function Autenticar()
    {
        /*  Verifica se o método foi acionado por uma requisição de formulário
        POST.
        */
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $login = $_POST['txtLogin'];
            $senha = $_POST['txtSenha'];

            $login_class = new Login();

            $login_class->login=$login;
            $login_class->senha=$senha;

            $login = $login_class->Auth($login_class);
            if ($login == 'null')
            {
                header('Location:'.$_SERVER['HTTP_REFERER'].'?erroLogin');
            }
            else if($login == 'db')
            {
                header('Location:'.$_SERVER['HTTP_REFERER'].'?dbLogin');
            }
            else
            {
                $firstname = explode(" ",$login->nome);

                session_start();
                $_SESSION['nome'] = $firstname[0];
                $_SESSION['idLogin'] = $login->idLogin;
                $_SESSION['idParceiro'] = $login->idParceiro;
                $_SESSION['tipoLogin'] = $login->tipoLogin;
                $_SESSION['login'] = 'true';

                if($login->tipoLogin == 'usuario')
                {
                    if($this->action == 'reservar'){
                        header('location: reserva.php');
                    }else if($this->action == 'melhoresdestinos'){
                        header('location: melhoresDestinos.php');
                    }else{
                        header('location:perfilusuario.php');
                    }
                }
                else if($login->tipoLogin == 'parceiro')
                {
                    header('location: perfilParceiro.php?idParceiro='.$_SESSION['idParceiro']);
                }

            }
        }
    }
}
 ?>

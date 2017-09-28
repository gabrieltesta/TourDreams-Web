<?php


class ControllerUsuario
{

  public function Inserir(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $cpf = '';
      $rg = '';

      $login = $_POST['txtLogin'];
      $senha =  $_POST['txtSenha'];
      $nome = $_POST['txtNome'];
      $email = $_POST['txtEmail'];
      if(isset($_POST['txtCpf']))
      {
          $cpf = $_POST['txtCpf'];
      }

      if(isset($_POST['txtRg']))
      {
          $rg = $_POST['txtRg'];
      }
      $telefone = $_POST['txtCelular'];
      $local = $_POST['radLocal'];

      $usuario_class = new Usuario();

      $usuario_class->login = $login;
      $usuario_class->senha = $senha;
      $usuario_class->nome = $nome;
      $usuario_class->email = $email;
      $usuario_class->cpf = $cpf;
      $usuario_class->rg = $rg;
      $usuario_class->telefone = $telefone;
      $usuario_class->tipoLocal = $local;

      $resultado = $usuario_class->Insert($usuario_class);
      if($resultado == 'ok'){
        header('location:registroUsuario.php?ok');
      }else {
        header('location:registroUsuario.php?erro');
      }
    }
  }

  public function Buscar($idLogin)
  {
      require_once('models/usuario_class.php');

      $usuario_class = new Usuario();
      $usuario_class->idLogin=$idLogin;
      return $usuario_class->SelectById($usuario_class);

  }

  public function Excluir()
  {
      $idLogin = $_GET['idLogin'];

      $usuario_class = new Usuario;
      $usuario_class->idLogin=$idLogin;
      $status = $usuario_class->Delete($usuario_class);

      header('location: router.php?controller=deslogar');

  }
}

 ?>

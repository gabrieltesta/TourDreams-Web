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
      else
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
}

 ?>

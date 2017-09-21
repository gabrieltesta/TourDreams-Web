<?php


class ControllerParceiro
{

  public function Inserir(){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $login = $_POST['txtLogin'];
      $senha =  $_POST['txtSenha'];
      $nome = $_POST['txtNome'];
      $email = $_POST['txtEmail'];
      $cnpj = $_POST['txtCnpj'];
      $telefone = $_POST['txtTelefone'];

      $parceiro_class = new Parceiro();

      $parceiro_class->login = $login;
      $parceiro_class->senha = $senha;
      $parceiro_class->nome = $nome;
      $parceiro_class->email = $email;
      $parceiro_class->cnpj = $cnpj;
      $parceiro_class->telefone = $telefone;

      $d = $parceiro_class->Insert($parceiro_class);
      if($d == 'ok'){
        header('location:registroUsuario.php?ok');
      }else {
        header('location:registroUsuario.php?erro');
      }
    }
}
}

 ?>

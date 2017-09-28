<?php
    class ControllerFuncionario{

        public function inserirFuncionario(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){


              $login = $_POST['txtLogin'];
              $senha =  $_POST['txtSenha'];
              $nome = $_POST['txtNome'];
              $email = $_POST['txtEmail'];
              $nivel = $_POST['sltNivel'];
              $cpf = $_POST['txtCPF'];
              $rg = $_POST['txtRG'];




              $funcionario_class = new Funcionario();

              $funcionario_class->login = $login;
              $funcionario_class->senha = $senha;
              $funcionario_class->nome = $nome;
              $funcionario_class->email = $email;
              $funcionario_class->cpf = $cpf;
              $funcionario_class->rg = $rg;
              $funcionario_class->idNivel = $nivel;

              $funcionario_class->InserirFuncionario($funcionario_class);
              header('location:gerfuncionario.php');

            }

    }


    public function Listar(){

        require_once('models/funcionario_class.php');
        $lstFuncionario = new Funcionario();
        return $lstFuncionario->SelectAll();

      }

}

?>

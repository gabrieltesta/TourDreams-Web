<?php

  class Parceiro{

    public $login;
    public $senha;
    public $nome;
    public $email;
    public $cnpj;
    public $telefone;

    //Método construtor da classe
    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }

    public function Insert($parceiro_class){

      $sql = "INSERT INTO tbl_login(login, senha, idTipoLogin) VALUES(
        '".$parceiro_class->login."','".$parceiro_class->senha."','2')";
          if(mysql_query($sql)){
            $sql = "SELECT LAST_INSERT_ID() AS idLogin";
              if($select = mysql_query($sql)){
                if($rows = mysql_fetch_array($select)){
                  $idLogin = $rows['idLogin'];
                  $sql = "INSERT INTO tbl_telefone(telefone, idTipoTelefone) VALUES(
                    '".$parceiro_class->telefone."','1')";
                    if(mysql_query($sql)){
                      $sql = "SELECT LAST_INSERT_ID() AS idTelefone";
                      if($select = mysql_query($sql)){
                        if($rows = mysql_fetch_array($select)){
                          $idTelefone = $rows['idTelefone'];
                          $sql = "INSERT INTO tbl_parceiro(cnpj, nomeParceiro, idImagem, idLogin, emailParceiro)
                          VALUES('".$parceiro_class->cnpj."', '".$parceiro_class->nome."','1','".$idLogin."','".$parceiro_class->email."')";
                          if(mysql_query($sql)){
                            return 'ok';
                          }else {
                            return 'erro';
                          }
                        }
                      }
                    }
                }
              }
          }
    }
  }
 ?>

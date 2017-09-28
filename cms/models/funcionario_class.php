<?php

    class Funcionario{


        public $nome;
        public $email;
        public $cpf;
        public $rg;
        public $idImagem;
        public $idNivel;
        public $login;
        public $senha;


        public function __construct()
        {
            //Inclui o arquivo de conexão com o banco de dados.
            require_once('models/db_class.php');
            //Instancia a classe Mysql_db.
            $conexao_db = new Mysql_db;
            //Chama o método conectar para estabelecer a conexão com o BD.
            $conexao_db->conectar();
        }


        public function InserirFuncionario($funcionario)
        {

            $sql = "INSERT INTO tbl_login(login, senha, idTipoLogin) VALUES('".$funcionario->login."','".$funcionario->senha."', 3)";
            if(mysql_query($sql)){
                $sql = "SELECT LAST_INSERT_ID() as idLogin";
                if($select = mysql_query($sql)){
                    if($rs = mysql_fetch_array($select)){
                        $idLogin = $rs['idLogin'];
                        $sql = "INSERT INTO tbl_funcionario(nomeFuncionario,idImagem,cpf,rg,emailFuncionario,idLogin,idNivelFuncionario) VALUES(
                        '".$funcionario->nome."',1,'".$funcionario->cpf."','".$funcionario->rg."','".$funcionario->email."',".$idLogin.",".$funcionario->idNivel.")";
                        mysql_query($sql);
                    }
                }
            }


        }


        public function SelectAll()
        {
            
        }


    }


?>

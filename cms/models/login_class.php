<?php
class Login
    {
        /*  Criação dos atributos iguais aos campos na tabela tbl_cadastro no
        banco de dados.
        */

        public $login;
        public $senha;
        public $nomeFuncionario;
        public $nivel;

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

        //Método para inserir um novo registro.
        public function Auth($login)
        {
            $sql = "SELECT login, senha, tipoLogin, LEFT(nomeFuncionario, 15) as nomeFuncionario, nivel FROM tbl_login as L INNER JOIN tbl_tipologin as T ON T.idTipoLogin=L.idTipoLogin INNER JOIN tbl_funcionario as F ON L.idLogin=F.idLogin INNER JOIN tbl_nivelfuncionario as NF ON F.idNivelFuncionario=NF.idNivelFuncionario WHERE tipoLogin='cms' AND login='".$login->login."' AND senha='".$login->senha."'";
            if ($select = mysql_query($sql))
            {
                if($rows=mysql_fetch_array($select))
                {
                    $returnlogin = new Login();
                    $returnlogin->nomeFuncionario=$rows['nomeFuncionario'];
                    $returnlogin->login=$rows['login'];
                    $returnlogin->senha=$rows['senha'];
                    $returnlogin->nivel=$rows['nivel'];

                    return $returnlogin;
                }
                else
                {
                    return 'null';
                }
            }
            else
            {
                return 'db';
            }
        }
}
?>

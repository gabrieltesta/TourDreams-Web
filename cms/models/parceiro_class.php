<?php

  class Parceiro{

    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }

    public function SelectParceiro(){

      $sql = 'select  p.idParceiro  , p.cnpj, p.nomeParceiro, l.login
        from tbl_parceiro as p
        inner join tbl_login as l
        on p.idLogin = l.idLogin';
      $select = mysql_query($sql);

      $cont = 0;


      while ($rs=mysql_fetch_array($select)) {

        $listParceiro[] = new Parceiro();

        $listParceiro[$cont]->idParceiro = $rs['idParceiro'];
        $listParceiro[$cont]->cnpj = $rs['cnpj'];
        $listParceiro[$cont]->nome = $rs['nomeParceiro'];
        $listParceiro[$cont]->idLogin = $rs['login'];

        $cont +=1;
      }
       return $listParceiro;
    }



  }



 ?>

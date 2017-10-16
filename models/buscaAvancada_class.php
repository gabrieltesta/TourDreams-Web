<?php

  class SelectBuscaAvancada{

    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }

    public function SelectTipoDeEstadia(){

      $sql = "select * from tbl_tipodeestadia";
      $select = mysql_query($sql);
      $cont = 0;

      while($rs=mysql_fetch_array($select)){

        $listBusca[] = new SelectBuscaAvancada();

        $listBusca[$cont]->estadia=$rs['estadia'];
        
        $cont +=1;


      }

      return $listBusca;

    }

  }

 ?>

<?php

  class PaginaPromocoes{

    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }


    public function EditarBannerUm(){

    $sql = "update tbl_imagem set caminhoImagem='".$this->caminhoImagemBannerUm."' where idImagem =202";
    echo ($sql);
    //mysql_query($sql) or dir(mysql_error());

  }

  public function EditarBannerDois(){

    $sql = "update tbl_imagem set caminhoImagem='".$this->caminhoImagemBannerdois."' where idImagem = 203";
    echo ($sql);
    //mysql_query($sql) or dir(mysql_error());
  }
}

 ?>

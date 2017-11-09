<?php

  class SobreNos{



    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }

    public function SelectSobrenos(){

    }

    public function Editar(){



      //Update tbl_imagem
      $sql = "update vw_paginasobrenos set ";


      $script = "descricaoSuperior='".$this->descricaoSuperior."', missao= '".$this->descricaoMissao."', visao ='".$this->descricaoVisao."', valores='".$this->descricaoValores."', anoUm='".$this->anoUm."', anoDois='".$this->anoDois."',anoTres='".$this->anoTres."',
       descricaoUm='".$this->descricaoAnoUm."', descricaoDois='".$this->descricaoAnoDois."', descricaoTres='".$this->descricaoAnoTres."'  ";

       if($this->caminhoImagemVisao != null){

         $script = $script.", campoVisao= '".$this->caminhoImagemVisao."'";

       }

       if($this->caminhoImagemValores != null){

         $script = $script.", campoValores= '".$this->caminhoImagemValores."'";

       }

       if($this->caminhoImagemMissao != null){

         $script = $script.", campoMissao= '".$this->caminhoImagemMissao."'";

       }



       $sql = $sql.$script.";";
       echo ($sql);
    //    mysql_query($sql);



    }

  }



 ?>

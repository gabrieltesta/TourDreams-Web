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

        $listBusca[$cont]->idEstadia=$rs['idEstadia'];
        $listBusca[$cont]->estadia=$rs['estadia'];

        $cont +=1;


      }

      return $listBusca;

    }

    public function SelectParceiro(){

      $sql = "select * from tbl_parceiro";
      $select = mysql_query($sql);
      $cont = 0;

      while ($rs=mysql_fetch_array($select)) {
        $listBusca [] = new SelectBuscaAvancada();

        $listBusca[$cont]->idParceiro=$rs['idParceiro'];
        $listBusca[$cont]->parceiro=$rs['nomeParceiro'];

        $cont +=1;
      }
      return $listBusca;

    }

    public function SelectComodidadeHotel(){

      $sql = "select * from tbl_comodidadeshotel";
      $select = mysql_query($sql);
      $cont = 0;

      while ($rs=mysql_fetch_array($select)) {

        $listComo[] = new SelectBuscaAvancada();

        $listComo[$cont]->idComodidadeHotel=$rs['idComodidadeHotel'];
        $listComo[$cont]->comodidadesHotel=$rs['nomeComodidade'];

        $cont +=1;

      }
      return $listComo;
    }

    public function SelectComodidadeQuarto(){

      $sql = "select * from tbl_comodidadesquarto";
      $select = mysql_query($sql);
      $cont =0;

      while ($rs=mysql_fetch_array($select)) {

        $listComo[] = new SelectBuscaAvancada();

        $listComo[$cont]->idComodidadeQuarto=$rs['idComodidade'];
        $listComo[$cont]->comodidadesQuarto=$rs['nomeComodidade'];

        $cont +=1;
      }

      return $listComo;
    }

    public function SelectDaBuscaAvancada(){

        $sql = 'select * from vw_buscaavancadahotel where nomeParceiro="'.$this->parceiro.'" and cidade="'.$this->cidade.'" and estadia="'.$this->estadia.'" and qtdEstrelas='.$this->qtdEstrelas.' and avaliacao <= '.$this->avaliacao.' and preco<='.$this->preco.'';
        echo($sql);

    }

  }

 ?>

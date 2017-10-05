
<?php


    class Hotel
    {

        public $idImagem;
        public $caminhoImagem;



        public function __construct()
        {
            //Inclui o arquivo de conexão com o banco de dados.
            require_once('models/db_class.php');
            //Instancia a classe Mysql_db.
            $conexao_db = new Mysql_db;
            //Chama o método conectar para estabelecer a conexão com o BD.
            $conexao_db->conectar();
        }




        public function InsertImagens($imagem){


            $sql = "insert into tbl_imagem(caminhoImagem) values('".$imagem->caminhoImagem."');";
            mysql_query($sql);
            $sql="select LAST_INSERT_ID() as idImagem";
            $select = mysql_query($sql);
            if($rs = mysql_fetch_array($select)){
                $idImagem = $rs['idImagem'];
                $sql = "insert into tbl_hotelimagem values(1,'".$idImagem."');";
                mysql_query($sql);
            }

        }


        public function SelectComodidades(){

            $sql = "select * from tbl_comodidadeshotel";
            $select = mysql_query($sql);

            $cont = 0;

            while($rs = mysql_fetch_array($select)){

                $comodidades[] = new Hotel();

                $comodidades[$cont]->idComodidadeHotel = $rs['idComodidadeHotel'];
                $comodidades[$cont]->nomeComodidade = $rs['nomeComodidade'];

                $cont++;

            }

            return $comodidades;

        }

        public function SelectEstadias(){
            $sql = "select * from tbl_tipodeestadia";
            $select = mysql_query($sql);

            $cont = 0;

            while($rs = mysql_fetch_array($select)){

                $estadia[] = new Hotel();

                $estadia[$cont]->idEstadia = $rs['idTipoEstadia'];
                $estadia[$cont]->estadia = $rs['estadia'];

                $cont++;

            }

            return $estadia;
        }










    }





 ?>

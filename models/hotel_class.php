
<?php


    class Hotel
    {

        public $idImagem;
        public $caminhoImagem;
        public $idHotel;


        public function __construct()
        {
            //Inclui o arquivo de conexão com o banco de dados.
            require_once('models/db_class.php');
            //Instancia a classe Mysql_db.
            $conexao_db = new Mysql_db;
            //Chama o método conectar para estabelecer a conexão com o BD.
            $conexao_db->conectar();
        }


        public function InsertHotel($hotel){
            $sql = "insert into tbl_hotel(hotel,checkin,checkout,descricao,qtdEstrelas,idParceiro,idTipoEstadia) values";
            $sql = $sql."('".$hotel->nomeHotel."','".$hotel->checkIn."','".$hotel->checkOut."','".$hotel->descricaoHotel."',".$hotel->qtdEstrelas.",".$hotel->idParceiro.",".$hotel->tipoEstadia.")";
            mysql_query($sql);
            $sql = "select LAST_INSERT_ID() as idHotel";
            $select = mysql_query($sql);
            if($rs = mysql_fetch_array($select)){

                return $idHotel = $rs['idHotel'];

            }
        }

        public function InsertImagem($imagem){
            $sql = "insert into tbl_imagem(caminhoImagem) values('".$imagem->caminhoImagem."');";
            mysql_query($sql);
            $sql="select LAST_INSERT_ID() as idImagem";
            $select = mysql_query($sql);
            if($rs = mysql_fetch_array($select)){
                $idImagem = $rs['idImagem'];
                $sql = "insert into tbl_hotelimagem(idHotel,idImagem) values(".$imagem->idHotel.",'".$idImagem."');";
                mysql_query($sql);
            }
        }

        public function InsertComodidade($comodidade){
            $sql = "insert into tbl_hotelcomodidadeshotel(idHotel,idComodidadeHotel,status) values(".$comodidade->idHotel.",".$comodidade->comodidade.",1)";

            mysql_query($sql);
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


        public function ExcluirImagem(){
            $sql="select * from tbl_hotelimagem where idHotel=".$this->idHotel.";";
            $select = mysql_query($sql);
            while($rs = mysql_fetch_array($select)){
                $idImagem = $rs['idImagem'];
                $sql = "delete from tbl_hotelimagem where idHotel=".$this->idHotel." limit 1;";
                mysql_query($sql);
                $sql = "delete from tbl_imagem where idImagem=".$idImagem.";";
                mysql_query($sql);

            }
        }

        public function ExcluirHotel(){

            $sql = "delete from tbl_hotelcomodidadeshotel where idHotel=".$this->idHotel.";";
            mysql_query($sql);
            $sql = "delete from tbl_hotel where idHotel=".$this->idHotel.";";
            mysql_query($sql);

        }







    }





 ?>

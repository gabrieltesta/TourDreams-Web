<?php

    class Quarto
    {

        public function __construct()
        {
            //Inclui o arquivo de conexão com o banco de dados.
            require_once('models/db_class.php');
            //Instancia a classe Mysql_db.
            $conexao_db = new Mysql_db;
            //Chama o método conectar para estabelecer a conexão com o BD.
            $conexao_db->conectar();
        }

        public function InsertQuarto(){

            $sql = "insert into tbl_imagem(caminhoImagem) values('".$this->caminhoImg."')";
            mysql_query($sql);
            $sql = "select LAST_INSERT_ID() as idImagem";
            $select = mysql_query($sql);
            if($rs = mysql_fetch_array($select)){
                $idImagem = $rs['idImagem'];
                $sql = "insert into tbl_quarto(nome,valorDiario,idImagem,descricao,maxHospedes,qtdQuartos,idHotel)";
                $sql = $sql." values('".$this->nome."',".$this->vlrDiario.",".$idImagem.",'".$this->descricao."',".$this->maxHosp.",".$this->qtdQuartos.",".$this->idHotel.")";
                mysql_query($sql);
                $sql = "select LAST_INSERT_ID() as idQuarto";
                $select = mysql_query($sql);
                if($rs = mysql_fetch_array($select)){
                    $idQuarto = $rs['idQuarto'];
                    return $idQuarto;
                }
            }

        }

        public function InsertComodidade(){
            $sql = "insert into tbl_quartocomodidadesquarto(idQuarto,idComodidade,status) values(".$this->idQuarto.",".$this->comodidade.",1)";

            mysql_query($sql);
        }

        public function Deletar(){
                $sql="delete from tbl_quartocomodidadesquarto where idQuarto=".$this->idQuarto.";";
                mysql_query($sql);
                $sql = "select * from tbl_quarto where idQuarto=".$this->idQuarto.";";
                $select = mysql_query($sql);
                if($rs=mysql_fetch_array($select)){
                    $idImagem = $rs['idImagem'];
                    $sql = "delete from tbl_quarto where idQuarto=".$this->idQuarto.";";
                    mysql_query($sql);
                    $sql = "delete from tbl_imagem where idImagem=".$idImagem.";";
                    mysql_query($sql);

            }
        }

        public function SelectById(){
            $sql="select * from tbl_quarto where idQuarto=".$this->idQuarto.";";
            $select = mysql_query($sql);



            if($rs = mysql_fetch_array($select)){

                $listaquarto = new Quarto();

                $listaquarto->quarto=$rs['nome'];
                $listaquarto->diaria=$rs['valorDiario'];
                $listaquarto->maxHosp=$rs['maxHospedes'];
                $listaquarto->qtdQuartos=$rs['qtdQuartos'];
                $listaquarto->descricao=$rs['descricao'];



            }

            return $listaquarto;
        }

        public function SelectComodidade(){
            $sql="select c.idComodidade, c.nomeComodidade from tbl_comodidadesquarto as c
                    inner join tbl_quartocomodidadesquarto as qc
                    on qc.idComodidade = c.idComodidade
                    where qc.idQuarto =".$this->idQuarto.";";
            $select = mysql_query($sql);

            $cont = 0;

            while($rs = mysql_fetch_array($select)){

                $listacomodidade = new Quarto();

                $listacomodidade->idComodidade=$rs['idComodidade'];

                $cont++;

            }

            return $listacomodidade;
        }

    }

?>

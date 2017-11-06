<?php

    class Reserva
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

        public function SelectQuarto(){

            $sql = "select q.nome, q.valorDiario,q.maxHospedes,q.qtdQuartos,i.caminhoImagem,h.hotel,h.checkin,h.checkout,l.logradouro,l.numero,b.bairro,c.cidade,e.uf
                    from tbl_quarto as q
                    inner join tbl_hotel as h
                    on q.idHotel = h.idHotel
                    inner join tbl_imagem as i
                    on q.idImagem = i.idImagem
                    inner join tbl_logradouro as l
                    on h.idLogradouro = l.idLogradouro
                    inner join tbl_bairro as b
                    on l.idBairro = b.idBairro
                    inner join tbl_cidade as c
                    on b.idCidade = c.idCidade
                    inner join tbl_estado as e
                    on c.idEstado = e.idEstado where q.idQuarto =".$this->idQuarto.";";

            $select = mysql_query($sql);

            if($rs = mysql_fetch_array($select)){

                $lstquarto = new Reserva();

                $lstquarto->nomeQuarto = $rs['nome'];
                $lstquarto->valorDiario = $rs['valorDiario'];
                $lstquarto->maxHospedes = $rs['maxHospedes'];
                $lstquarto->qtdQuartos = $rs['qtdQuartos'];
                $lstquarto->caminhoImagem = $rs['caminhoImagem'];
                $lstquarto->nomeHotel = $rs['hotel'];
                $lstquarto->checkin = $rs['checkin'];
                $lstquarto->checkout = $rs['checkout'];
                $lstquarto->logradouro = $rs['logradouro'];
                $lstquarto->numero = $rs['numero'];
                $lstquarto->bairro = $rs['bairro'];
                $lstquarto->cidade = $rs['cidade'];
                $lstquarto->uf = $rs['uf'];

                return $lstquarto;

            }

        }


    }


?>

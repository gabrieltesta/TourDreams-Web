<?php

    class PerfilParceiro{

        public $idParceiro;

        public function SelecionarHoteis(){
            $sql = "select h.idHotel, h.hotel, h.qtdEstrelas, t.estadia from tbl_hotel as h inner join tbl_tipodeestadia as t on h.idTipoEstadia = t.idTipoEstadia where h.idParceiro =".$this->idParceiro." order by hotel";
            $select = mysql_query($sql);

            $cont = 0;
            while($rs = mysql_fetch_array($select)){

                $listHotel[] = new PerfilParceiro();

                $listHotel[$cont]->hotel = $rs['hotel'];
                $listHotel[$cont]->qtdEstrelas = $rs['qtdEstrelas'];
                $listHotel[$cont]->tipoEstadia = $rs['estadia'];
                $listHotel[$cont]->idHotel = $rs['idHotel'];

                $cont++;

            }
            if(mysql_num_rows($select)>0){
                return $listHotel;
            }else{

            }
        }

    }

?>

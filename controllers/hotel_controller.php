<?php

    class ControllerHotel
    {


        public function Inserir(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $nomeHotel = $_POST['txtNomeHotel'];
                $checkIn = $_POST['txtCheckin'];
                $checkOut = $_POST['txtCheckout'];
                $tipoEstadia = $_POST['sltEstadia'];
                $qtdEstrelas = $_POST['sltEstrela'];
                $qtdImagens = $_POST['txtQtdImg'];
                $idParceiro = $_GET['idParceiro'];


                require_once('models/hotel_class.php');
                $hotel_class = new Hotel();


                $cont = 0;
                while($cont<$qtdImagens){

                    $name = $_FILES['fileFoto'.$cont]['name'];
                    $arquivo_tmp = $_FILES[ 'fileFoto'.$cont ][ 'tmp_name' ];



                    $extensao = pathinfo ( $name, PATHINFO_EXTENSION );


                    $extensao = strtolower ( $extensao );

                          $destino = 'imagens/hotel/' . $name;



                          if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

                              echo("teste");
                              $hotel_class->caminhoImagem = $destino;
                              $hotel_class->InsertImagens($hotel_class);
                              header('location:cadastrohotel.php');


                          }



                      $cont++;

                }


            }

        }


        public function Comodidades(){

            require_once('models/hotel_class.php');

            $lstComodidade = new Hotel();
            return $lstComodidade->SelectComodidades();



        }

        public function Estadia(){

            require_once('models/hotel_class.php');

            $lstEstadias = new Hotel();
            return $lstEstadias->SelectEstadias();



        }


    }




 ?>

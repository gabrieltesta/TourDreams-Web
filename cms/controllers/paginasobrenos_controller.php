<?php

  class ControllerSobrenos{

public function Atualizar(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $descricaoSuperior = $_POST['txtdescricaosuperior'];

      $descricaoVisao = $_POST['txtvisao'];
      $descricaoValores = $_POST['txtvalores'];
      $descricaoMissao = $_POST['txtmissao'];
      $anoUm = $_POST['txtanoum'];
      $anoDois = $_POST['txtanodois'];
      $anoTres = $_POST['txtanotres'];
      $descricaoAnoUm = $_POST['txtdescricaoum'];
      $descricaoAnoDois = $_POST['txtdescricaodois'];
      $descricaoAnoTres = $_POST['txtdescricaotres'];



      $sobreNos_class = new SobreNos();

      $sobreNos_class->descricaoSuperior = $descricaoSuperior;
      $sobreNos_class->descricaoVisao = $descricaoVisao;
      $sobreNos_class->descricaoValores = $descricaoValores;
      $sobreNos_class->descricaoMissao = $descricaoMissao;
      $sobreNos_class->anoUm = $anoUm;
      $sobreNos_class->anoDois = $anoDois;
      $sobreNos_class->anoTres = $anoTres;
      $sobreNos_class->descricaoAnoUm = $descricaoAnoUm;
      $sobreNos_class->descricaoAnoDois = $descricaoAnoDois;
      $sobreNos_class->descricaoAnoTres = $descricaoAnoTres;

echo "aquidentro";
      /*Verificação da existem da imagem VISÃO*/
      if (isset( $_FILES[ 'fileFotoVisao' ][ 'name' ] ) && $_FILES[ 'fileFotoVisao' ][ 'error' ] == 0 ) {
        $arquivo_tmp = $_FILES[ 'fileFotoVisao' ][ 'tmp_name' ];
        $nome = $_FILES[ 'fileFotoVisao' ][ 'name' ];

echo "aquidentro0";
        // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );

        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            $novoNome = 'visao.'.$extensao;
echo "aquidentro2";
            // Concatena a pasta com o nome
            $destino = '../imagens/sobrenos/' . $novoNome;
            ///echo "";
            // tenta mover o arquivo para o destino
            if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

              $destinoBanco = 'imagens/sobrenos/' .$novoNome;

              echo "aquidentro";
               $sobreNos_class->caminhoImagemVisao = $destinoBanco;
               $sobreNos_class->Editar();
               //header('location:paginaSobrenos.php');
           }
        }
        else
        {
            //header('location:paginaSobrenos.php?erroformato');
        }

    }else {
        $sobreNos_class->Editar($sobreNos_class);
        echo "else";
        //header('location:paginaSobrenos.php');
    }




  //   Verificação da existencia da Imagem VALORES
    if (isset( $_FILES[ 'fileFotoValores' ][ 'name' ] ) && $_FILES[ 'fileFotoValores' ][ 'error' ] == 0 ) {
      $arquivo_tmp = $_FILES[ 'fileFotoValores' ][ 'tmp_name' ];
      $nome = $_FILES[ 'fileFotoValores' ][ 'name' ];


      // Pega a extensão
      $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

      // Converte a extensão para minúsculo
      $extensao = strtolower ( $extensao );

      // Somente imagens, .jpg;.jpeg;.gif;.png
      // Aqui eu enfileiro as extensões permitidas e separo por ';'
      // Isso serve apenas para eu poder pesquisar dentro desta String
      if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
          $novoNome = 'valores.'.$extensao;

          // Concatena a pasta com o nome
          $destino = '../imagens/sobrenos/' . $novoNome;

          // tenta mover o arquivo para o destino
          if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

            $destinoBanco = 'imagens/sobrenos/'.$novoNome;

             $sobreNos_class->caminhoImagemValores = $destinoBanco;
             $sobreNos_class->Editar();
            // header('location:paginaSobrenos.php');
         }
      }
      else
      {
        //  header('location:paginaSobrenos.php?erroformato');
      }

      }else {
          $sobreNos_class->Editar($sobreNos_class);
        //  header('location:paginaSobrenos.php');
      }



      // // Verificação da existencia da Imagem MISSÃO
      // if (isset( $_FILES[ 'fileFotoMissao' ][ 'name' ] ) && $_FILES[ 'fileFotoMissao' ][ 'error' ] == 0 ) {
      //   $arquivo_tmp = $_FILES[ 'fileFotoMissao' ][ 'tmp_name' ];
      //   $nome = $_FILES[ 'fileFotoMissao' ][ 'name' ];
      //
      //   // Pega a extensão
      //   $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
      //
      //   // Converte a extensão para minúsculo
      //   $extensao = strtolower ( $extensao );
      //
      //   // Somente imagens, .jpg;.jpeg;.gif;.png
      //   // Aqui eu enfileiro as extensões permitidas e separo por ';'
      //   // Isso serve apenas para eu poder pesquisar dentro desta String
      //   if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
      //       $novoNome = 'missao'.$extensao;
      //
      //       // Concatena a pasta com o nome
      //       $destino = '../imagens/sobrenos/' . $novoNome;
      //
      //       // tenta mover o arquivo para o destino
      //       if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
      //
      //         $destinoBanco = 'imagens/sobrenos/'.$novoNome;
      //
      //          $sobreNos_class->caminhoImagemMissao = $destinoBanco;
      //          $sobreNos_class->Editar();
      //          //header('location:paginaSobrenos.php');
      //      }
      //   }
      //   else
      //   {
      //       //header('location:paginaSobrenos.php?erroformato');
      //   }
      //
      //   }else {
      //       $sobreNos_class->Editar($sobreNos_class);
      //       //header('location:paginaSobrenos.php');
      //   }
      //











    }
  }
}

 ?>

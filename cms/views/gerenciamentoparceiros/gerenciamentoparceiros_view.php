<?php

    $cnpj = null;
    $nome =null;
    $login = null;
    $senha = null;

    if (isset($_GET['idParceiro'])) {
        require_once('controllers/parceiros_controller.php');
        $controller_parceiro=new ControllerParceiro();
        $parceiro = $controller_parceiro->Visualizar();

        $cnpj = $parceiro ->cnpj;
        $nome = $parceiro ->nome;
        $login = $parceiro ->login;
        $senha = $parceiro ->senha;

    }


 ?>

<div id="selectgp">
     <p id ="titulogp"> Gerenciamento de Parceiros</p>
     <form class="" action="" method="post">


    <table class="table1 sortable">
        <tr>
                <td class="titulo2">
                        N de identificação
                </td>
                <td class="titulo2">
                        CNPJ
                </td>
                <td class="titulo2" >
                        Nome Parceiro
                </td>
                <td class="titulo2" >
                        Login
                </td>
                <td class="titulo2" >
                        opções
                </td>
        </tr>

    <?php

        require_once('controllers/parceiros_controller.php');

        $controller_parceiro = new ControllerParceiro();
        $rows = $controller_parceiro -> Listar();

        $cont = 0;

        while ($cont < count($rows)) {

    ?>
        <tr>
            <td class="tdnumero">
                <?php echo($rows[$cont]->idParceiro); ?>
            </td>
             <td class="tdnumero">
                <?php echo($rows[$cont]->cnpj); ?>
            </td>
             <td class="tdnumero">
                <?php echo($rows[$cont]->nome); ?>
            </td>
             <td class="tdnumero">
                <?php echo($rows[$cont]->idLogin); ?>
            </td>
            <td class="tdnumero">
               <a href=<?php echo("router.php?controller=parceiro&modo=excluir&idParceiro=".$rows[$cont]->idParceiro);?>>
                 <img src="imagens/delete.png">
               </a>
               <a href=<?php echo("parceiros.php?idParceiro=".$rows[$cont]->idParceiro );?>>
                 <img src="imagens/edit.png">
              </a>
           </td>
        </tr>

    <?php
    $cont +=1;
       }
    ?>
    </table>
    <table id="formulario">
      <tr>
              <td class="titulo2">
                      CNPJ
              </td>
              <td class="titulo2">
                      Nome Parceiro
              </td>
              <td class="titulo2" >
                      E-mail
              </td>
              <td class="titulo2" >
                      Senha
              </td>
              <td class="titulo2" >
                      Imagem
              </td>
      </tr>

      <?php

      require_once('controllers/parceiros_controller.php');

      $controller_parceiro = new ControllerParceiro();
      $rows = $controller_parceiro -> Listar();

      $cont = 0;

      while ($cont < count($rows)) {
      ?>

      <tr>
          <td class="tdnumero">
            <input class="inputFormulario" name="" value="" placeholder="" >
          </td>
           <td class="tdnumero">
             <input class="inputFormulario" name="" value="" placeholder="" >
          </td>
           <td class="tdnumero">
             <input class="inputFormulario" name="" value="" placeholder="" >
          </td>
           <td class="tdnumero">
             <input class="inputFormulario" name="" value="" placeholder="" >
          </td>
          <td class="tdimagem">
            <input class="" type="file" name="" value="" placeholder="" >
         </td>
      </tr>
      <?php
      $cont +=1;
          }
       ?>
      <tr>
        <td class="tdnumero">

        </td>
         <td class="tdnumero">

        </td>
         <td class="tdnumero">

        </td>
         <td class="tdnumero">

        </td>
        <td>
          <input type="submit" name="" value="" class="buttonAlterar">
        </td>
      </tr>
    </table>
</form>

</div>

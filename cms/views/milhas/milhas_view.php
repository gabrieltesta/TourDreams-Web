<?php




 ?>

<div class="selectgpp">
    <div id="titulogpp">
        Gerenciamento Milhas Travel Fidelidade
    </div>
    <table class="table11 sortable">
        <tr>
            <td class ="titulo22">
                Valor de Pontos
            </td>
             <td class ="titulo22">
                Valor de Descontos
            </td>
            <td class ="titulo22">
            
                Opções
            </td>   
        </tr>
        
    <?php

        require_once('controllers/milhas_controller.php');

        $controller_milhas = new ControllerMilhas();
        $rows = $controller_milhas -> Listar();

        $cont = 0;

        while ($cont < count($rows)) {

    ?>
        <tr> 
            <td class="tdnumeros">
                <?php echo($rows[$cont]->idRecompensa); ?>
            </td>
            <td class="tdnumeros">
                <?php echo($rows[$cont]->valorPontos); ?>
            </td>
              <td class="tdnumeros">
               <?php echo($rows[$cont]->desconto); ?>
            </td>
            
            <td class="tdnumeros">
               <a href=<?php echo("router.php?controller=milhas&modo=excluir&idRecompensa=".$rows[$cont]->idRecompensa);?>>
                 <img src="imagens/delete.png" alt="delete">
               </a>
               <a href=<?php echo("router.php?controller=milhas&modo=alterar&idRecompensa=".$rows[$cont]->idRecompensa);?>>
                 <img src="imagens/edit.png" alt="edit">
              </a>
           </td>
        </tr>
         <?php
    $cont +=1;
       }
    ?>
    </table>
    
    <table id="formulariozinho">
      <tr>
              <td class="titulo22">
                      Valor de Pontos
              </td>
              <td class="titulo22">
                      Desconto
              </td>
              
      </tr>

      <?php
      $valorPontos = null;
      $desconto = null;
      

      if(isset($_GET['modo'])){
        if ($_GET['modo']=='alterar') {
          $valorPontos=$result->valorPontos;
          $desconto=$result->desconto;

          $action="editar&idRecompensa=".$idRecompensa=$GET['idRecompensa'];
        }
      }


      ?>
      <form class="" action="router.php?controller=milhas&modo=<?php echo($action)?>" method="post">


      <tr>
          <td class="tdnumeros">
            <input class="inputFormulario" name="txtvalorpontos" value="<?php echo($valorPontos)?>" placeholder="" >
          </td>
           <td class="tdnumeros">
             <input class="inputFormulari                                 o" name="txtdesconto" value="<?php echo($desconto)?>" placeholder="" >
          </td>
         </tr>
      <?php


       ?>
      <tr>
        <td class="tdnumeros">

        </td>
         <td class="tdnumeros">

        </td>
        <td>
          <input type="submit" name="btnAlterar" value="" class="buttonAlterar">
        </td>
      </tr>
    
    
    
    
    
        </form>
    </table>
      
        
        
</div>
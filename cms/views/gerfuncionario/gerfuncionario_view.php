<div class="sectionfuncionario">
    <div id="titulo">
        Gerenciamento de Funcionários
    </div>
    <div class ="boxdetalhes">
     <table >
                 <tr>
            <td class="td_titulos">
                Imagem
                
            </td>
            <td class="td_titulos">
                Nome
                
            </td>
        <td class="td_titulos">
                CPF
                
            </td>
            <td class="td_titulos">
                RG
                
            </td>
            <td class="td_titulos">
                Email
                
            </td>
            <td class="td_titulos">
                Nível
                
            </td>
             <td class="td_titulos" >
                       Opções
            </td>

        </tr>
        <?php
        $i = 0;
        
    while($i < 9){
        
    ?>
             <tr>
                 <td class="img">
                    <img src="imagens/gfuncionarios/mulher2.jpg" >
                 </td>
                 <td class="tdcontas">
                     Maria Eduarda
                 </td>
                 <td class="tdcontas">
                     476.598.246-24
                 </td>
                 <td class="tdcontas">
                     59.658.3698-8
                 </td>
                 <td class="tdcontas">
                     mariaduda@gmail.com    
                 </td>
                 <td class="tdcontas">
                     Reservas
                 </td>
                 <td class="tdcontas">
                    <a href="#"><img src="imagens/edit.png"></a>
                     <a href="#"><img src="imagens/delete.png"></a>
                 </td>
            </tr>

        <?php
        $i++;
        }
    ?>
        </table>
    </div>
    
   
          
</div>
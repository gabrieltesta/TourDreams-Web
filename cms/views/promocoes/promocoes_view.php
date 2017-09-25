<div class="sectionpromo">
    <div id="titulo">
    Gerenciamento de Promoções
    </div>
    <table class="table sortable">
        
        <tr>
            <td class="tdtitulo">
                Parceiro
            </td>
            <td class="tdtitulo">
                Nome do Hotel
            </td>
            <td class="tdtitulo">
                Nome Promoção
            </td>
            <td class="tdtitulo">
                Milhas Pontuação
            </td>
            <td class="tdtitulo">
                Preço
            </td>
            <td class="tdtitulo">
                Região
            </td>
            <td class="tdtitulo">
                Opções
            </td>
        </tr>
        
        <?php
         $i = 0;
        
    while($i < 15){
        
        ?>
        <tr>
            <td class="td_conteudo">
                Barbara                
            </td>
             <td class="td_conteudo">
                Hotel Maneiro                
            </td>
             <td class="td_conteudo">
                25%                
            </td>
             <td class="td_conteudo">
                256                
            </td>
             <td class="td_conteudo">
                500,00                
            </td>
             <td class="td_conteudo">
                Carapicuíba                
            </td>
            <td class="td_conteudo">
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



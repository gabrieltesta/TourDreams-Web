<?php
require_once('../models/db_class.php');
//Instancia a classe Mysql_db.
$conexao_db = new Mysql_db;
//Chama o método conectar para estabelecer a conexão com o BD.
$conexao_db->conectar();
if (isset($_POST['idHotel'])) {
   $idHotel = $_POST['idHotel'];

   $sql = "select q.idQuarto, q.nome, q.valorDiario, q.qtdQuartos, i.caminhoImagem from tbl_quarto as q inner join tbl_imagem as i on q.idImagem = i.idImagem where idHotel=".$idHotel.";";
   $select = mysql_query($sql);


  if(mysql_num_rows($select) > 0)
  {
      $stringHTML =
         '<table>
             <tr>
                 <td class="titleTblQuarto">Quarto</td>
                 <td class="titleTblQuarto">Diária</td>
                 <td class="titleTblQuarto">qtd. quartos</td>
                 <td class="titleTblQuarto">Opções</td>
             </tr>';
      while($rows=mysql_fetch_array($select)) {
          $foto = "'".$rows['caminhoImagem']."'";
          $nome = "'".addslashes($rows['nome'])."'";
          $stringHTML = $stringHTML.


          '<tr onclick="abrirFotoQuarto('.$foto.','.$nome.')">
              <td>'.$rows['nome'].'</td>
              <td>'.$rows['valorDiario'].'</td>
              <td>'.$rows['qtdQuartos'].'</td>
              <td><img alt="" src="imagens/perfilparceiro/edit.png">    <img alt="" src="imagens/perfilparceiro/delete.png"></td>
          </tr>';
      }
      $stringHTML.'</table>';
  }else{
       $stringHTML =
       '<table>
        <tr>
            <td><h1>Este hotel não possui quartos</h1></td>
        </tr>
       </table>';
  }


  die($stringHTML);
}

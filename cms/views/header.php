<?php
    session_start();
    if ($_SESSION['login'] != 'true')
    {
        header('location:index.php?acesso');
    }
 ?>
<header class="header">
  <div class="titulo">
    CMS - Sistema de Gerenciamento TourDreams
  </div>
  <div id="usuarioBox">
      <table>
          <tr>
              <td><span><?php echo($_SESSION['nomeFuncionario']); ?></span></td>
          </tr>
          <tr>
              <td><?php echo($_SESSION['nivel']); ?></td>
          </tr>
          <tr>
              <td><a href="router.php?controller=deslogar">Sair</a></td>
          </tr>
      </table>
  </div>
</header>

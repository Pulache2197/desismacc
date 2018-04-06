<?php 
  require_once "core/config_general.php";

  if (isset($_GET['view'])) {

    $pagina = ($_GET['view']);
    if ($pagina == "Nosotros") {
      # code...
      include "paginas/nosotros.php";
    }elseif ($pagina == "Acerca") {
      # code...
      include "paginas/acerca.php";
    }else{
      include "paginas/inicio.php";
    }

  }else{
    include "paginas/inicio.php";
  }
 ?>

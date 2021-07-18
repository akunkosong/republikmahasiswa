<?php 
  
  $page = @$_GET['page'] ? $_GET['page'] : 'home'
  switch($page){
    case 'home':include'home.php';break;
    case 'daftar':include'daftar.php';break;
    default:include'home.php';break;
  }

?>

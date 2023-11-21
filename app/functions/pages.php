<?php 

function load(){
   $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_URL);

   $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";
   if(!file_exists($page)){

    throw new \Exception("erro pagina não existe");
   }

   return $page;
}
<?php

$pagina = filter_input(INPUT_GET, "p", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "home" => "View/home.php", //Página inicial
    "anunciar" => "View/anunciar.php", 
    "anuncios" => "View/anuncios.php",
    "informacoes-do-anuncio" => "View/informacoes-do-anuncio.php",
    "quem-somos" => "View/sobre.php",
    "como-funciona" => "View/como-funciona.php",
    "contato" => "View/contato.php",
    ### Paginas do Usuário ###
    "minha-conta" =>"View/usuario/minha-conta.php"

);

if ($pagina) {
    $encontrou = false;

    foreach ($arrayPaginas as $pag => $key) {
        if ($pagina == $pag) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("View/home.php");
    }
} else {
    require_once("View/home.php");
}

?>

<?php 
	require_once("../Config/Autoloader.php");

	use App\Model\Categoria\Categoria;
	use App\Controller\CategoriaController\CategoriaController;
	use App\Config\ClassSerialization;

	$categoriaController = new CategoriaController;

	$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

	/*
	 * 1- Retornar todas as categorias em JSON. 
	 */
	switch ($req) {
	    case 1:
	        echo $categoriaController->RetornarTodosJSON();
	        break;
	}

 ?>
<?php 
	require_once("../Config/Autoloader.php");

	use App\Model\Localizacao\Localizacao;
	use App\Model\Localizacao\Municipio;
	use App\Controller\LocalizacaoController\LocalizacaoController;
	use App\Config\ClassSerialization;

	$localizacaoController = new LocalizacaoController;

	$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

	/*
	 * 1- Retornar todas as categorias em JSON. 
	 */
	switch ($req) {
	    case 1:
	        echo $localizacaoController->RetornarTodosJSON();
	        break;

        case 2:
        	echo $localizacaoController->RetornarTodosMunicipiosJSON();
        	break;
	}

 ?>
<?php

namespace App\controller\LocalizacaoController;
use App\Model\Localizacao\Localizacao;
use App\DAL\LocalizacaoDAO\LocalizacaoDAO;

class LocalizacaoController {

    private $localizacaoDAO;

    function __construct() {
        $this->localizacaoDAO = new LocalizacaoDAO();
    }

    /*
    public function Cadastrar(Categoria $categoria) {
        if (strlen($categoria->getNome()) > 2 && strlen($categoria->getLink()) > 2 && $categoria->getThumb() != "" && strlen($categoria->getDescricao()) > 10) {
            return $this->categoriaDAO->Cadastrar($categoria);
        } else {
            return false;
        }
    }

    public function Alterar(Categoria $categoria) {
        if (strlen($categoria->getNome()) > 2 && strlen($categoria->getLink()) > 2 && $categoria->getCod() > 0 && strlen($categoria->getDescricao()) > 10) {
            return $this->categoriaDAO->Alterar($categoria);
        } else {
            return false;
        }
    }

    public function AlterarImagem(string $thumb, int $cod) {
        if (trim(strlen($thumb)) > 0 && $cod > 0) {
            return $this->categoriaDAO->AlterarImagem($thumb, $cod);
        } else {
            return false;
        }
    }

    public function RetornarCategoriasResumido() {
        return $this->categoriaDAO->RetornarCategoriasResumido();
    }

    public function RetornarTodos() {
        return $this->categoriaDAO->RetornarTodos();
    }
    */

    public function RetornarTodosJSON() {
        return $this->localizacaoDAO->RetornarTodosJSON();
    }

    public function RetornarTodosMunicipiosJSON() {
        return $this->localizacaoDAO->RetornarTodosMunicipiosJSON();
    }

    /*
    public function RetornarCod(int $cod) {

        if ($cod > 0) {
            return $this->categoriaDAO->RetornarCod($cod);
        } else {
            return null;
        }
    }
    */

}

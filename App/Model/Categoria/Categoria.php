<?php 
namespace App\Model\Categoria;

class Categoria {

	private $categoria_id;
	private $nome;
	private $thumb;
	private $status;
	private $data_cadastro;
	private $data_atualizacao;


    /**
     * @return mixed
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * @param mixed $categoria_id
     *
     * @return self
     */
    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @param mixed $thumb
     *
     * @return self
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    /**
     * @param mixed $data_cadastro
     *
     * @return self
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataAtualizacao()
    {
        return $this->data_atualizacao;
    }

    /**
     * @param mixed $data_atualizacao
     *
     * @return self
     */
    public function setDataAtualizacao($data_atualizacao)
    {
        $this->data_atualizacao = $data_atualizacao;

        return $this;
    }
}

 ?>
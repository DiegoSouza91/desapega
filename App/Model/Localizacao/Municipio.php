<?php 
namespace App\Model\Localizacao;

class Municipio {

	private $municipio_id;
	private $codigo;
	private $nome;
	private $uf;
	private $status;


    /**
     * @return mixed
     */
    public function getMunicipioId()
    {
        return $this->municipio_id;
    }

    /**
     * @param mixed $municipio_id
     *
     * @return self
     */
    public function setMunicipioId($municipio_id)
    {
        $this->municipio_id = $municipio_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

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
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     *
     * @return self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

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
}

 ?>
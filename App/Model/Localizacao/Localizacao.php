<?php 
namespace App\Model\Localizacao;

class Localizacao {

	private $estado_id;
	private $codigo_uf;
	private $nome;
	private $uf;


    /**
     * @return mixed
     */
    public function getEstadoId()
    {
        return $this->estado_id;
    }

    /**
     * @param mixed $estado_id
     *
     * @return self
     */
    public function setEstadoId($estado_id)
    {
        $this->estado_id = $estado_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoUf()
    {
        return $this->codigo_uf;
    }

    /**
     * @param mixed $codigo_uf
     *
     * @return self
     */
    public function setCodigoUf($codigo_uf)
    {
        $this->codigo_uf = $codigo_uf;

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
}
 ?>

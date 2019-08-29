<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorizacion
 *
 * @ORM\Table(name="categorizacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorizacionRepository")
 */
class Categorizacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Rason_social", type="string", length=255)
     */
    private $rasonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255, nullable=true)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="evaluador", type="string", length=255, nullable=true)
     */
    private $evaluador;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="notificacion", type="string", length=255, nullable=true)
     */
    private $notificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_expediente", type="string", length=255, nullable=true)
     */
    private $numeroExpediente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio_exp", type="datetime", nullable=true)
     */
    private $fechaInicioExp;

    /**
     * @var float
     *
     * @ORM\Column(name="avance", type="float", nullable=true)
     */
    private $avance;

    /**
     * @var int
     *
     * @ORM\Column(name="dias_ev", type="integer", nullable=true)
     */
    private $diasEv;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255, nullable=true)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="no_peligrosos", type="integer", nullable=true)
     */
    private $noPeligrosos;

    /**
     * @var string
     *
     * @ORM\Column(name="rnp", type="string", length=255, nullable=true)
     */
    private $rnp;

    /**
     * @var int
     *
     * @ORM\Column(name="peligrosos", type="integer", nullable=true)
     */
    private $peligrosos;

    /**
     * @var string
     *
     * @ORM\Column(name="rp", type="string", length=255, nullable=true)
     */
    private $rp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_notificacion", type="datetime", nullable=true)
     */
    private $fechaNotificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dias_envio", type="datetime", nullable=true)
     */
    private $diasEnvio;

    /**
     * @var int
     *
     * @ORM\Column(name="disp_desestimacion", type="integer", nullable=true)
     */
    private $dispDesestimacion;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rasonSocial
     *
     * @param string $rasonSocial
     *
     * @return Categorizacion
     */
    public function setRasonSocial($rasonSocial)
    {
        $this->rasonSocial = $rasonSocial;

        return $this;
    }

    /**
     * Get rasonSocial
     *
     * @return string
     */
    public function getRasonSocial()
    {
        return $this->rasonSocial;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Categorizacion
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set evaluador
     *
     * @param string $evaluador
     *
     * @return Categorizacion
     */
    public function setEvaluador($evaluador)
    {
        $this->evaluador = $evaluador;

        return $this;
    }

    /**
     * Get evaluador
     *
     * @return string
     */
    public function getEvaluador()
    {
        return $this->evaluador;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Categorizacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set notificacion
     *
     * @param string $notificacion
     *
     * @return Categorizacion
     */
    public function setNotificacion($notificacion)
    {
        $this->notificacion = $notificacion;

        return $this;
    }

    /**
     * Get notificacion
     *
     * @return string
     */
    public function getNotificacion()
    {
        return $this->notificacion;
    }

    /**
     * Set numeroExpediente
     *
     * @param string $numeroExpediente
     *
     * @return Categorizacion
     */
    public function setNumeroExpediente($numeroExpediente)
    {
        $this->numeroExpediente = $numeroExpediente;

        return $this;
    }

    /**
     * Get numeroExpediente
     *
     * @return string
     */
    public function getNumeroExpediente()
    {
        return $this->numeroExpediente;
    }

    /**
     * Set fechaInicioExp
     *
     * @param \DateTime $fechaInicioExp
     *
     * @return Categorizacion
     */
    public function setFechaInicioExp($fechaInicioExp)
    {
        $this->fechaInicioExp = $fechaInicioExp;

        return $this;
    }

    /**
     * Get fechaInicioExp
     *
     * @return \DateTime
     */
    public function getFechaInicioExp()
    {
        return $this->fechaInicioExp;
    }

    /**
     * Set avance
     *
     * @param float $avance
     *
     * @return Categorizacion
     */
    public function setAvance($avance)
    {
        $this->avance = $avance;

        return $this;
    }

    /**
     * Get avance
     *
     * @return float
     */
    public function getAvance()
    {
        return $this->avance;
    }

    /**
     * Set diasEv
     *
     * @param integer $diasEv
     *
     * @return Categorizacion
     */
    public function setDiasEv($diasEv)
    {
        $this->diasEv = $diasEv;

        return $this;
    }

    /**
     * Get diasEv
     *
     * @return int
     */
    public function getDiasEv()
    {
        return $this->diasEv;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Categorizacion
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Categorizacion
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set noPeligrosos
     *
     * @param integer $noPeligrosos
     *
     * @return Categorizacion
     */
    public function setNoPeligrosos($noPeligrosos)
    {
        $this->noPeligrosos = $noPeligrosos;

        return $this;
    }

    /**
     * Get noPeligrosos
     *
     * @return int
     */
    public function getNoPeligrosos()
    {
        return $this->noPeligrosos;
    }

    /**
     * Set rnp
     *
     * @param string $rnp
     *
     * @return Categorizacion
     */
    public function setRnp($rnp)
    {
        $this->rnp = $rnp;

        return $this;
    }

    /**
     * Get rnp
     *
     * @return string
     */
    public function getRnp()
    {
        return $this->rnp;
    }

    /**
     * Set peligrosos
     *
     * @param integer $peligrosos
     *
     * @return Categorizacion
     */
    public function setPeligrosos($peligrosos)
    {
        $this->peligrosos = $peligrosos;

        return $this;
    }

    /**
     * Get peligrosos
     *
     * @return int
     */
    public function getPeligrosos()
    {
        return $this->peligrosos;
    }

    /**
     * Set rp
     *
     * @param string $rp
     *
     * @return Categorizacion
     */
    public function setRp($rp)
    {
        $this->rp = $rp;

        return $this;
    }

    /**
     * Get rp
     *
     * @return string
     */
    public function getRp()
    {
        return $this->rp;
    }

    /**
     * Set fechaNotificacion
     *
     * @param \DateTime $fechaNotificacion
     *
     * @return Categorizacion
     */
    public function setFechaNotificacion($fechaNotificacion)
    {
        $this->fechaNotificacion = $fechaNotificacion;

        return $this;
    }

    /**
     * Get fechaNotificacion
     *
     * @return \DateTime
     */
    public function getFechaNotificacion()
    {
        return $this->fechaNotificacion;
    }

    /**
     * Set diasEnvio
     *
     * @param \DateTime $diasEnvio
     *
     * @return Categorizacion
     */
    public function setDiasEnvio($diasEnvio)
    {
        $this->diasEnvio = $diasEnvio;

        return $this;
    }

    /**
     * Get diasEnvio
     *
     * @return \DateTime
     */
    public function getDiasEnvio()
    {
        return $this->diasEnvio;
    }

    /**
     * Set dispDesestimacion
     *
     * @param integer $dispDesestimacion
     *
     * @return Categorizacion
     */
    public function setDispDesestimacion($dispDesestimacion)
    {
        $this->dispDesestimacion = $dispDesestimacion;

        return $this;
    }

    /**
     * Get dispDesestimacion
     *
     * @return int
     */
    public function getDispDesestimacion()
    {
        return $this->dispDesestimacion;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Categorizacion
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}


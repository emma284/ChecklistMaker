<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario
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
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

        
    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=100)
     */
    private $apellido;
      
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;
       
    /**
     * @var string
     *
     * @ORM\Column(name="iup", type="string", length=100)
     */
    private $iup;
        
    /**
     * @var string
     *
     * @ORM\Column(name="cuil", type="string", length=100)
     */
    private $cuil;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;

    

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     *
     * @return  string
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @param  string  $apellido
     *
     * @return  self
     */ 
    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of iup
     *
     * @return  string
     */ 
    public function getIup()
    {
        return $this->iup;
    }

    /**
     * Set the value of iup
     *
     * @param  string  $iup
     *
     * @return  self
     */ 
    public function setIup(string $iup)
    {
        $this->iup = $iup;

        return $this;
    }

    /**
     * Get the value of cuil
     *
     * @return  string
     */ 
    public function getCuil()
    {
        return $this->cuil;
    }

    /**
     * Set the value of cuil
     *
     * @param  string  $cuil
     *
     * @return  self
     */ 
    public function setDocumento(string $cuil)
    {
        $this->cuil = $cuil;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     *
     * @return  self
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    public function getUsername()
    {
        return $this->email;
    }
    
    public function getSalt()
    {
        return null;
    }
    
    public function getRoles()
    {
    // En este caso definimos un rol fijo, en el caso de que tengamos un campo role en la tabla de la BBDD    tendríamos que hacer $this->getRole()
        return array('ROLE_USER');
    }
    
    public function eraseCredentials()
    {
    }

}

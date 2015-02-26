<?php

namespace Clobb\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use JMS\Serializer\Annotation as JMS;


/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="email_UNIQUE", columns={"email"})}, indexes={@ORM\Index(name="fk_usuario_perfil1_idx", columns={"fk_perfil"}), @ORM\Index(name="fk_usuario_pessoa1_idx", columns={"fk_pessoa"})})
 * @ORM\Entity(repositoryClass="Clobb\AppBundle\Repository\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface, \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=80, precision=0, scale=0, nullable=false, unique=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=128, precision=0, scale=0, nullable=false, unique=false)
     *
     * @JMS\Exclude
     */
    private $senha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $dataCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_exclusao", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $dataExclusao;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=128, precision=0, scale=0, nullable=true, unique=false)
     */
    private $token;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->areaArea = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Usuario
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     * @return Usuario
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime 
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set dataExclusao
     *
     * @param \DateTime $dataExclusao
     * @return Usuario
     */
    public function setDataExclusao($dataExclusao)
    {
        $this->dataExclusao = $dataExclusao;

        return $this;
    }

    /**
     * Get dataExclusao
     *
     * @return \DateTime 
     */
    public function getDataExclusao()
    {
        return $this->dataExclusao;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Usuario
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Get areaArea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAreaArea()
    {
        return $this->areaArea;
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->nome;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->senha;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array($this->getFkPerfil()->getRole());
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->idUsuario,
            $this->nome,
            $this->senha,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->idUsuario,
            $this->nome,
            $this->senha,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return empty($this->dataExclusao);
    }
}

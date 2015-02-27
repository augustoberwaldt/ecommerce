<?php

namespace Clobb\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MgnUser
 * @ORM\Table(name="mgn_user", uniqueConstraints={@ORM\UniqueConstraint(name="username_UNIQUE", columns={"username"})}, indexes={@ORM\Index(name="user_role_id_fk", columns={"role_id"}))
 * @ORM\Entity(repositoryClass="Clobb\AppBundle\Repository\MgnRolesRepository")
 */
class MgnUser
{
//    /**
//     * @var integer
//     *
//     * @ORM\Column(name="id", type="integer")
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="AUTO")
//     */
//    private $id;

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="username", type="string", length=20)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer")
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=120)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=120)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="token_forgot_password", type="string", length=128)
     */
    private $tokenForgotPassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="token_validate", type="datetime")
     */
    private $tokenValidate;


//    /**
//     * Get id
//     *
//     * @return integer
//     */
//    public function getId()
//    {
//        return $this->id;
//    }

//    /**
//     * Set username
//     *
//     * @param string $username
//     * @return MgnUser
//     */
//    public function setUsername($username)
//    {
//        $this->username = $username;
//
//        return $this;
//    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     * @return MgnUser
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer 
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MgnUser
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return MgnUser
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
     * Set password
     *
     * @param string $password
     * @return MgnUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set tokenForgotPassword
     *
     * @param string $tokenForgotPassword
     * @return MgnUser
     */
    public function setTokenForgotPassword($tokenForgotPassword)
    {
        $this->tokenForgotPassword = $tokenForgotPassword;

        return $this;
    }

    /**
     * Get tokenForgotPassword
     *
     * @return string 
     */
    public function getTokenForgotPassword()
    {
        return $this->tokenForgotPassword;
    }

    /**
     * Set tokenValidate
     *
     * @param \DateTime $tokenValidate
     * @return MgnUser
     */
    public function setTokenValidate($tokenValidate)
    {
        $this->tokenValidate = $tokenValidate;

        return $this;
    }

    /**
     * Get tokenValidate
     *
     * @return \DateTime 
     */
    public function getTokenValidate()
    {
        return $this->tokenValidate;
    }
}

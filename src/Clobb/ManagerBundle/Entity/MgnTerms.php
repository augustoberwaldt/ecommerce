<?php

namespace Clobb\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MgnTerms
 *
 * @ORM\Table(name="mgn_terms", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class MgnTerms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="term_key", type="string", length=45, nullable=false)
     */
    private $termKey;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="blob", nullable=false)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set termKey
     *
     * @param string $termKey
     * @return MgnTerms
     */
    public function setTermKey($termKey)
    {
        $this->termKey = $termKey;

        return $this;
    }

    /**
     * Get termKey
     *
     * @return string 
     */
    public function getTermKey()
    {
        return $this->termKey;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return MgnTerms
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return MgnTerms
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}

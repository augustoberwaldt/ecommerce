<?php

namespace Clobb\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MgnPlan
 *
 * @ORM\Table(name="mgn_plan", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class MgnPlan
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
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="gateway_id", type="integer", nullable=false)
     */
    private $gatewayId;

    /**
     * @var string
     *
     * @ORM\Column(name="gateway_code", type="string", length=45, nullable=false)
     */
    private $gatewayCode;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=30, nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modificated_at", type="datetime", nullable=true)
     */
    private $modificatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deactivated_at", type="datetime", nullable=true)
     */
    private $deactivatedAt;



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
     * Set name
     *
     * @param string $name
     * @return MgnPlan
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
     * Set gatewayId
     *
     * @param integer $gatewayId
     * @return MgnPlan
     */
    public function setGatewayId($gatewayId)
    {
        $this->gatewayId = $gatewayId;

        return $this;
    }

    /**
     * Get gatewayId
     *
     * @return integer 
     */
    public function getGatewayId()
    {
        return $this->gatewayId;
    }

    /**
     * Set gatewayCode
     *
     * @param string $gatewayCode
     * @return MgnPlan
     */
    public function setGatewayCode($gatewayCode)
    {
        $this->gatewayCode = $gatewayCode;

        return $this;
    }

    /**
     * Get gatewayCode
     *
     * @return string 
     */
    public function getGatewayCode()
    {
        return $this->gatewayCode;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MgnPlan
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return MgnPlan
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return MgnPlan
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set modificatedAt
     *
     * @param \DateTime $modificatedAt
     * @return MgnPlan
     */
    public function setModificatedAt($modificatedAt)
    {
        $this->modificatedAt = $modificatedAt;

        return $this;
    }

    /**
     * Get modificatedAt
     *
     * @return \DateTime 
     */
    public function getModificatedAt()
    {
        return $this->modificatedAt;
    }

    /**
     * Set deactivatedAt
     *
     * @param \DateTime $deactivatedAt
     * @return MgnPlan
     */
    public function setDeactivatedAt($deactivatedAt)
    {
        $this->deactivatedAt = $deactivatedAt;

        return $this;
    }

    /**
     * Get deactivatedAt
     *
     * @return \DateTime 
     */
    public function getDeactivatedAt()
    {
        return $this->deactivatedAt;
    }
}

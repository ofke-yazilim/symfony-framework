<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\currencyRepository")
 */
class currency
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="location", type="integer")
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="selling", type="decimal", precision=10, scale=2)
     */
    private $selling;

    /**
     * @var string
     *
     * @ORM\Column(name="buying", type="decimal", precision=10, scale=2)
     */
    private $buying;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


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
     * Set type
     *
     * @param string $type
     * @return currency
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set location
     *
     * @param integer $location
     * @return currency
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return integer 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set selling
     *
     * @param string $selling
     * @return currency
     */
    public function setSelling($selling)
    {
        $this->selling = $selling;

        return $this;
    }

    /**
     * Get selling
     *
     * @return string 
     */
    public function getSelling()
    {
        return $this->selling;
    }

    /**
     * Set buying
     *
     * @param string $buying
     * @return currency
     */
    public function setBuying($buying)
    {
        $this->buying = $buying;

        return $this;
    }

    /**
     * Get buying
     *
     * @return string 
     */
    public function getBuying()
    {
        return $this->buying;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return currency
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}

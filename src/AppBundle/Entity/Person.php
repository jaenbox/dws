<?php
// src/AppBundle/Entity/Person.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="person")
 */
class Person {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	/**
	 * @ORM\Column(type="string")
	 * @Assert\NotBlank()
	 */
	protected $name;
	/**
	 * @ORM\Column(type="integer")
	 * @Assert\Range(
	 * 		min = "18",
	 *  	max = "90",
	 *  	minMessage = "Debe de ser mayor de 18.",
	 *  	maxMessage = "Debe ser menor de 90"
	 * )
	 */
	protected $age;
	/**
	 * @ORM\Column(type="date")
	 * @Assert\Date()
	 * @Assert\NotBlank()
	 */
	protected $birthDate;
	/**
	 * @ORM\Column(type="integer")
	 * @Assert\Range(
	 * 		min = "100",
	 * 		max = "300",
	 * 		minMessage = "La altura mínima es de 100cm",
	 * 		maxMessage = "La altura máxima es de 300cm"
	 * )
	 */
	protected $height;
	/**
	 * @ORM\Column(type="string")
	 * @Assert\NotBlank()
	 * @Assert\Email(
	 * 		message = "El email '{{ value }}' no es válido",
	 * 		checkMX = true
	 * )
	 */
	protected $email;
	/**
	 * @ORM\Column(type="integer")
	 * @Assert\NotBlank()
	 * @Assert\Regex(
	 * 		pattern = "/\d{6}|\d{9}/",
	 * 		message = "Deben de ser 6 o 9 números"
	 * ) 
	 */
	protected $phone;
	/**
	 * @ORM\Column(type="string")
	 * @Assert\NotBlank()
	 * @Assert\Choice(
	 * 		choices = {"m", "f"}
	 * ) 
	 */
	protected $gender;
	/**
	 * @ORM\Column(type="integer")
	 * @Assert\Range(
	 * 		min = "0",
	 * 		max = "20",
	 * 		minMessage = "No se pueden tener hijos negativos",
	 * 		maxMessage = "Demasiados hijos"
	 * )
	 */
	protected $descends;
	/**
	 * @ORM\Column(type="integer")
	 * 
	 */
	protected $vehicle;
	/**
	 * @ORM\Column(type="string")
	 * @Assert\Language
	 * 
	 */
	protected $preferredLanguage;
	/**
	 * @ORM\Column(type="integer")
	 * @Assert\Choice(
	 * 		choices = { "none", "1", "2", "3", "4", "5", "6"}
	 * )
	 */
	protected $englishLevel;
	/**
	 * @ORM\Column(type="string")
	 * @Assert\Url()
	 */
	protected $personalWebSite;
	/**
	 * @ORM\Column(type="string")
	 * @Assert\CardScheme(schemes = {"VISA", "MASTERCARD", "MAESTRO"}, message = "El número de tu tarjeta de crédito no es válido.")
	 */
	protected $cardNumber;
	/**
	 * @ORM\Column(type="string")
	 * @Assert\Iban(message="Introduce un IBAN correcto")
	 */
	protected $IBAN;	

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
     *
     * @return Person
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
     * Set age
     *
     * @param integer $age
     *
     * @return Person
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Person
     */
    public function setBirthDate(\DateTime $birthDate = null)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return Person
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Person
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
     * Set phone
     *
     * @param integer $phone
     *
     * @return Person
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set descends
     *
     * @param integer $descends
     *
     * @return Person
     */
    public function setDescends($descends)
    {
    	$this->descends = $descends;
    
    	return $this;
    }

    /**
     * Get descends
     *
     * @return \number
     */
    public function getDescends()
    {
        return $this->descends;
    }

    /**
     * Set vehicle
     *
     * @param integer $vehicle
     *
     * @return Person
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get vehicle
     *
     * @return integer
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Set preferredLanguage
     *
     * @param string $preferredLanguage
     *
     * @return Person
     */
    public function setPreferredLanguage($preferredLanguage)
    {
        $this->preferredLanguage = $preferredLanguage;

        return $this;
    }

    /**
     * Get preferredLanguage
     *
     * @return string
     */
    public function getPreferredLanguage()
    {
        return $this->preferredLanguage;
    }

    /**
     * Set englishLevel
     *
     * @param integer $englishLevel
     *
     * @return Person
     */
    public function setEnglishLevel($englishLevel)
    {
        $this->englishLevel = $englishLevel;

        return $this;
    }

    /**
     * Get englishLevel
     *
     * @return integer
     */
    public function getEnglishLevel()
    {
        return $this->englishLevel;
    }

    /**
     * Set personalWebSite
     *
     * @param string $personalWebSite
     *
     * @return Person
     */
    public function setPersonalWebSite($personalWebSite)
    {
        $this->personalWebSite = $personalWebSite;

        return $this;
    }

    /**
     * Get personalWebSite
     *
     * @return string
     */
    public function getPersonalWebSite()
    {
        return $this->personalWebSite;
    }

    /**
     * Set cardNumber
     *
     * @param string $cardNumber
     *
     * @return Person
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get cardNumber
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set iBAN
     *
     * @param string $iBAN
     *
     * @return Person
     */
    public function setIBAN($iBAN)
    {
        $this->IBAN = $iBAN;

        return $this;
    }

    /**
     * Get iBAN
     *
     * @return string
     */
    public function getIBAN()
    {
        return $this->IBAN;
    }
}

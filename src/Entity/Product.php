<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */

class User {
    /**
     * @ORM\Column(type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $email;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }
    /**
     * @ORM\Column(type="string", length=30)
     */
    private $firstName;
    /**
     * @ORM\Column(type="string", length=30)
     */
    private $lastName;
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $password;
    /**
     * @ORM\Column(type="date")
     */
    private $birthDate;
    /**
     *
     * @ORM\Column(type="string", length=100)
     */
    private $address;
}
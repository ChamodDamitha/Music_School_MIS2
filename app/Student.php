<?php
/**
 * Created by PhpStorm.
 * User: Chamod
 * Date: 10/4/2016
 * Time: 11:17 PM
 */

namespace App;


class Student
{
    private $firstName;
    private $lastName;
    private $gender;
    public function __construct($firstName,$lastName,$gender)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->gender=$gender;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }


}
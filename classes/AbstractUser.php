<?php
/**
 * Provide base functionality of users.
 * Override in subclasses as needed
 */
abstract class AbstractUser
{
    // Properties
    public $id = 0;
    public $login = '';
    public $email = '';
    public $password = '';
    public $firstName = '';
    public $lastName = '';


    public function __construct(){
        // intentionlly blank
    }


    public function getRealName(){
        return $this->firstName . ' ' . $this->lastName;
    }

}


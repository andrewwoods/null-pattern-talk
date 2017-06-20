<?php

class NullAccount implements AccountInterface {

    public function __construct($username = false, $email = false)
    {
        // Intentionally empty
    }

    public function getUsername(){
        return '';
    }

    public function getEmail(){
        return '';
    }
}


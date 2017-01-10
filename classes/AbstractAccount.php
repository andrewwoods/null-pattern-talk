<?php

abstract class AbstractAccount
{
    // Properties
    protected $login = '';
    protected $email = '';
    protected $password = '';

    // Capabilities
    protected $canPublish = false;
    protected $canEditOtherUsersPosts = false;
    protected $canEditOwnPosts = false;


    public function __construct($login, $email){
        $this->login = $login;
        $this->email = $email;
    }

    public function setPassword($newPassword){
        $this->password = $newPassword;
    }

    public function getUsername(){
        return $this->login;
    }

    public function getPassword(){
        return $this->password;
    }
}


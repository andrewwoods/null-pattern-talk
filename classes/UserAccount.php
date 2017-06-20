<?php

class UserAccount implements AccountInterface {

    /**
     * @var string the login name of the user
     */
    protected $username = '';

    /**
     * @var string email address
     */
    protected $email = '';

    //
    // Capabilities
    //

    /**
     * @var bool
     */
    protected $canPublish = true;

    /**
     * @var bool
     */
    protected $canEditOwnPosts = true;

    /**
     * UserAccount constructor.
     *
     * @param $login
     * @param $email
     */
    public function __construct($login, $email)
    {
       $this->username = $login;
       $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

}



<?php

/**
 *
 */
interface AccountInterface
{
    public function __construct($username, $email);

    public function getUsername();

    public function getEmail();
}
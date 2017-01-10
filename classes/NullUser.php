<?php
/**
 * Provide the NULL functionality for the user. Usually that means
 * returning empty strings, but it doesn't have to be.
 */
class NullUser extends AbstractUser
{
    public $login = 'guest';

    public function getRealName(){
        return '';
    }
}


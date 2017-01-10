<?php
// static-account-factory.php
require_once "classes/AbstractAccount.php";
require_once "classes/AuthorAccount.php";
require_once "classes/AdminAccount.php";
require_once "classes/NullAccount.php";

class AccountFactory
{
    public static function create($role, $login, $email)
	{
        if ('author' === $role) {
            return new AuthorAccount($login, $email);
        }

        if ('admin' === $role) {
            return new AdminAccount($login, $email);
        }

        return new NullAccount($login, $email);
    }
}


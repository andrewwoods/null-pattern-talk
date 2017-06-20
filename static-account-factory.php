<?php
// static-account-factory.php
require_once "classes/AccountInterface.php";
require_once "classes/UserAccount.php";
require_once "classes/AdminAccount.php";
require_once "classes/NullAccount.php";

class AccountFactory
{
    public static function create($role, $login, $email)
	{
        if ('user' === $role) {
            return new UserAccount($login, $email);
        }

        if ('admin' === $role) {
            return new AdminAccount($login, $email);
        }

        return new NullAccount($login, $email);
    }
}


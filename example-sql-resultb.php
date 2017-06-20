<?php
/**
 * This example makes use of the Null Object pattern with MySQL
 */
require_once 'loader.php';

$idOfFelicity = 2;
$idOfUnknownPerson = 999999;

$userSql = new UserSql($db);

$felicity = $userSql->getUserByIdAlternate($idOfFelicity);
echo "Felicity uses the {$felicity->login} account\n\n\n";

$unknown = $userSql->getUserByIdAlternate($idOfUnknownPerson);

if ( null != $unknown) {
    echo "The unknown person uses the {$unknown->login} account\n";
}





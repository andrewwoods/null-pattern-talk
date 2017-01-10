<?php
/**
 * This example makes use of the Null Object pattern with MySQL
 */
require_once "database.php";
require_once "classes/AbstractUser.php";
require_once "classes/User.php";
require_once "classes/NullUser.php";
require_once "classes/UserSql.php";

$idOfFelicity = 2;
$idOfWillow = 5;
$idOfUnknownPerson = 999999;

$userSql = new UserSql();
$userSql->setDbHandle($db);

$felicity = $userSql->getUserByIdAlternate($idOfFelicity);
echo "Felicity uses the {$felicity->login} account\n\n\n";

$unknown = $userSql->getUserByIdAlternate($idOfUnknownPerson);

echo "The unknown person uses the {$unknown->login} account\n";





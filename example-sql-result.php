<?php
require_once "database.php";
require_once "classes/UserSql.php";

$idOfFelicity = 2;
$idOfWillow = 5;
$idOfUnknownPerson = 999999;

$userSql = new UserSql();
$userSql->setDbHandle($db);

$felicity = $userSql->getUserById($idOfFelicity);
echo "Felicity uses the {$felicity->login} account\n\n\n";

$unknown = $userSql->getUserById($idOfUnknownPerson);

//
// the next line will cause an error
//
echo "The unknown person uses the {$unknown->login} account\n";





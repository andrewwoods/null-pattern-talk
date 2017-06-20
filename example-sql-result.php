<?php
require_once __DIR__ . "/loader.php";

$idOfFelicity = 2;
$idOfUnknownPerson = 999;

$userSql = new UserSql($db);

$felicity = $userSql->getUserById($idOfFelicity);
echo "Felicity uses the {$felicity->login} account\n\n\n";

$unknown = $userSql->getUserById($idOfUnknownPerson);

if ( null != $unknown) {
    echo "The unknown person uses the {$unknown->login} account\n";
}





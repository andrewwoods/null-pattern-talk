<?php

require_once "static-account-factory.php";

$admin   = AccountFactory::create('admin', 'awoods', 'andrew@seaphp.com');
$user    = AccountFactory::create('user', 'alena', 'alena@pdxphp.com');
$unknown = AccountFactory::create('manager', 'jason', 'jason@bourne.com');

echo 'The "admin" account' . PHP_EOL;
print_r($admin);

echo 'The "user" account' . PHP_EOL;
print_r($user);

echo 'The "unknown" account' . PHP_EOL;
print_r($unknown);





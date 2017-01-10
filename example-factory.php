<?php

require_once "static-account-factory.php";

$admin = AccountFactory::create('admin', 'tessa', 'tessa@seaphp.com');
$member = AccountFactory::create('author', 'awoods', 'andrew@seaphp.com');
$unknown = AccountFactory::create('generic', 'jason', 'jason@bourne.com');

print_r($admin);
print_r($member);
print_r($unknown);





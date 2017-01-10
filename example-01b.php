<?php
// example-01b.php
$account = new StdClass();
$account->name = 'Andrew';

echo "Hello {$account->name}\n";

$badAccount = null;
echo "Hello {$badAccount->name}\n";



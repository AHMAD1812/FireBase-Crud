<?php 
require __DIR__."/vendor/autoload.php";

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

//$serviceAccount= ServiceAccount::fromJsonFile();

$firebase = (new Factory)
    ->withServiceAccount(__DIR__.'/adminSDK.json')
    ->withDatabaseUri('https://phpcrudfirebase-default-rtdb.firebaseio.com/');

$database=$firebase->createDatabase();

?> 
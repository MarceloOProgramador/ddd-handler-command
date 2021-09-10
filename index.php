<?php 

require "./vendor/autoload.php";

use app\Entities\User;
use app\UseCases\User\Handler\UserStoreHandler;
use app\UseCases\User\Command\SendEmailCommand;

$user = new User;
$user->name = "Marcelo";
$user->password = "123456";
$user->phone = "12996034457";
$user->email = "marcelo@memocashweb.com";

$store_user = new UserStoreHandler($user, new SendEmailCommand($user->email, "contato@memocash.com", "Estudando Command and Hanndle"));



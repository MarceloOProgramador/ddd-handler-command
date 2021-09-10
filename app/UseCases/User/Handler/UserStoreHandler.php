<?php declare(strict_types = 1);

namespace app\UseCases\User\Handler;

use app\UseCases\User\Handler\UserHandlerInterface;
use app\UseCases\User\Command\CommandInterface;
use app\UseCases\User\Command\SendEmailCommand;

class UserStoreHandler implements UserHandlerInterface
{

    public function handler(CommandInterface $user, SendEmailCommand $email = null)
    {
        //Create user
        $user->execute();

        if($email)
            $email->execute();
    }
}
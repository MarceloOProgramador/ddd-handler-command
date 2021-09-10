<?php 

declare(strict_types = 1);

namespace App\UseCases\User\Handler;

use App\UseCases\User\Command\SendEmailCommand;
use app\UseCases\User\Command\CommandInterface;

interface UserHandlerInterface
{
    public function handler(CommandInterface $command, SendEmailCommand $email = null);
}
<?php

declare(strict_types=1);

namespace app\UseCases\User\Command;

use app\UseCases\User\Command\CommandInterface;
use app\Entities\User;

class UserStoreCommand implements CommandInterface
{
    public function __construct(private User $user)
    {}

    public function execute()
    {
        echo "O usuário {$this->user->name} foi criado com sucesso" . PHP_EOL;
    }
}
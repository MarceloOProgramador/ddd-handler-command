<?php declare(strict_types = 1);

namespace App\UseCases\User\Command;

use app\UseCases\User\Command\CommandInterface;

class SendEmailCommand implements CommandInterface
{
    public function __construct(
        private string $from,
        private string $to,
        private string $message
    )
    {}

    public function execute()
    {
        echo "email" . PHP_EOL;
        echo "from: {$this->from}" . PHP_EOL;
        echo "to: {$this->to}" . PHP_EOL;
        echo "message: {$this->message}" . PHP_EOL;
    }
}


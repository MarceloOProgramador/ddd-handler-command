<?php declare(strict_types = 1);

namespace app\Http\Controllers;

class UserController
{
    public function store(array $datas)
    {

        return json_encode(["success" => "Usuario criado!"]);
    }
}
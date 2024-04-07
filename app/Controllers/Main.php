<?php

namespace app\Controllers;

use app\Helpers\Layouts;
use app\Traits\Database\Query\Select;

class Main {

    use Select;

    public function index()
    {
        $data = [
            'title' => 'Title my page',
        ];

        Layouts::render([
            'templates/header',
            'users/index',
            'templates/footer',
        ], $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Cadastro',
        ];

        Layouts::render([
            'templates/header',
            'users/Auth/register',
            'templates/footer',
        ], $data);
    }
}
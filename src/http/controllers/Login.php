<?php

namespace App\http\controllers;

use Odin\http\controller\Controller;
use Odin\view\View;

class Login extends Controller
{
    use View;

    /**
     * Renderiza a view para o formulário de login
     * @return void
     */
    public function form()
    {
        View::render($this, "login.php");
    }
}

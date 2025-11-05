<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function view($page = 'home')
    {
        $file = APPPATH . "Views/pages/{$page}.php";

        if (!is_file($file)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Page '{$page}' not found");
        }

        return view("pages/{$page}");
    }
}



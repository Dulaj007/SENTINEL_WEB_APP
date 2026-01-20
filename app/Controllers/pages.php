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

        $data = [];

        // Load portfolio data from JSON if viewing portfolio page
        if ($page === 'portfolio') {
            $jsonData = file_get_contents(APPPATH . 'Data/portfolio.json');
            $portfolioData = json_decode($jsonData, true);
            $data['portfolioProjects'] = $portfolioData;
        }

        return view("pages/{$page}", $data);
    }
}



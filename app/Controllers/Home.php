<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load meta data
        $metaData = json_decode(file_get_contents(APPPATH.'Data/meta.json'), true);
        $data['meta'] = $metaData['home']; // Pass home page meta data

        // Load services JSON
        $jsonData = file_get_contents(APPPATH . 'Data/services.json');
        $services = json_decode($jsonData, true);
        $data['services'] = $services;

        // Return home view with all data
        return view('pages/home', $data);
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
{
    $metaData = json_decode(file_get_contents(APPPATH.'Data/meta.json'), true);
    $data['meta'] = $metaData['home']; // Pass home page meta data

    return view('pages/home', $data);
}

}

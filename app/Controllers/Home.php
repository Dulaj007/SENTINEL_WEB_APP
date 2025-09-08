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

        // Load work-home JSON
        $jsonData = file_get_contents(APPPATH . 'Data/work-home.json');
        $workHomeData = json_decode($jsonData, true);
        $data['workHomeData'] = $workHomeData;

        // Load insights JSON
        $jsonData = file_get_contents(APPPATH . 'Data/insights-home.json');
        $insightsData = json_decode($jsonData, true);
        $data['insightsData'] = $insightsData;

        // Load Testimonials-home JSON
        $jsonData = file_get_contents(APPPATH . 'Data/Testimonials-home.json');
        $testimonialsData = json_decode($jsonData, true);
        $data['testimonialsData'] = $testimonialsData; 

        // Return home view with all data
        return view('pages/home', $data);
    }
}

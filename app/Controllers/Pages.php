<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | JustRent'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | JustRent'
        ];

        return view('pages/about', $data);
    }

    public function search()
    {
        $data = [
            'title' => 'Search | JustRent'
        ];

        return view('pages/search', $data);
    }
}

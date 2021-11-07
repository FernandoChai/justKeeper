<?php

namespace App\Controllers;

use App\Models\BookModel;

class Pages extends BaseController
{
    protected $bookModel;

    public function __construct()
    {

        $this->bookModel = new BookModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | JustKeeper',
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('pages/home', $data);
    }
}

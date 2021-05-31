<?php

namespace App\Controllers;

use App\Models\BookModel;

class Booking extends BaseController
{
    protected $bookModel;
    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        $book = $this->bookModel->getBooking();

        $data = [
            'title' => 'Booking | JustRent',
            'book' => $book->paginate(3, 'book'),
            'pager' => $this->bookModel->pager,
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('booking/index', $data);
    }

    public function confirmation()
    {

        if ($this->request->getvar('confirms') == '1') {

            $this->bookModel->save([
                'id' => $this->request->getVar('bookId'),
                'status' => 1
            ]);

            session()->setFlashdata('pesan', 'Success confirm order!');
        }

        if ($this->request->getvar('cancels') == '1') {

            $this->bookModel->save([
                'id' => $this->request->getVar('bookId'),
                'status' => 3
            ]);
            session()->setFlashdata('pesan', 'Order canceled!');
        }

        if ($this->request->getvar('ends') == '1') {

            $this->bookModel->save([
                'id' => $this->request->getVar('bookId'),
                'status' => 2
            ]);
            session()->setFlashdata('pesan', 'Success to finish order!');
        }

        return redirect()->to('/user/offered');
    }
}

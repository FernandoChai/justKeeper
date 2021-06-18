<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\ServiceModel;
use App\Models\ReviewModel;
use App\Models\BookModel;

class Admin extends BaseController
{
    protected $userModel, $serviceModel, $reviewModel, $bookModel;
    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->serviceModel = new ServiceModel();
        $this->reviewModel = new ReviewModel();
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        if (in_groups('user')) {
            return redirect()->to('/');
        }

        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

        $key = $this->request->getVar('keyword');

        if ($key) {
            $allUser = $this->userModel->search($key);
        } else {
            $allUser = $this->userModel->getAllUser();
        }

        $data = [
            'title' => 'User List | JustRent',
            'allUser' => $allUser->paginate(5, 'users'),
            'pager' => $this->userModel->pager,
            'currPage' => $currentPage
        ];

        return view('Admin/index', $data);
    }

    public function detail($id = 0)
    {
        if (in_groups('user')) {
            return redirect()->to('/');
        }

        $userData = $this->userModel->getUserOnlyById($id);

        if (!$userData) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'User Detail | JustRent',
            'userDetail' => $userData,

        ];

        return view('Admin/detail', $data);
    }

    public function service($id = 0)
    {
        if (in_groups('user')) {
            return redirect()->to('/');
        }

        $userData = $this->userModel->getUserOnlyById($id);

        if (!$userData) {
            return redirect()->to('/');
        }

        $service = $this->serviceModel->getService($userData['slug']);


        if (!$service) {
            $rate = 0;
        } else {
            $rate = $this->reviewModel->getRate($service->id);
        }

        $data = [
            'title' => 'Service | JustRent',
            'id' => $id,
            'service' => $service,
            'avgRate' => $rate
        ];
        return view('Admin/service', $data);
    }

    public function booking($id = 0)
    {
        if (in_groups('user')) {
            return redirect()->to('/');
        }

        $userData = $this->userModel->getUserOnlyById($id);

        if (!$userData) {
            return redirect()->to('/');
        }

        $book = $this->bookModel->getBookingbyId($id);

        $currentPage = $this->request->getVar('page_book') ? $this->request->getVar('page_book') : 1;


        $data = [
            'title' => 'Booking History | JustRent',
            'book' => $book->paginate(5, 'book'),
            'id' => $id,
            'pager' => $this->bookModel->pager,
            'currPage' => $currentPage
        ];

        return view('Admin/booking', $data);
    }

    public function edit()
    {
        if (in_groups('user')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Edit Profile | JustRent',
            'validation' => \config\Services::validation(),
        ];

        return view('Admin/edit', $data);
    }

    public function update($id = 0)
    {
        if (in_groups('user')) {
            return redirect()->to('/');
        }

        $username = 'required|is_unique[users.username]';

        $servicelama = $this->userModel->getUser(user()->id);

        if ($servicelama['username'] == $this->request->getVar('username')) {
            $username = 'required';
        }

        if (!$this->validate([
            'username' => [
                'rules' => $username,
                'errors' => [
                    'required' => '{field} must be filled!',
                    'is_unique' => '{field} already registered'
                ]
            ],
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'dob' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be choosen!'
                ]
            ],
            'picture' => [
                'rules' => 'max_size[picture, 1024]|is_image[picture]|mime_in[picture,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File image must not more than 1mb',
                    'is_image' => 'The file you selected is not an image',
                    'mime_in' => 'The file you selected is not an image'

                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin/edit')->withInput();
        }

        $picture = $this->request->getfile('picture');

        if ($picture->getError() == 4) {
            $pictureName = user()->picture;
        } else {
            $pictureName = $picture->getRandomName();
            $picture->move('Img', $pictureName);

            if (!(user()->picture == 'profile.png')) {

                unlink('Img/' . user()->picture);
            }
        }

        $slug = url_title($this->request->getVar('name'), '-', true);

        $this->userModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'dob' => $this->request->getVar('dob'),
            'address' => $this->request->getVar('address'),
            'gender' => $this->request->getVar('gender'),
            'slug' => $slug,
            'picture' => $pictureName
        ]);



        session()->setFlashdata('pesan', 'Data Success updated!');

        return redirect()->to('/');
    }
}

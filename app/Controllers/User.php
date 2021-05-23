<?php

namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Profile | JustRent'
        ];

        return view('user/profile', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Profile | JustRent',
            'validation' => \config\Services::validation()
        ];

        return view('user/edit', $data);
    }

    public function update($id)
    {
        $username = 'required|is_unique[users.username]';

        $servicelama = $this->UserModel->getService(user()->id);

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
            ]

        ])) {
            $validation = \Config\Services::validation();

            // return redirect()->to('/service/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/User/edit')->withInput();
        }

        $this->UserModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'dob' => $this->request->getVar('dob'),
            'address' => $this->request->getVar('address'),
            'gender' => $this->request->getVar('gender'),
            'picture' => $this->request->getVar('picture')
        ]);

        session()->setFlashdata('pesan', 'Data Success updated!');

        return redirect()->to('/user');
    }

    public function offered()
    {
        $data = [
            'title' => 'Edit Profile | JustRent'
        ];

        if (!(user()->name && user()->dob && user()->gender && user()->address)) :
            session()->setFlashdata('pesan', 'You must finish your profile first');
            return redirect()->to('/user');
        endif;

        return view('user/offered', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\ServiceModel;
use App\Models\CategoryModel;
use App\Models\LocationModel;
use App\Models\BookModel;

class User extends BaseController
{
    protected $UserModel, $serviceModel, $locationModel, $categoryModel, $bookModel;
    public function __construct()
    {
        $this->UserModel = new UsersModel();
        $this->serviceModel = new ServiceModel();
        $this->categoryModel = new CategoryModel();
        $this->locationModel = new LocationModel();
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        if (in_groups('admin')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Profile | JustKeeper',
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('user/profile', $data);
    }

    public function edit()
    {
        if (in_groups('admin')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Edit Profile | JustKeeper',
            'validation' => \config\Services::validation(),
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('user/edit', $data);
    }

    public function update($id = 0)
    {
        if (in_groups('admin')) {
            return redirect()->to('/');
        }
        $username = 'required|is_unique[users.username]';

        $servicelama = $this->UserModel->getUser(user()->id);

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
            return redirect()->to('/User/edit')->withInput();
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

        $this->UserModel->save([
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

        return redirect()->to('/user');
    }

    public function offered()
    {
        if (in_groups('admin')) {
            return redirect()->to('/');
        }
        if (!(user()->name && user()->dob && user()->gender && user()->address)) :
            session()->setFlashdata('pesan', 'You must finish your profile first');
            return redirect()->to('/user');
        endif;

        $db      = \Config\Database::connect();
        $builder = $db->table('service');
        $builder->select('service.userId as userId, categoryValue, locationValue, price, description, service.id as id, slug, serviceStatus');
        $builder->join('users', 'users.id = userId');
        $builder->join('category', 'category.categoryId = service.category');
        $builder->join('location', 'location.locationId = service.location');
        $builder->where('users.id', user()->id);
        $query = $builder->get();

        $services = $query->getRow();

        $order = $this->bookModel->getOrder();

        $data = [
            'title' => 'Offered service | JustKepeer',
            'services' =>  $services,
            'order' => $order->paginate(1, 'order'),
            'pager' => $this->bookModel->pager,
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        if ($this->request->getvar('onService') == '1') {

            $this->serviceModel->save([
                'id' => $services->id,
                'serviceStatus' => 1
            ]);
            session()->setFlashdata('pesan', 'Success turn on service');
            return redirect()->to('/user/offered');
        }

        if ($this->request->getvar('offService') == '1') {
            $this->serviceModel->save([
                'id' => $services->id,
                'serviceStatus' => 0
            ]);
            session()->setFlashdata('pesan', 'Success turn off service');
            return redirect()->to('/user/offered');
        }

        return view('user/offered', $data);
    }


    public function add()
    {
        if (in_groups('admin')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Add Service| JustKeeper',
            'validation' => \config\Services::validation(),
            'category' => $this->categoryModel->findAll(),
            'location' => $this->locationModel->findAll(),
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('user/add', $data);
    }

    public function save()
    {
        if (in_groups('admin')) {
            return redirect()->to('/');
        }
        if (!$this->validate([
            'category' => [
                'rules' => 'in_list[2,3,4]',
                'errors' => [
                    'in_list' => 'category must be choosen!'
                ]
            ],
            'location' => [
                'rules' => 'in_list[2,3,4,5,6]',
                'errors' => [
                    'in_list' => 'location must be choosen!'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'check' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'checkbox must be checked'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/User/add')->withInput();
        }

        $this->serviceModel->save([
            'category' => $this->request->getVar('category'),
            'location' => $this->request->getVar('location'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'userId' => user()->id
        ]);

        session()->setFlashdata('pesan', 'Success create service!');

        return redirect()->to('/User/offered');
    }
}

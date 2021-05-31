<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\BookModel;
use App\Models\CategoryModel;
use App\Models\LocationModel;
use App\Models\RateModel;
use App\Models\ReviewModel;

class Service extends BaseController
{
    protected $serviceModel, $bookModel, $locationModel, $categoryModel, $reviewModel, $reviewRate;
    public function __construct()
    {
        $this->serviceModel = new ServiceModel();
        $this->bookModel = new BookModel();
        $this->categoryModel = new CategoryModel();
        $this->locationModel = new LocationModel();
        $this->reviewModel = new ReviewModel();
        $this->reviewRate = new RateModel();
    }

    // public function index()
    // {

    //     $data = [
    //         'title' => 'Daftar Service',
    //         'service' => $this->serviceModel->getService()
    //     ];

    //     return view('Service/index', $data);
    // }

    public function search()
    {
        $data = [
            'title' => 'Search | JustRent',
            'validation' => \config\Services::validation(),
            'category' => $this->categoryModel->findAll(),
            'location' => $this->locationModel->findAll(),
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('Service/search', $data);
    }

    public function result()
    {

        if (!$this->request->getVar('page')) {
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
                ]
            ])) {
                $validation = \Config\Services::validation();
                return redirect()->to('/Service/search')->withInput();
            }
        }

        $category = $this->request->getVar('category');
        $location = $this->request->getVar('location');

        $service = $this->serviceModel->searchService($category, $location);
        $data = [
            'title' => 'Result | JustRent',
            'service' => $service->paginate(6, 'service'),
            'pager' => $this->serviceModel->pager,
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('Service/result', $data);
    }

    public function detail($slug)
    {
        // $id = $this->request->getVar('id');
        $service = $this->serviceModel->getService($slug);
        $review = $this->reviewModel->getReview($service->id);

        $data = [
            'title' => 'Detail Service | JustRent',
            'service' => $service,
            'review' => $review->paginate(3, 'review'),
            'pager' => $this->reviewModel->pager,
            'avgRate' => $this->reviewModel->getRate($service->id),
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        if (empty($data['service'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Service ' . $slug . ' not found!');
        }

        return view('Service/detail', $data);
    }

    public function checkout($slug)
    {
        $data = [
            'title' => 'Checkout Service | JustRent',
            'service' => $this->serviceModel->getService($slug),
            'validation' => \config\Services::validation(),
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        if (empty($data['service'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Service ' . $slug . ' not found!');
        }

        return view('Service/checkout', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],

            'paymentMethod' => [
                'rules' => 'in_list[Cash]',
                'errors' => [
                    'in_list' => 'category must be choosen!'
                ]
            ]

        ])) {
            return redirect()->to('/service/checkout/' . $this->request->getVar('slug'))->withInput();
        }

        $this->bookModel->save([
            'status' => 4,
            'address' => $this->request->getVar('address'),
            'paymentMethod' => $this->request->getVar('paymentMethod'),
            'userId' => user()->id,
            'serviceId' => $this->request->getVar('id'),
        ]);

        // session()->setFlashdata('pesan', 'Data Success insert!');

        return redirect()->to('/Booking');
    }

    public function delete($id)
    {

        $this->serviceModel->delete($id);
        session()->setFlashdata('pesan', 'Service Success delete!');
        return redirect()->to('/User/offered');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Service | JustRent',
            'validation' => \config\Services::validation(),
            'service' => $this->serviceModel->getService($slug),
            'category' => $this->categoryModel->findAll(),
            'location' => $this->locationModel->findAll(),
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        return view('service/edit', $data);
    }


    public function update($id)
    {
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
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/service/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $this->serviceModel->save([
            'id' => $id,
            'category' => $this->request->getVar('category'),
            'location' => $this->request->getVar('location'),
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'userId' => user()->id
        ]);

        // $db      = \Config\Database::connect();
        // $builder = $db->table('review');
        // $builder->select('review.serviceId');
        // $builder->join('service', 'service.id = review.serviceId');
        // $builder->where('service.userId', user()->id);
        // $query = $builder->get();

        // $services = $query->getRow();


        // $this->reviewRate->delete($services->serviceId);

        session()->setFlashdata('pesan', 'Service success update!');

        return redirect()->to('/User/offered');
    }

    public function review($slug)
    {
        if (!(user()->name && user()->dob && user()->gender && user()->address)) :
            session()->setFlashdata('pesan', 'You must finish your profile first before post a review');
            return redirect()->to('/user');
        endif;

        $data = [
            'title' => 'Review Service | JustRent',
            'validation' => \config\Services::validation(),
            'review' => $this->reviewRate->findAll(),
            'slug' => $slug,
            'bookId' => $this->request->getVar('bookId'),
            'num' => $this->bookModel->getOrder()->countAllResults(),
        ];

        if (empty($data['slug'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Service ' . $slug . ' not found!');
        }
        return view('Service/review', $data);
    }

    public function comment($slug)
    {

        if (!$this->validate([
            'rate' => [
                'rules' => 'in_list[1,2,3,4,5]',
                'errors' => [
                    'in_list' => 'Review rate must be choosen!'
                ]
            ],
            'comment' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ]

        ])) {
            return redirect()->to('/Service/review/' . $slug)->withInput();
        }

        $service = $this->serviceModel->getService($slug);
        $serviceid = $service->id;

        $rate = $this->request->getVar('rate');
        $rateid = $this->reviewRate->getRateId($rate);


        $this->reviewModel->save([
            'reviewRate' => $rateid->rateId,
            'userId' => user()->id,
            'serviceId' => $serviceid,
            'comment' => $this->request->getVar('comment')
        ]);

        $this->bookModel->save([
            'id' => $this->request->getVar('bookId'),
            'status' => 5
        ]);

        session()->setFlashdata('pesan', 'Success Post review!');

        return redirect()->to('/Service/detail/' . $slug);
    }
}

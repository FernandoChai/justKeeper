<?php

namespace App\Controllers;

use App\Models\JustrentModel;

class Service extends BaseController
{
    protected $serviceModel;
    public function __construct()
    {
        $this->serviceModel = new JustrentModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Service',
            'service' => $this->serviceModel->getService()
        ];

        return view('Service/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Service',
            'service' => $this->serviceModel->getService($slug)
        ];

        if (empty($data['service'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Service ' . $slug . ' not found!');
        }

        return view('Service/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah data service',
            'validation' => \config\Services::validation()
        ];

        return view('Service/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[service.nama]',
                'errors' => [
                    'required' => '{field} must be filled!',
                    'is_unique' => '{field} already registered'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/service/create')->withInput()->with('validation', $validation);
            return redirect()->to('/service/create')->withInput();
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);

        $this->serviceModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'lokasi' => $this->request->getVar('lokasi'),
            'kategori' => $this->request->getVar('kategori'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan', 'Data Success insert!');

        return redirect()->to('/service');
    }

    public function delete($id)
    {
        $this->serviceModel->delete($id);
        session()->setFlashdata('pesan', 'Data Success delete!');
        return redirect()->to('/service');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form edit data service',
            'validation' => \config\Services::validation(),
            'service' => $this->serviceModel->getService($slug)
        ];

        return view('service/edit', $data);
    }


    public function update($id)
    {
        $nameRule = 'required|is_unique[service.nama]';

        $servicelama = $this->serviceModel->getService($this->request->getVar('slug'));

        if ($servicelama['nama'] == $this->request->getVar('nama')) {
            $nameRule = 'required';
        }

        if (!$this->validate([
            'nama' => [
                'rules' => $nameRule,
                'errors' => [
                    'required' => '{field} must be filled!',
                    'is_unique' => '{field} already registered'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ],
            'gambar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} must be filled!'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/service/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);

        $this->serviceModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'lokasi' => $this->request->getVar('lokasi'),
            'kategori' => $this->request->getVar('kategori'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan', 'Data Success update!');

        return redirect()->to('/service');
    }
}

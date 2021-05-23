<?php

namespace App\Models;

use CodeIgniter\Model;

class JustrentModel extends Model
{
    protected $table = 'service';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'lokasi', 'kategori', 'gambar'];

    public function getService($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}

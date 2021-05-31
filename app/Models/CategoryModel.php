<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $useTimestamps = true;
    // protected $allowedFields = ['username', 'name', 'dob', 'gender', 'address', 'picture', 'userId', 'slug'];

    // public function getUser($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}

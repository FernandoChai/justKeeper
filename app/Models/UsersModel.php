<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'name', 'dob', 'gender', 'address', 'picture', 'userId', 'slug'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getUserOnlyById($id = false)
    {
        return $this->where(['id' => $id])->first();
    }

    public function search($key)
    {
        $builder = $this->table('user');
        $builder->select('*');
        $builder->like('username', $key);
        $builder->join('auth_groups_users', 'user_id = id');
        $builder->where('group_id', '2');
        return $builder;
    }


    public function getAllUser()
    {
        $builder = $this->table('user');
        $builder->select('*');
        $builder->join('auth_groups_users', 'user_id = id');
        $builder->where('group_id', '2');
        $builder->orderBy('username', 'ASC');
        return $builder;
    }
}

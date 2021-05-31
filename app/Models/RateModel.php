<?php

namespace App\Models;

use CodeIgniter\Model;

class RateModel extends Model
{
    protected $table = 'reviewRate';
    protected $useTimestamps = true;
    // protected $allowedFields = ['username', 'name', 'dob', 'gender', 'address', 'picture', 'userId', 'slug'];

    public function getRateId($rate)
    {
        $builder = $this->table('reviewRate');
        $builder->select('rateId');
        $builder->where('rate', $rate);
        $query = $builder->get();
        return $query->getRow();
    }
}

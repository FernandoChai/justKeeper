<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'service';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'category', 'location', 'price', 'description', 'userId', 'serviceStatus'];

    public function searchService($category, $location)
    {
        $builder = $this->table('service');
        $builder->select('name, service.userId as userId, categoryValue as category, locationValue as location, price, description, users.picture as up, slug');
        $builder->join('users', 'users.id = userId');
        $builder->join('category', 'category.categoryId = service.category');
        $builder->join('location', 'location.locationId = service.location');
        $builder->where('category', $category);
        $builder->where('location', $location);

        return $builder;
    }

    public function getService($slug = false)
    {
        $builder = $this->table('service');
        $builder->select('name, service.id as id, category as catId, location as locId ,service.userId as userId, categoryValue as category, locationValue as location, price, description, users.picture as up, slug');
        $builder->join('users', 'users.id = userId');
        $builder->join('category', 'category.categoryId = service.category');
        $builder->join('location', 'location.locationId = service.location');
        $builder->where('slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }
}

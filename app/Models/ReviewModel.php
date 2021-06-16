<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'review';
    protected $useTimestamps = true;
    protected $allowedFields = ['reviewId', 'reviewRate', 'userId', 'serviceId', 'comment'];

    public function getReview($id)
    {
        $builder = $this->table('review');
        $builder->select('rate as reviewRate , review.userId as uId, review.serviceId as sId, comment, users.name as name, users.picture as picture');
        $builder->join('service', 'service.id = review.serviceId');
        $builder->join('users', 'users.id = review.userId');
        $builder->join('reviewRate', 'reviewRate.rateId = review.reviewRate');
        $builder->where('review.serviceId', $id);
        $builder->orderBy('reviewRate', 'DESC');

        return $builder;
    }

    public function getReviewby1star($id)
    {
        $builder = $this->table('review');
        $builder->select('rate as reviewRate , review.userId as uId, review.serviceId as sId, comment, users.name as name, users.picture as picture');
        $builder->join('service', 'service.id = review.serviceId');
        $builder->join('users', 'users.id = review.userId');
        $builder->join('reviewRate', 'reviewRate.rateId = review.reviewRate');
        $builder->where('review.serviceId', $id);
        $builder->where('rate', 1);
        // $builder->orderBy('reviewRate', 'DESC');

        return $builder;
    }

    public function getReviewby2star($id)
    {
        $builder = $this->table('review');
        $builder->select('rate as reviewRate , review.userId as uId, review.serviceId as sId, comment, users.name as name, users.picture as picture');
        $builder->join('service', 'service.id = review.serviceId');
        $builder->join('users', 'users.id = review.userId');
        $builder->join('reviewRate', 'reviewRate.rateId = review.reviewRate');
        $builder->where('review.serviceId', $id);
        $builder->where('rate', 2);


        return $builder;
    }

    public function getReviewby3star($id)
    {
        $builder = $this->table('review');
        $builder->select('rate as reviewRate , review.userId as uId, review.serviceId as sId, comment, users.name as name, users.picture as picture');
        $builder->join('service', 'service.id = review.serviceId');
        $builder->join('users', 'users.id = review.userId');
        $builder->join('reviewRate', 'reviewRate.rateId = review.reviewRate');
        $builder->where('review.serviceId', $id);
        $builder->where('rate', 3);


        return $builder;
    }
    public function getReviewby4star($id)
    {
        $builder = $this->table('review');
        $builder->select('rate as reviewRate , review.userId as uId, review.serviceId as sId, comment, users.name as name, users.picture as picture');
        $builder->join('service', 'service.id = review.serviceId');
        $builder->join('users', 'users.id = review.userId');
        $builder->join('reviewRate', 'reviewRate.rateId = review.reviewRate');
        $builder->where('review.serviceId', $id);
        $builder->where('rate', 4);


        return $builder;
    }
    public function getReviewby5star($id)
    {
        $builder = $this->table('review');
        $builder->select('rate as reviewRate , review.userId as uId, review.serviceId as sId, comment, users.name as name, users.picture as picture');
        $builder->join('service', 'service.id = review.serviceId');
        $builder->join('users', 'users.id = review.userId');
        $builder->join('reviewRate', 'reviewRate.rateId = review.reviewRate');
        $builder->where('review.serviceId', $id);
        $builder->where('rate', 5);


        return $builder;
    }

    public function getRate($id)
    {
        $builder = $this->table('review');
        $builder->selectAvg('rate');
        $builder->join('reviewRate', 'reviewRate.rateId = review.reviewRate');
        $builder->where('review.serviceId', $id);
        $query = $builder->get();
        return $query->getRow();
    }
}

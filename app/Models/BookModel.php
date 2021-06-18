<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'booking';
    protected $useTimestamps = true;
    protected $allowedFields = ['status', 'address', 'paymentMethod', 'userId', 'serviceId'];

    public function getBooking()
    {
        $builder = $this->table('booking');
        $builder->select('booking.id as id, slug ,booking.address as address, paymentMethod, booking.userId as uId, serviceId, booking.created_at as date, serviceId, users.picture as picture, categoryValue as category, locationValue as location, bookingStatus.status as status, booking.status as statNum, price, users.name as name');
        $builder->join('service', 'service.id = serviceId');
        $builder->join('users', 'users.id = service.userId');
        $builder->join('category', 'category.categoryId = service.category');
        $builder->join('location', 'location.locationId = service.location');
        $builder->join('bookingStatus', 'bookingStatus.id = booking.status');
        $builder->where('booking.userId', user()->id);
        $builder->orderBy('date', 'DESC');
        return $builder;
    }

    public function getBookingbyId($id)
    {
        $builder = $this->table('booking');
        $builder->select('booking.id as id, slug ,booking.address as address, paymentMethod, booking.userId as uId, serviceId, booking.created_at as date, serviceId, users.picture as picture, categoryValue as category, locationValue as location, bookingStatus.status as status, booking.status as statNum, price, users.name as name');
        $builder->join('service', 'service.id = serviceId');
        $builder->join('users', 'users.id = service.userId');
        $builder->join('category', 'category.categoryId = service.category');
        $builder->join('location', 'location.locationId = service.location');
        $builder->join('bookingStatus', 'bookingStatus.id = booking.status');
        $builder->where('booking.userId', $id);
        $builder->orderBy('date', 'DESC');
        return $builder;
    }


    public function getOrder()
    {
        $builder = $this->table('booking');
        $builder->select('booking.id as id, booking.address as address, paymentMethod, booking.userId as uId, serviceId, booking.created_at as date, serviceId, users.picture as picture, categoryValue as category, locationValue as location, booking.status as status, price, users.username as name');
        $builder->join('service', 'service.id = serviceId');
        $builder->join('users', 'users.id = booking.userId');
        $builder->join('category', 'category.categoryId = service.category');
        $builder->join('location', 'location.locationId = service.location');
        $builder->join('bookingStatus', 'bookingStatus.id = booking.status');
        $builder->where('service.userId', user()->id);
        $builder->where('booking.status !=', 3);
        $builder->where('booking.status !=', 2);
        $builder->where('booking.status !=', 5);
        return $builder;
    }
}

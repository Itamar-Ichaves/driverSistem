<?php

namespace App\Repositories;

use App\Models\Service_Order;

Class Service_OrdersRepository
{
    protected $entity;


    public function __construct(Service_Order $serviceorders)
    {
        $this->entity = $serviceorders;
    }

    public function getAllOrders()
    {
        return $this->entity->get();
    }

    public function createOrders(array $data)
    {
        return $this->entity->create($data);
    }

    public function getOrdersByUuid($identify)
    {
        return $this->entity->where('uuid', $identify)->firstOrfail();
    }
}

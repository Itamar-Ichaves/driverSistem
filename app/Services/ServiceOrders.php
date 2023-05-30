<?php

namespace App\Services;

use App\Repositories\Service_OrdersRepository;

class ServiceOrders
{
    protected $repository;

    public function __construct(Service_OrdersRepository $courseRepository)
    {
        $this->repository = $courseRepository;
    }


    public function getAllOrders()
    {
        return $this->repository->getAllOrders();
    }

    public function createNewOrders(array $data)
    {
        return $this->repository->createOrders($data);

    }

    public function getOrders($indetify)
    {
        return $this->repository->getOrdersByUuid($indetify);
    }
}

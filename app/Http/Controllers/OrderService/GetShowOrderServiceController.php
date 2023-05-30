<?php

namespace App\Http\Controllers\OrderService;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderServiceResource;
use App\Services\ServiceOrders;
use Illuminate\Http\Request;

class GetShowOrderServiceController extends Controller
{
    protected $serviceOrders;

    public function __construct(ServiceOrders $serviceOrders)
    {
        $this->serviceOrders = $serviceOrders;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke($identify)
    {
        $orders = $this->serviceOrders->getOrders($identify);

        return new OrderServiceResource($orders);
    }
}

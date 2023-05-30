<?php

namespace App\Http\Controllers\OrderService;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateOrder;
use App\Http\Resources\OrderServiceResource;
use App\Services\ServiceOrders;
use Illuminate\Http\Request;

class CreateOrderServiceController extends Controller
{
    protected $serviceOrders;

    public function __construct(ServiceOrders $serviceOrders)
    {
        $this->serviceOrders = $serviceOrders;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUpdateOrder $request)
    {
        $orders = $this->serviceOrders->createNewOrders($request->all());

        return new OrderServiceResource($orders);
    }
}

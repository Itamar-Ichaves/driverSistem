<?php

namespace App\Http\Controllers\OrderService;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrder;
use App\Http\Requests\StoreUpdateOrder;
use App\Http\Resources\OrderServiceResource;
use App\Services\ServiceOrders;
use Illuminate\Http\Request;

class GetOrderServiceController extends Controller
{

    protected $serviceOrders;

    public function __construct(ServiceOrders $serviceOrders)
    {
        $this->serviceOrders = $serviceOrders;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreOrder $request)
    {
        $orders = $this->serviceOrders->getAllOrders()->paginate();

        return OrderServiceResource::collection($orders);

    }
}

<?php

namespace App\Observers;

use App\Models\Service_Order;
use Illuminate\Support\Str;

class OrderServiceObserver
{
    /**
     * Handle the Service_Order "created" event.
     */
    public function creating(Service_Order $service_Order): void
    {
        $service_Order->url = Str::kebab($service_Order->vehiclePlate);
        $service_Order->uuid = Str::uuid();
    }

    /**
     * Handle the Service_Order "updated" event.
     */
    public function updating(Service_Order $service_Order): void
    {
        $service_Order->uuid = Str::uuid();
    }


}

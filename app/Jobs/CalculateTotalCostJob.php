<?php

namespace App\Jobs;

use App\Models\Order;
use App\Models\OrderLine;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Route;

class CalculateTotalCostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // obtengo valores (falta unificar 1 sola consulta)        
        $totalOrders = Order::all()->count();
        $totalCost   = OrderLine::with('product')->get()->sum(function ($orderLine) {
            return $orderLine->qty * $orderLine->product->cost;
        });

        // llamada endpoint API
        Http::post(url('/api/executed/create'), [
            'total_orders'  => $totalOrders,
            'total_cost'    => $totalCost,
        ]);

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\Executed;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExecutedController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {

        // return response()->json($request);
        try {
            
            $executed = Executed::create([
                'total_orders'  => $request->total_orders,
                'total_cost'    => $request->total_cost,
            ]);
          
            return response()->json([
                'status'  => true,
                'message' => 'Registro ejecutado correctamente',
                'item'    => $executed
            ], 201);

            
        } catch (Exception $e) {
            
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ], 400);

        }

    }
}

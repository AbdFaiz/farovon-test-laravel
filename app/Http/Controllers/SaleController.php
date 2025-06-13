<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Get sales by time period.
     */
    public function report(Request $request) {
        $query = Sale::with('customer');
    
        // Berdasarkan customer id
        if ($request->has('customer_id')) {
            $query->where('customer_id', $request->customer_id);
        }
    
        // Berdasarkan periode waktu tertentu 
        if ($request->has(['start_date', 'end_date'])) {
            $query->whereBetween('sale_date', [$request->start_date, $request->end_date]);
        }
    
        $sales = $query->get();

         return response()->json([
            'success' => true,
            'message' => 'Sales report retrieved successfully.',
            'data' => $sales
        ], 200);
    }
}

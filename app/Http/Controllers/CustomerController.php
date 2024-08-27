<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('query');

        $customers = Customer::with('orders.items')
            ->when($query, function ($queryBuilder, $query) {
                return $queryBuilder->where('email', 'LIKE', "%$query%")
                                    ->orWhereHas('orders', function($q) use ($query) {
                                        $q->where('order_number', 'LIKE', "%$query%");
                                    })
                                    ->orWhereHas('orders.items', function($q) use ($query) {
                                        $q->where('name', 'LIKE', "%$query%");
                                    });
            })->get();

        return view('search', ['customers' => $customers]);
    }

    public function search(Request $request)
    {
        return redirect()->route('search.form', ['query' => $request->input('query')]);
    }
}

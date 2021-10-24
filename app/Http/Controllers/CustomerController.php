<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;
use PDF;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $data = Customer::all();

        if ($request->has('export')) {
            if ($request->get('export') == 'pdf') {
                $pdf = PDF::loadView('layouts.customers-pdf', compact('data'));
                return $pdf->download('customer-list.pdf');
            }
        }

        return view('layouts.customers', compact('data'));
    }
}

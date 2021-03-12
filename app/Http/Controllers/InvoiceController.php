<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function saveInvoice(Request $request)
    {
        /*
        $invoice = Invoice::create([
            'user_id' => 1,
            'amount' => 29.99
        ]);
        */
        return view('welcome');
    }
}

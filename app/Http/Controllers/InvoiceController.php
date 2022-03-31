<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{
    //
    public function index() {
        $invoice = Invoice::all();
        return $invoice;
    }

    public function insert(Request $r) {
       $data = $r->only(['description','value','address_id','user_id']);
       $invoice =  Invoice::create($data);
       return $invoce;

    }

     
    
    
}

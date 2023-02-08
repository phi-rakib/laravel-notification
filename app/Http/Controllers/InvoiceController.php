<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\InvoicePaid;

class InvoiceController extends Controller
{
    public function store(Request $request)
    {
        $user = User::first();
        $user->notify(new InvoicePaid());
    }
}

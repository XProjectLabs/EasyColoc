<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settlement;
use Illuminate\Support\Facades\Auth;

class SettlementController extends Controller
{
   
    public function pay(Request $request)
    {
        Settlement::create([
            'payer_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'amount' => $request->amount,
            'colocation_id' => $request->colocation_id,
            'paid_at' => now()
        ]);

        return back()->with('success', 'Payment recorded!');
    }
}

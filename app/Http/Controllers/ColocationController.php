<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColocationController extends Controller
{
    public function index() {
        $colocations = Auth::user()->colocations()->get();
        return view('colocations.index', compact('colocations'));
    }

    public function create() {
        return view('colocations.create');
    }

   public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255'
    ]);

    // Check if user already has an active colocation
    $hasColocation = Auth::user()
        ->memberships()
        ->whereNull('left_at')
        ->whereHas('colocation', function ($query) {
            $query->where('status', 'active');
        })
        ->exists();

    if ($hasColocation) {
        return redirect()->back()->with('error', 'You already have an active colocation!');
    }

    // Create new colocation
    $colocation = Colocation::create([
        'name' => $request->name,
        'status' => 'active' // make sure default is active
    ]);

    // Add membership as owner
    Membership::create([
        'user_id' => Auth::id(),
        'colocation_id' => $colocation->id,
        'role' => 'owner',
        'joined_at' => now()
    ]);

    return redirect()->route('colocations.index')->with('success', 'Colocation created!');
    
    }
    
    public function show(Colocation $colocation) {
        $members = $colocation->users()->get();
        return view('colocations.show', compact('colocation', 'members'));
    }

    public function cancel($id)
    {
    $colocation = Colocation::findOrFail($id);

    $colocation->update([
        'status' => 'cancelled'
    ]);

    return redirect()->back()->with('success', 'Colocation cancelled');
    }


    public function balances(Colocation $colocation)
    {
    $members = $colocation->users;
    $expenses = $colocation->expenses;

    $totalExpenses = $expenses->sum('amount');
    $perPerson = $members->count() > 0 ? $totalExpenses / $members->count() : 0;

    $balances = [];

    foreach ($members as $member) {
        $paid = $expenses->where('payer_id', $member->id)->sum('amount');
        $balance = $paid - $perPerson;

        $balances[] = [
            'user' => $member,
            'paid' => $paid,
            'should_pay' => $perPerson,
            'balance' => $balance
        ];
    }

    return view('balances.index', compact('colocation', 'balances'));
    }


    public function settlements(Colocation $colocation)
    {
    $members = $colocation->users;
    $expenses = $colocation->expenses;

    $totalExpenses = $expenses->sum('amount');
    $perPerson = $members->count() > 0 ? $totalExpenses / $members->count() : 0;

    $creditors = [];
    $debtors = [];

    foreach ($members as $member) {
        $paid = $expenses->where('payer_id', $member->id)->sum('amount');
        $balance = round($paid - $perPerson, 2);

        if ($balance > 0) {
            $creditors[] = ['user' => $member, 'amount' => $balance];
        } elseif ($balance < 0) {
            $debtors[] = ['user' => $member, 'amount' => abs($balance)];
        }
    }

    $settlements = [];

    foreach ($debtors as &$debtor) {
        foreach ($creditors as &$creditor) {
            if ($debtor['amount'] == 0) continue;
            if ($creditor['amount'] == 0) continue;

            $pay = min($debtor['amount'], $creditor['amount']);

            $settlements[] = [
                'from' => $debtor['user'],
                'to' => $creditor['user'],
                'amount' => $pay
            ];

            $debtor['amount'] -= $pay;
            $creditor['amount'] -= $pay;
        }
    }

    return view('settlements.index', compact('colocation', 'settlements'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Colocation;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index(Colocation $colocation)
    {
        $expenses = $colocation->expenses()->latest()->get();
        return view('expenses.index', compact('colocation', 'expenses'));
    }

    public function create(Colocation $colocation)
    {
        $categories = Category::all();
        $members = $colocation->users;
        return view('expenses.create', compact('colocation', 'categories', 'members'));
    }

    public function store(Request $request, Colocation $colocation)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required|numeric|min:1',
            'category_id' => 'required',
            'payer_id' => 'required'
        ]);

        Expense::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'date' => now(),
            'category_id' => $request->category_id,
            'payer_id' => $request->payer_id,
            'colocation_id' => $colocation->id
        ]);

        return redirect()->route('expenses.index', $colocation->id)
            ->with('success', 'Expense added!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Colocation;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'usersCount' => User::count(),
            'colocationsCount' => Colocation::count(),
            'expensesCount' => Expense::count(),
            'bannedUsers' => User::where('is_banned', true)->count(),
        ]);
    }

    public function users()
    {
        $users = User::latest()->get();
        return view('admin.users', compact('users'));
    }

    public function ban(User $user)
    {
        $user->update(['is_banned' => true]);
        return back();
    }

    public function unban(User $user)
    {
        $user->update(['is_banned' => false]);
        return back();
    }
}

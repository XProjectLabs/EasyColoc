<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Colocation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationMail;


class InvitationController extends Controller
{
    public function store(Request $request, Colocation $colocation)
{
    $request->validate([
        'email' => 'required|email'
    ]);

    $token = Str::random(40);

    $invitation = Invitation::create([
        'email' => $request->email,
        'token' => $token,
        'status' => 'pending',
        'colocation_id' => $colocation->id,
        'expires_at' => now()->addDays(2)
    ]);

    $link = url('/invitations/accept/' . $token);

    //SEND EMAIL
    Mail::to($request->email)->send(new InvitationMail($link));

    return back()->with('success', 'Invitation sent successfully!');
}

    public function accept($token)
    {
    $invitation = Invitation::where('token', $token)
        ->where('status', 'pending')
        ->firstOrFail();

    if (Auth::user()->email !== $invitation->email) {
        abort(403, 'Invalid invitation');
    }

    // check active colocation
    $hasColocation = Membership::where('user_id', Auth::id())
        ->whereNull('left_at')
        ->exists();

    if ($hasColocation) {
        return redirect('/')->with('error', 'You already have a colocation');
    }

    Membership::create([
        'user_id' => Auth::id(),
        'colocation_id' => $invitation->colocation_id,
        'role' => 'member'
    ]); 

    $invitation->update(['status' => 'accepted']);

    return redirect('/colocations')->with('success', 'Joined successfully!');
    }
}
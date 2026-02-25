<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function payer() {
    return $this->belongsTo(User::class, 'payer_id');
}
}

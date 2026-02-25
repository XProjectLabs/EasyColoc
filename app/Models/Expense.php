<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
    'title',
    'amount',
    'date',
    'payer_id',
    'colocation_id',
    'category_id'
    ];

    public function payer() {
    return $this->belongsTo(User::class, 'payer_id');
    }

    public function category()
    {
    return $this->belongsTo(Category::class);
    }
}

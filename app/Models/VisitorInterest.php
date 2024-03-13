<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorInterest extends Model
{
    use HasFactory;
    // protected $table = 'visitor_interest';
    protected $fillable = [
        'user_id',
        'interest_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function newRequests()
    {
        return $this->hasMany(NewRequest::class, 'user_id');
    }
}

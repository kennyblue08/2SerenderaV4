<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewRequest extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $fillable = [
        'date_time',
        'company_name',
        'visitor_name',
        'email',
        'mobile_number',
        'remarks',
    ];

    public function visitorInterest()
    {
        return $this->belongsTo(VisitorInterest::class, 'user_id');
    }
   
}


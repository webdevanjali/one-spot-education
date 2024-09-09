<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInteraction extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'interaction_type', 'interaction_data',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

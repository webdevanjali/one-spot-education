<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Role extends Model
{
    use HasFactory; //default 

    
    protected $primaryKey = 'role_id';

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_roles', 'role_id', 'user_id');
        // return $this->belongsToMany(App\Models\User::class, 'user_roles', 'role_id', 'user_id');

    }
}

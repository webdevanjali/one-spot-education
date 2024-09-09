<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Role extends Model
{
    use HasFactory; //default 

    protected $fillable = [
        'role_name',
    ];

    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }

    
    protected $primaryKey = 'role_id';
    public $incrementing = false;
    protected $keyType = 'int';

    // Define the inverse many-to-many relationship with the User model
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_roles', 'role_id', 'user_id');
    }
    
}

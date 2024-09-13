<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    // Specify the table associated with the model if it's not the plural form of the model name
    protected $table = 'notifications';


    // Define the primary key column
    protected $primaryKey = 'notification_id';

    // Indicate that the primary key is not an incrementing integer
    public $incrementing = true;

    // The primary key type is integer
    protected $keyType = 'int';

    // Disable timestamps if they are not used
    public $timestamps = false;


    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'user_id',
        'title',
        'message',
        'read_status',
        'notification_type',
        'media',
    ];
    
    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        // return 'id'; // Ensure this matches your primary key
        return 'notification_id'; // Ensure this matches your primary key
    }

}

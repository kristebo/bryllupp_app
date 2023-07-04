<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone_number',
        'rsvp_status',
        'role',
        'dietary_restrictions',

    ];
    # create a one-to-one relationship with the user model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

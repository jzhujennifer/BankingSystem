<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=[
        'user_id',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'address',
        'date_of_birth'
    ];
    use HasFactory;
    public function account()
    {
        return $this->hasMany(account::class);
    }
    public function contacts()
    {
        return $this->hasMany(contacts::class);
    }

}

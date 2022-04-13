<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    protected $fillable=[
        'customer_id',
        'account_number',
        'contact_name',
       
    ];
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(customer::class);
    }
    public function contact_customer()
    {
        return $this->hasOne(customer::class);
    }
}

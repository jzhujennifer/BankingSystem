<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


    class account extends Model
{  protected $primaryKey = 'account_number';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable=[
    'account_number',
    'coustomer_id',
    'type',
    'balance',

];
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(customer::class);
    }
}

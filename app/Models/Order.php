<?php

namespace App\Models;

use App\Models\User;
use App\Models\AddressUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const ON_PROCESSED = 1;
    const IN_DELIVIERY = 2;
    const RECIEVED = 3;
    const COMLETED = 4;
    const REJECTED = 5;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function addres()
    {
        return $this->belongsTo(AddressUser::class, 'address_user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['date']??false, function($query, $date){
            return $query->where('date', $date);
        });
    }
}

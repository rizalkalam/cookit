<?php

namespace App\Models;

use App\Models\District;
use App\Models\AddressDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddressUser extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function area()
    {
        return $this->belongsTo(AddressDetail::class, 'area_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}

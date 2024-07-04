<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FurtherInformation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function unit()
    // {
    //     return $this->belongsTo(Unit::class, 'unit_id');
    // }

    // public function material()
    // {
    //     return $this->belongsTo(MaterialSent::class, 'material_id');
    // }
}

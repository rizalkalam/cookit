<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\MaterialSent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ToSent extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function material()
    {
        return $this->belongsTo(MaterialSent::class, 'material_id');
    }
}

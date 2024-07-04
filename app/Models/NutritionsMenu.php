<?php

namespace App\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NutritionsMenu extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function karbohidrat_unit()
    {
        return $this->belongsTo(Unit::class, 'karbohidrat_unit_id');
    }

    public function protein_unit()
    {
        return $this->belongsTo(Unit::class, 'protein_unit_id');
    }

    public function lemak_unit()
    {
        return $this->belongsTo(Unit::class, 'lemak_unit_id');
    }

    public function serat_unit()
    {
        return $this->belongsTo(Unit::class, 'serat_unit_id');
    }

    public function natrium_unit()
    {
        return $this->belongsTo(Unit::class, 'natrium_unit_id');
    }

    public function kalori_unit()
    {
        return $this->belongsTo(Unit::class, 'kalori_unit_id');
    }
}

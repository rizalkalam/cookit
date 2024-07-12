<?php

namespace App\Models;

use App\Models\SectionProduct;
use App\Enums\LiveProductStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LiveProduct extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $enumCasts = [
        'status' => LiveProductStatus::class,
    ];

    public function sectionProduct()
    {
        return $this->belongsTo(SectionProduct::class, 'section_id');
    }

}

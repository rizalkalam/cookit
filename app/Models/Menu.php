<?php

namespace App\Models;

use App\Models\MenuType;
use App\Models\FlavorProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function type()
    {
        return $this->belongsTo(MenuType::class, 'type_id');
    }

    public function flavor()
    {
        return $this->belongsTo(FlavorProfile::class, 'flavor_id');
    }
}

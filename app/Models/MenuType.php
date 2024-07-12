<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\MenuType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function type()
    // {
    //     return $this->HasMany(MenuType::class, 'type');
    // }
}

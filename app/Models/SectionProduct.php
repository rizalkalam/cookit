<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\MenuType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectionProduct extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function menu_appetizer()
    {
        return $this->belongsTo(Menu::class, 'appetizer_menu_id');
    }

    public function menu_maincourse()
    {
        return $this->belongsTo(Menu::class, 'maincourse_menu_id');
    }

    public function menu_dessert()
    {
        return $this->belongsTo(Menu::class, 'dessert_menu_id');
    }
}

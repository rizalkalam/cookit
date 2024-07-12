<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Bundling;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BundlingType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bundling()
    {
        return $this->belongsTo(Bundling::class, 'bundling_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}

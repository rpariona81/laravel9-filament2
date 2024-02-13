<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navmenu extends Model
{
    use HasFactory;

    public $fillable = ['menu','slug'];

    public function roles(){
        return $this
            ->belongsToMany(Role::class, 'roles_navmenus');
            //->belongsToMany('App\Models\Menu', 't_menu_role', 'menu_id', 'role_id');
    }
}

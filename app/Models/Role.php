<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $fillable = ['rolename','guard_name','description'];

    public function navmenus(){
        return $this
            ->belongsToMany(Navmenu::class, 'roles_navmenus','navmenu_id', 'role_id');
            //->belongsToMany('App\Models\Menu', 't_menu_role', 'menu_id', 'role_id');
    }
}

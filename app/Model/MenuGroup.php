<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model
{
  protected $fillable=[
    "menu_group_title",
    "menu_group_level",
    "menu_group_parent_id",

  ];
  public function getMenuItems(){
    return $this->hasMany("App\Model\MenuItem","menugroupid");
  }
  public function getchild($currentLevel){
    return $this->hasMany("App\Model\MenuGroup","menu_group_parent_id")
    ->where('menu_group_level',"=",($currentLevel+1));
  }
}

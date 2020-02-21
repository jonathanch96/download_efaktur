<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable=[
      "menugroupid",
      "menu_item_title",
      "menu_item_icon",
      "menu_item_url",

    ];
}

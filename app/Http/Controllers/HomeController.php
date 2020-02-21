<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MenuGroup;

class HomeController extends Controller
{
    public function showView(){

      return view('home',[
      ]);
    }
    public function showViewWithData(Request $request){
      $menu_groups = MenuGroup::where("menu_group_level","=",0)->get();
      return view('blank',[
        'menu_groups'=>$menu_groups
      ]);
    }
    public function showViewWithData2(Request $request){
      //dummy menu
      $menu_groups = array();
      $menu_items = array();
      $sub_menu_groups = array();
      $sub_menu_items = array();

      //define each menu
      //menu 1st
      array_push($menu_items,[
        'menu_item_title'=>'Dashboard',
        'menu_item_icon'=>'fa-tachometer-alt',
        'menu_item_url'=>'/',
        'id'=>1,
      ]);
      array_push($menu_groups,[
        'menu_group_title'=>'',
        'menu_items'=>$menu_items
      ]);

      //menu 2nd
      $menu_items = array();
      $sub_menu_groups = array();
      $sub_menu_items = array();

      array_push($sub_menu_items,[
        'sub_menu_item_title'=>"Button",
        'sub_menu_item_link'=>"button.html"
      ]);
      array_push($sub_menu_items,[
        'sub_menu_item_title'=>"Card",
        'sub_menu_item_link'=>"cards.html"
      ]);
      array_push($sub_menu_groups,[
        'sub_menu_group_title'=>"Custom Components",
        'sub_menu_items'=>$sub_menu_items
      ]);
      array_push($menu_items,[
        'menu_item_title'=>'Components',
        'menu_item_icon'=>'fa-cog',
        'menu_item_url'=>'#',
        'id'=>2,
        'sub_menu_groups'=>$sub_menu_groups
      ]);
      array_push($menu_groups,[
        'menu_group_title'=>'Interface',
        'menu_items'=>$menu_items
      ]);
      //end dummy menu
      //dd($menu_groups);
      return view('blank',[
        'menu_groups'=>$menu_groups
      ]);
    }
}

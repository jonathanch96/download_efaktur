<?php

use Illuminate\Database\Seeder;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->insert([
          'menugroupid'=>'1',
          'menu_item_title'=>'Dashboard',
          'menu_item_icon'=>'fa-tachometer-alt',
          'menu_item_url'=>'/',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'2',
          'menu_item_title'=>'Components',
          'menu_item_icon'=>'fa-cog',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'2',
          'menu_item_title'=>'Utilities',
          'menu_item_icon'=>'fa-wrench',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'3',
          'menu_item_title'=>'Button',
          'menu_item_url'=>'/button.html',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'3',
          'menu_item_title'=>'Card',
          'menu_item_url'=>'/cards.html',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'4',
          'menu_item_title'=>'Colors',
          'menu_item_url'=>'/colors.html',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'4',
          'menu_item_title'=>'Borders',
          'menu_item_url'=>'/borders.html',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'4',
          'menu_item_title'=>'Animations',
          'menu_item_url'=>'/animations.html',
        ]);
        DB::table('menu_items')->insert([
          'menugroupid'=>'5',
          'menu_item_title'=>'Pages',
          'menu_item_icon'=>'fa-folder',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class MenuGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menu_groups')->insert([
        'menu_group_title'=>'',
        'menu_group_level'=>0,
      ]);
      DB::table('menu_groups')->insert([
        'menu_group_title'=>'Interface',
        'menu_group_level'=>0,
      ]);
      DB::table('menu_groups')->insert([
        'menu_group_title'=>'Custom Components',
        'menu_group_parent_id'=>2,
        'menu_group_level'=>1,
      ]);
      DB::table('menu_groups')->insert([
        'menu_group_title'=>'Custom Utilities',
        'menu_group_parent_id'=>3,
        'menu_group_level'=>1,
      ]);
      DB::table('menu_groups')->insert([
        'menu_group_title'=>'AddOns',
        'menu_group_level'=>0,
      ]);
    }
}

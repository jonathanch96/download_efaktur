<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('menugroupid');
            $table->string('menu_item_title',255);
            $table->string('menu_item_icon',255)->nullable();;
            $table->string('menu_item_url',255)->default('#');
            $table->timestamps();
            $table->foreign('menugroupid')->references('id')->on('menu_groups');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menuitems');
    }
}

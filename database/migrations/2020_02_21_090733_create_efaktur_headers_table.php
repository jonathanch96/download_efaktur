<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEfakturHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efaktur_headers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_nota',255);
            $table->string('no_fp',255);
            $table->string('cust_code',255);
            $table->string('cust_group',255);
            $table->string('cust_name',255);
            $table->longText('cust_address');
            $table->date('tgl_nota');
            $table->string('fp_scan_path');
            $table->string('nota_scan_path');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('efaktur_headers');
    }
}

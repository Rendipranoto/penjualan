<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UbahTabelProduk extends Migration
{

    public function up()
    {
     Schema::rename('produks', 'barangs');     
    }

    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('title',500)->default('');
            $table->string('level1',100)->default('');
            $table->string('level2',100)->default('');
            $table->string('level3',100)->default('');
            $table->float('price')->default(0.0);
            $table->float('price_sp')->default(0.0);
            $table->float('quantity')->default(0.0);
            $table->longText('properties');
            $table->string('similar_products')->default('');
            $table->string('measure')->default('');
            $table->string('picture')->default('');
            $table->boolean('show_on_main')->default(false);
            $table->longText('description');

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
        Schema::dropIfExists('products');
    }
};

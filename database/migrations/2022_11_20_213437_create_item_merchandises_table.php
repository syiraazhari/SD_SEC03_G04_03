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
        Schema::create('item_merchandises', function (Blueprint $table) {
            $table->id();
            $table->string('item')->nullable();
            $table->decimal('price', 10,2);
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
        Schema::dropIfExists('item_merchandises');
        // Schema::table('item_merchandises', function(Blueprint $t){
        //     $t->decimal('price', 10,2)->change();
        // });
    }
};

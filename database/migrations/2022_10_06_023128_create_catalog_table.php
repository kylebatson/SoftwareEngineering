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

        Schema::create('catalog', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Category');
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->string('supplier');
            $table->string('description');
			$table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog');
    }
};

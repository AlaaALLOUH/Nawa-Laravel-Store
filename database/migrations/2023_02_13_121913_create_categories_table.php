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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            //not null
            $table->string('name',150);
            $table->string('image_path',500)->nullable();
            //'created_at' TIMESTAMP NULL
            //'updated_at' TIMESTAMP NULL
            $table->timestamps();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('slug')->unique();
            //add foreign key (parent_id)
            $table->foreign('parent_id')
            ->references('id')
            ->on('categories')
            ->nullOnDelete();
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};

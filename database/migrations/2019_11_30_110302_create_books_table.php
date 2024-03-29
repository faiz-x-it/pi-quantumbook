<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('author_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('image_id')->unsigned()->index();
            $table->string('color');
            $table->string('ink_material');
            $table->string('cloth_material');
            $table->bigInteger('quantity');
            $table->bigInteger('init_price');
            $table->integer('discount_rate')->nullable();
            $table->double('price');
            $table->softDeletes();
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
        Schema::dropIfExists('books');
    }
}

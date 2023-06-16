<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status');
            $table->integer('pid');
            $table->tinyInteger('is_hot');
            $table->integer('views');
            $table->string('avatar');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('category_description', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('language_id');
            $table->string('title', 11);
            $table->text('description');
            $table->text('meta_keyword');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
}

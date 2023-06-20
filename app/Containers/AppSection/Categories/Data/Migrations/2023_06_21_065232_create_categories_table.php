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
            $table->integer('pid')->nullable()->default(0);
            $table->tinyInteger('is_hot')->nullable()->default(0);
            $table->integer('views')->nullable()->default(0);
            $table->string('avatar')->nullable()->default(null);
            $table->string('type')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('category_description', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('language_id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
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

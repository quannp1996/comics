<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('extra_link', 250);
            $table->integer('sort_order');
            $table->tinyInteger('status');
            $table->integer('type');
            $table->string('icon');
            $table->tinyInteger('new_tab');
            $table->string('content_type');
            $table->string('content_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('menu_description', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id');
            $table->string('title', 250);
            $table->string('meta_title', 250);
            $table->text('meta_keyword');
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
        Schema::dropIfExists('menu');
        Schema::dropIfExists('menu_description');
    }
}

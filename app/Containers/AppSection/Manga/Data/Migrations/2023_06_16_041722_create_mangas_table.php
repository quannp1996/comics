<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->string('avatar', 250);
            $table->tinyInteger('is_hot');
            $table->integer('views');
            $table->integer('type');
            $table->integer('cost_reading');
            $table->integer('total_chapter');
            $table->integer('total_rating');
            $table->integer('adv_rating');
            $table->string('website_clone', 250);
            $table->string('url_clone', 250);
            $table->timestamp('time_clone');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('manga_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('manga_id');
            $table->integer('category_id');
        });

        Schema::create('manga_tags', function (Blueprint $table) {
            $table->id();
            $table->integer('manga_id');
            $table->integer('tag_id');
        });

        Schema::create('manga_description', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id');
            $table->string('title', 250);
            $table->text('short_description', 250);
            $table->text('description');
            $table->string('author', 250);
            $table->string('meta_title', 250);
            $table->text('meta_keyword');
            $table->text('meta_description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->integer('manga_id');
            $table->string('title');
            $table->integer('views');
            $table->string('website_clone');
            $table->string('url_clone');
            $table->timestamp('time_clone');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('chapter_images', function (Blueprint $table) {
            $table->id();
            $table->integer('chapter_id');
            $table->string('source');
            $table->string('website_clone');
            $table->string('url_clone');
            $table->timestamp('time_clone');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('mangas');
        Schema::dropIfExists('manga_categories');
        Schema::dropIfExists('manga_tags');
        Schema::dropIfExists('manga_description');
        Schema::dropIfExists('chapters');
        Schema::dropIfExists('chapter_images');
    }
}

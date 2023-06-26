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
            $table->integer('status')->nullable(1);
            $table->string('avatar', 250)->nullable('');
            $table->tinyInteger('is_hot')->nullable(0);
            $table->integer('views')->nullable(0);
            $table->integer('type')->nullable(0);
            $table->integer('cost_reading')->nullable(0);
            $table->integer('total_chapter')->nullable(0);
            $table->integer('total_rating')->nullable(0);
            $table->integer('adv_rating')->nullable(0);
            $table->string('website_clone', 250)->nullable('');
            $table->string('url_clone', 250)->nullable('');
            $table->timestamp('time_clone')->nullable(now());
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
            $table->integer('language_id')->nullable(1);
            $table->integer('manga_id');
            $table->string('title', 250);
            $table->text('short_description', 250)->nullable('');
            $table->text('description')->nullable('');
            $table->string('author', 250)->nullable('');
            $table->string('meta_title', 250)->nullable('');
            $table->text('meta_keyword')->nullable('');
            $table->text('meta_description')->nullable('');
            $table->timestamps();
        });

        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->integer('manga_id');
            $table->string('title');
            $table->integer('views')->nullable(0);
            $table->string('website_clone')->nullable('');
            $table->string('url_clone')->nullable('');
            $table->timestamp('time_clone')->nullable('');
            $table->timestamps();
        });

        Schema::create('chapter_images', function (Blueprint $table) {
            $table->id();
            $table->integer('chapter_id');
            $table->string('source')->nullable('');
            $table->string('website_clone')->nullable('');
            $table->string('url_clone')->nullable('');
            $table->timestamp('time_clone')->nullable('');
            $table->timestamps();
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

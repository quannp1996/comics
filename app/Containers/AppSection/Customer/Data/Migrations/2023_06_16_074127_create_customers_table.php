<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);
            $table->tinyInteger('status');
            $table->timestamp('date_of_birth');
            $table->string('username', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('phone', 255);
            $table->string('avatar', 255);
            $table->string('register_ip', 255);
            $table->string('last_login_ip', 255);
            $table->string('social_token', 255);
            $table->string('social_platform', 255);
            $table->timestamp('last_login_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
}

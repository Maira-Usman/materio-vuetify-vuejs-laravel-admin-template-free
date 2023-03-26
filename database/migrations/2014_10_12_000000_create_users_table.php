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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(0);
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(0);
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('state')->nullable(0);
            $table->string('country');
            $table->integer('zip')->nullable(0);
            $table->integer('vat');
            $table->integer('phone');
            $table->integer('mobile')->nullable(0);
            $table->boolean('actions')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

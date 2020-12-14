<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email')->unique();
            /* $table->timestamp('email_verified_at')->nullable();*/
            $table->string('password');
            $table->string('phone_number', 128);

            $table->foreignId('address_id')->constrained();
            $table->foreignId('role_id')->constrained();
            $table->foreignId('group_id')->constrained();
            $table->foreignId('company_id')->constrained();

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
        Schema::dropIfExists('users');
    }
}

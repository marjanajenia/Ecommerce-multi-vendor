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
        Schema::create('user_vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name',80);
            $table->string('email_address)',120)->unique();
            $table->string('phone_number)',18);
            $table->string('nid_number)',19);
            $table->text('user_address');
            $table->string('user_photo)');
            $table->string('user_bkash)',25);
            $table->string('user_nagad)',25);
            $table->string('user_roket)',25);
            $table->string('user_status)')->default(1)->comment('1 For Active 2 For Inactive');
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
        Schema::dropIfExists('user_vendors');
    }
};

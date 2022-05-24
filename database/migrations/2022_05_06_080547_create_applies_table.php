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
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table-> string('name');
            $table->string('contact');
            $table->string('alternative_contact');
            $table->string('email');
            $table->string('gender');
            $table->string('dob');
            $table->string('shop_name');
            $table->string('business_address');
            $table->string('residential_address');
            $table->string('pan');
            $table->string('image');
            $table->string('adhar_no');
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
        Schema::dropIfExists('applies');
    }
};

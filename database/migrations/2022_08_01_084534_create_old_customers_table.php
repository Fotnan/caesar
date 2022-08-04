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
        Schema::create('old_customers', function (Blueprint $table) {
            $table->id();
            $table->string('object');
            $table->string('name');
            $table->string('aadress')->nullable();
            $table->text('notes')->nullable();
            $table->string('contract')->nullable();
            $table->string('keychain')->nullable();
            $table->string('gate')->nullable();
            $table->string('pict1')->nullable();
            $table->string('pict2')->nullable();
            $table->string('pict3')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->boolean('paid')->nullable();
            $table->integer('district_id');
            $table->integer('city_id');
            $table->integer('category_id');
            $table->integer('contact_id');
            $table->string('floor')->nullable();
            $table->string('entrance')->nullable();
            $table->string('color')->nullable();
            $table->string('door')->nullable();
            $table->string('windows')->nullable();
            $table->string('balcony')->nullable();
            $table->string('utility')->nullable();
            $table->string('key_nr')->nullable();
            $table->string('code')->nullable();
            $table->boolean('fence')->nullable();
            $table->boolean('dog')->nullable();
            $table->string('scheme1')->nullable();
            $table->string('scheme2')->nullable();
            $table->string('scheme3')->nullable();
            $table->string('document')->nullable();
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('old_customers');
    }
};

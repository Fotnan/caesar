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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('object')->unique();
            $table->string('name');
            $table->string('aadress')->nullable();
            $table->text('notes')->nullable();
            $table->string('contract')->nullable();
            $table->string('keychain')->nullable();
            $table->string('gate')->nullable();//телефон шлагбаума
            $table->string('pict1')->nullable();
            $table->string('pict2')->nullable();
            $table->string('pict3')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->boolean('paid')->nullable();
            $table->foreignId('district_id')->nullable()->constrained();
            $table->foreignId('city_id')->nullable()->constrained();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('contact_id')->constrained();
            $table->string('floor')->nullable();//этаж
            $table->string('color')->nullable();//цвет фасада
            $table->string('entrance')->nullable();//№ подъезда слева
            $table->string('door')->nullable();//двери
            $table->string('windows')->nullable();
            $table->string('balcony')->nullable();
            $table->string('utility')->nullable();//кол-во подсобных помещений
            $table->string('code')->nullable();//код двери
            $table->boolean('fence')->nullable();//забор
            $table->boolean('dog')->nullable();
            $table->string('scheme1')->nullable();//схема как найти
            $table->string('scheme2')->nullable();
            $table->string('scheme3')->nullable();
            $table->string('document')->nullable();
            $table->boolean('active');//объект активен
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
        Schema::dropIfExists('customers');
    }
};

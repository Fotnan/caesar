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
        Schema::create('firms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('kmkr');
            $table->string('regnr');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->string('telephone3');
            $table->string('email1');
            $table->string('email2');
            $table->string('email3');
            $table->string('aadress');
            $table->string('postcode');
            $table->string('city');
            $table->string('sait');
            $table->string('bank1');
            $table->string('bank2');
            $table->string('bank3');
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
        Schema::dropIfExists('firms');
    }
};

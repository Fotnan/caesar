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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->boolean('completed')->nullable();
            $table->string('operator');
            $table->string('patrol');
            $table->dateTimeTz('data');
            $table->foreignId('object_id')->constrained();
            $table->boolean('video')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('alarm')->nullable();
            $table->boolean('fire')->nullable();
            $table->boolean('12V')->nullable();
            $table->boolean('220V')->nullable();
            $table->boolean('panica')->nullable();
            $table->boolean('phone_call')->nullable();
            $table->boolean('battery')->nullable();
            $table->boolean('not_secured')->nullable();
            $table->boolean('off_guard')->nullable();
            $table->boolean('patroll')->nullable();
            $table->boolean('06_start')->nullable();
            $table->boolean('07_start')->nullable();
            $table->string('zone');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->dateTimeTz('patrol_arrive');
            $table->dateTimeTz('patrol_leave');
            $table->unsignedBigInteger('reason1_id');
            $table->foreign('reason1_id')->references('id')->on('reasons');
            $table->unsignedBigInteger('reason2_id')->nullable();
            $table->foreign('reason2_id')->references('id')->on('reasons');
            $table->unsignedBigInteger('reason3_id')->nullable();
            $table->foreign('reason3_id')->references('id')->on('reasons');
            $table->unsignedBigInteger('reason4_id')->nullable();
            $table->foreign('reason4_id')->references('id')->on('reasons');
            $table->unsignedBigInteger('detect1_id')->nullable();
            $table->foreign('detect1_id')->references('id')->on('detected');
            $table->unsignedBigInteger('detect2_id')->nullable();
            $table->foreign('detect2_id')->references('id')->on('detected');
            $table->unsignedBigInteger('detect3_id')->nullable();
            $table->foreign('detect3_id')->references('id')->on('detected');
            $table->unsignedBigInteger('detect4_id')->nullable();
            $table->foreign('detect4_id')->references('id')->on('detected');
            $table->foreignId('customer_id')->constrained();
            $table->unsignedBigInteger('contact1_id');
            $table->foreign('contact1_id')->references('id')->on('contakts');
            $table->unsignedBigInteger('contact2_id')->nullable();
            $table->foreign('contact2_id')->references('id')->on('contakts');
            $table->unsignedBigInteger('contact3_id')->nullable();
            $table->foreign('contact3_id')->references('id')->on('contakts');
            $table->dateTimeTz('contact_call');
            $table->unsignedBigInteger('make1_id');
            $table->foreign('make1_id')->references('id')->on('makes');
            $table->unsignedBigInteger('make2_id')->nullable();
            $table->foreign('make2_id')->references('id')->on('makes');
            $table->unsignedBigInteger('make3_id')->nullable();
            $table->foreign('make3_id')->references('id')->on('makes');
            $table->unsignedBigInteger('make4_id')->nullable();
            $table->foreign('make4_id')->references('id')->on('makes');
            $table->dateTimeTz('call_police');
            $table->string('nr_police');
            $table->string('arrive_police');
            $table->string('alien_name');
            $table->string('alien_code');
            $table->foreignId('dokument_id')->nullable()->constrained();
            $table->dateTimeTz('call_date');
            $table->dateTimeTz('arrive_date');
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
        Schema::dropIfExists('events');
    }
};

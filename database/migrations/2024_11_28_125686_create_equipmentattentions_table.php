<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentattentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipmentattentions', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->text('description');
            $table->unsignedBigInteger('task_id')->nullable()->unique();
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->timestamps();


        // Foreign key

        $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
        $table->foreign('equipment_id')->on('equipment')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipmentattentions');
    }
}

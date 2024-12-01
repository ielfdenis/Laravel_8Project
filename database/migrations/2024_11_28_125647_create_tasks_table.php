<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('responsible_person');
            $table->string('component');
            $table->datetime('start_date');
            $table->text('description');
            $table->string('status');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('operation_id')->nullable();
            $table->unsignedBigInteger('report_id')->nullable();
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->timestamps();


            // Foreign key
            $table->foreign('user_id')->on('users')->references('id');

            $table->foreign('operation_id')->on('operations')->references('id');

            $table->foreign('report_id')->on('reports')->references('id');

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
        Schema::dropIfExists('tasks');
    }
}

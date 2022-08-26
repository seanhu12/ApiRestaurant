<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->integer('duration');
            $table->integer('goal')->nullable();
            $table->integer('advance')->nullable();
            $table->float('progress')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->float('impact')->nullable()->default(1);
            $table->float('complexity')->nullable()->default(1);
            $table->float('amount', 2)->nullable();
            $table->float('weight', 2)->nullable();
            $table->foreignId('project_id');
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
        Schema::dropIfExists('activities');
    }
}

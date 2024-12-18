<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string("id_log");
            $table->string("log_name");
            $table->string("log_description");
            $table->string("log_owner");
            $table->date('date_created')->nullable();
            $table->date('date_firstupdated')->nullable();
            $table->date('date_lastupdated')->nullable();
            $table->date('date_closed')->nullable();
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
        Schema::dropIfExists('logs');
    }
}

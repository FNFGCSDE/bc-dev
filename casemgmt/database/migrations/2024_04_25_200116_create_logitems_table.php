<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logitems', function (Blueprint $table) {
            $table->id();
            $table->string("id_logitem");
            $table->string("id_log");
            $table->string("actor");
            $table->string("group");
            $table->string("where");
            $table->string("when");
            $table->string("target");
            $table->string("action");
            $table->string("action_type");
            $table->string("event_name");
            $table->string("description");
            $table->string("environment")->nullable();
            $table->string("code_version")->nullable();
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
        Schema::dropIfExists('logitems');
    }
}

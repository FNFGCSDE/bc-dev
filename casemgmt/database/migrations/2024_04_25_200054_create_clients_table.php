<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("middle_name");
            $table->string("other_names");
            $table->string("aliases");
            $table->string("DOB");
            $table->string("address1");
            $table->string("address2");
            $table->string("city");
            $table->string("province");
            $table->string("country");
            $table->string("email");
            $table->string("phone");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

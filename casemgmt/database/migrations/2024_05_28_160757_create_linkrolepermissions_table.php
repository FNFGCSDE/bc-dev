<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkrolepermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkrolepermissions', function (Blueprint $table) {
            $table->id();
            $table->string("id_links");
            $table->string("cat_link1");
            $table->string("id_link1");
            $table->string("cat_link2");
            $table->string("id_link2");
            $table->string("desc_link");
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
        Schema::dropIfExists('linkrolepermissions');
    }
}

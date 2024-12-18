<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTxnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('txns', function (Blueprint $table) {
            $table->id();
            $table->string("id_txnset");
            $table->string("id_txn");
            $table->string("amt_raw");
            $table->integer("amt_cents");
            $table->string("currency");
            $table->string("date");
            $table->string("time");
            $table->string("txn_type");
            $table->string("category");
            $table->string("status");
            $table->string("description");
            $table->string("id_account");
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
        Schema::dropIfExists('txns');
    }
}

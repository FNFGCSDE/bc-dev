<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string("id_case");
            $table->enum('source', ['Transaction Monitoring', 'UTR', 'Negative News', 'Production Orders', 'Other']);
            $table->string("source_other")->nullable();
            $table->enum('status', ['Open', 'In Progress', 'Under Review', 'Closed']);
            $table->string("id_assignedto")->nullable();
            $table->date('date_opened');
            $table->date('date_submitted')->nullable();
            $table->date('date_approved')->nullable();
            $table->date('date_closed')->nullable();
            $table->enum('outcome', ['Close', 'Report, No Divest', 'Divest, No Report', 'Report & Divest'])->nullable();
            $table->enum('disposition', ['False Positive', 'Regular Close', 'Divest, No Report', 'Report & Divest'])->nullable();
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
        Schema::dropIfExists('reports');
    }
}

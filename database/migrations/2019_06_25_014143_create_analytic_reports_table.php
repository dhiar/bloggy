<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalyticReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analytic_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('campaign_id')->unsigned();
            $table->integer('view')->nullable()->default(0);
            $table->integer('lead')->nullable()->default(0);
            $table->integer('share')->nullable()->default(0);
            $table->date('range_date')->nullable();
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
        Schema::dropIfExists('analytic_reports');
    }
}

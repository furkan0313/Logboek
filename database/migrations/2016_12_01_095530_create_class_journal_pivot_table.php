<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassJournalPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_journal', function (Blueprint $table) {
            $table->integer('class_id')->unsigned()->index();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->integer('journal_id')->unsigned()->index();
            $table->foreign('journal_id')->references('id')->on('journals')->onDelete('cascade');
            $table->primary(['class_id', 'journal_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('class_journal');
    }
}

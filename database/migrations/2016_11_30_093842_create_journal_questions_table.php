<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->enum('type', ['range', 'boolean', 'text']);
            $table->integer('journal_id')->index()->unsigned();
            $table->foreign('journal_id')->references('id')->on('journals');
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
        Schema::drop('journal_questions');
    }
}

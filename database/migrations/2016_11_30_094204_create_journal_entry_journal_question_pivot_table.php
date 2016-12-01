<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalEntryJournalQuestionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_entry_journal_question', function (Blueprint $table) {
            $table->integer('journal_entry_id')->unsigned()->index();
            $table->foreign('journal_entry_id')->references('id')->on('journal_entries')->onDelete('cascade');
            $table->integer('journal_question_id')->unsigned()->index();
            $table->foreign('journal_question_id')->references('id')->on('journal_questions')->onDelete('cascade');
            $table->string('value');
            $table->primary(['journal_entry_id', 'journal_question_id'], 'entry_id_question_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('journal_entry_journal_question');
    }
}

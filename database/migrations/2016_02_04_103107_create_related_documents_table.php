<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatedDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_documents', function (Blueprint $table)
        {
            $table->integer('project_id')               ->unsigned()  ->index();
            $table->integer('uploaded_file_id')         ->unsigned()  ->index();
            $table->primary('uploaded_file_id');

            //Foreign Keys
            $table->foreign('project_id')           ->references('id')->on('projects');
            $table->foreign('uploaded_file_id')     ->references('id')->on('uploaded_files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('related_documents');
    }
}

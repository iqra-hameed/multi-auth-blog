<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Slug');
            $table->string('Description');
            $table->string('Image') ;
            $table->string('Tags');
            $table->string('SEO_description');
            $table->string('SEO_Title');
            $table->string('Meta_keywords');
            $table->string('Category_id');
            $table->boolean('approve')->default(0);
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
        Schema::dropIfExists('blogs');
    }
}

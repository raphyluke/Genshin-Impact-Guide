<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtifactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    public function up()
    {
        Schema::create('artifacts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('text', 255);
            $table->string('guide_id')->references('id')->on('guides');
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
        Schema::dropIfExists('artifacts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatestaffbranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffbranch', function (Blueprint $table) {
            $table->string('staffNo')->unique();
            $table->string('sName');
            $table->string('position');
            $table->string('salary');
            $table->string('branchNo');
            $table->string('bAddress');
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
        Schema::dropIfExists('staffbranch');
    }
}

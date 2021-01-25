<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('slika')->nullable();
            $table->enum('spol', array('M', 'W'))->nullable();
            $table->date('godina_rodjenja')->nullable();;
            $table->date('pocetak_rada')->nullable();;
            $table->enum('vrsta_ugovora', array('odredeno', 'neodredeno'))->nullable();;
            $table->date('trajanje_ugovora')->nullable();;
            $table->string('odijel')->nullable();;

            $table->integer('dan_go')->unsigned()->nullable();
            $table->integer('dan_sd')->unsigned()->nullable();
            $table->integer('dan_pd')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            // PL-1(st-1&2)
            $table->date('tanggal');
            $table->string('pl1-fr1', 10)->nullable();
            $table->string('pl1-fr2', 10)->nullable();
            $table->string('pl1-fh1', 10)->nullable();
            $table->string('pl1-fh2', 10)->nullable();
            $table->string('pl1-fs1', 10)->nullable();
            $table->string('pl1-fs2', 10)->nullable();
            $table->string('pl1-st', 10)->nullable();
            $table->string('pl1-sw', 10)->nullable();
            $table->string('pl1-af', 10)->nullable();
            $table->string('pl1-tr', 10)->nullable();
            $table->string('pl1-s', 10)->nullable();
            $table->string('pl1-lainlain1', 10)->nullable();
            $table->string('pl1-lainlain2', 10)->nullable();
            // PL-2(st-3&4)
            $table->string('pl2-fr1', 10)->nullable();
            $table->string('pl2-fr2', 10)->nullable();
            $table->string('pl2-fh1', 10)->nullable();
            $table->string('pl2-fh2', 10)->nullable();
            $table->string('pl2-fs1', 10)->nullable();
            $table->string('pl2-fs2', 10)->nullable();
            $table->string('pl2-st', 10)->nullable();
            $table->string('pl2-sw', 10)->nullable();
            $table->string('pl2-af', 10)->nullable();
            $table->string('pl2-tr', 10)->nullable();
            $table->string('pl2-s', 10)->nullable();
            $table->string('pl2-lainlain1', 10)->nullable();
            $table->string('pl2-lainlain2', 10)->nullable();

            // PL-3(st-5&6)
            $table->string('pl3-fr1', 10)->nullable();
            $table->string('pl3-fr2', 10)->nullable();
            $table->string('pl3-fh1', 10)->nullable();
            $table->string('pl3-fh2', 10)->nullable();
            $table->string('pl3-fs1', 10)->nullable();
            $table->string('pl3-fs2', 10)->nullable();
            $table->string('pl3-st', 10)->nullable();
            $table->string('pl3-sw', 10)->nullable();
            $table->string('pl3-af', 10)->nullable();
            $table->string('pl3-tr', 10)->nullable();
            $table->string('pl3-s', 10)->nullable();
            $table->string('pl3-lainlain1', 10)->nullable();
            $table->string('pl3-lainlain2', 10)->nullable();
            // start-up
            $table->string('startup-fr1', 10)->nullable();
            $table->string('startup-fr2', 10)->nullable();
            $table->string('startup-fh1', 10)->nullable();
            $table->string('startup-fh2', 10)->nullable();
            $table->string('startup-fs1', 10)->nullable();
            $table->string('startup-fs2', 10)->nullable();
            $table->string('startup-st', 10)->nullable();
            $table->string('startup-sw', 10)->nullable();
            $table->string('startup-af', 10)->nullable();
            $table->string('startup-tr', 10)->nullable();
            $table->string('startup-s', 10)->nullable();
            $table->string('startup-lainlain1', 10)->nullable();
            $table->string('startup-lainlain2', 10)->nullable();
            // trp
            $table->string('trp-fr1', 10)->nullable();
            $table->string('trp-fr2', 10)->nullable();
            $table->string('trp-fh1', 10)->nullable();
            $table->string('trp-fh2', 10)->nullable();
            $table->string('trp-fs1', 10)->nullable();
            $table->string('trp-fs2', 10)->nullable();
            $table->string('trp-st', 10)->nullable();
            $table->string('trp-sw', 10)->nullable();
            $table->string('trp-af', 10)->nullable();
            $table->string('trp-tr', 10)->nullable();
            $table->string('trp-s', 10)->nullable();
            $table->string('trp-lainlain1', 10)->nullable();
            $table->string('trp-lainlain2', 10)->nullable();
            // gc
            $table->string('gc-fr1', 10)->nullable();
            $table->string('gc-fr2', 10)->nullable();
            $table->string('gc-fh1', 10)->nullable();
            $table->string('gc-fh2', 10)->nullable();
            $table->string('gc-fs1', 10)->nullable();
            $table->string('gc-fs2', 10)->nullable();
            $table->string('gc-st', 10)->nullable();
            $table->string('gc-sw', 10)->nullable();
            $table->string('gc-af', 10)->nullable();
            $table->string('gc-tr', 10)->nullable();
            $table->string('gc-s', 10)->nullable();
            $table->string('gc-lainlain1', 10)->nullable();
            $table->string('gc-lainlain2', 10)->nullable();
            // cpcf
            $table->string('cpcf-fr1', 10)->nullable();
            $table->string('cpcf-fr2', 10)->nullable();
            $table->string('cpcf-fh1', 10)->nullable();
            $table->string('cpcf-fh2', 10)->nullable();
            $table->string('cpcf-fs1', 10)->nullable();
            $table->string('cpcf-fs2', 10)->nullable();
            $table->string('cpcf-st', 10)->nullable();
            $table->string('cpcf-sw', 10)->nullable();
            $table->string('cpcf-af', 10)->nullable();
            $table->string('cpcf-tr', 10)->nullable();
            $table->string('cpcf-s', 10)->nullable();
            $table->string('cpcf-lainlain1', 10)->nullable();
            $table->string('cpcf-lainlain2', 10)->nullable();
            // msr
            $table->string('msr-fr1', 10)->nullable();
            $table->string('msr-fr2', 10)->nullable();
            $table->string('msr-fh1', 10)->nullable();
            $table->string('msr-fh2', 10)->nullable();
            $table->string('msr-fs1', 10)->nullable();
            $table->string('msr-fs2', 10)->nullable();
            $table->string('msr-st', 10)->nullable();
            $table->string('msr-sw', 10)->nullable();
            $table->string('msr-af', 10)->nullable();
            $table->string('msr-tr', 10)->nullable();
            $table->string('msr-s', 10)->nullable();
            $table->string('msr-lainlain1', 10)->nullable();
            $table->string('msr-lainlain2', 10)->nullable();


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
        Schema::dropIfExists('kendaraans');
    }
}
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
            $table->string('pl1_fr1', 10)->nullable();
            $table->string('pl1_fr2', 10)->nullable();
            $table->string('pl1_fh1', 10)->nullable();
            $table->string('pl1_fh2', 10)->nullable();
            $table->string('pl1_fs1', 10)->nullable();
            $table->string('pl1_fs2', 10)->nullable();
            $table->string('pl1_st', 10)->nullable();
            $table->string('pl1_sw', 10)->nullable();
            $table->string('pl1_af', 10)->nullable();
            $table->string('pl1_tr', 10)->nullable();
            $table->string('pl1_s', 10)->nullable();
            $table->string('pl1_lainlain1', 10)->nullable();
            $table->string('pl1_lainlain2', 10)->nullable();
            // PL-2(st-3&4)
            $table->string('pl2_fr1', 10)->nullable();
            $table->string('pl2_fr2', 10)->nullable();
            $table->string('pl2_fh1', 10)->nullable();
            $table->string('pl2_fh2', 10)->nullable();
            $table->string('pl2_fs1', 10)->nullable();
            $table->string('pl2_fs2', 10)->nullable();
            $table->string('pl2_st', 10)->nullable();
            $table->string('pl2_sw', 10)->nullable();
            $table->string('pl2_af', 10)->nullable();
            $table->string('pl2_tr', 10)->nullable();
            $table->string('pl2_s', 10)->nullable();
            $table->string('pl2_lainlain1', 10)->nullable();
            $table->string('pl2_lainlain2', 10)->nullable();

            // PL-3(st-5&6)
            $table->string('pl3_fr1', 10)->nullable();
            $table->string('pl3_fr2', 10)->nullable();
            $table->string('pl3_fh1', 10)->nullable();
            $table->string('pl3_fh2', 10)->nullable();
            $table->string('pl3_fs1', 10)->nullable();
            $table->string('pl3_fs2', 10)->nullable();
            $table->string('pl3_st', 10)->nullable();
            $table->string('pl3_sw', 10)->nullable();
            $table->string('pl3_af', 10)->nullable();
            $table->string('pl3_tr', 10)->nullable();
            $table->string('pl3_s', 10)->nullable();
            $table->string('pl3_lainlain1', 10)->nullable();
            $table->string('pl3_lainlain2', 10)->nullable();
            // start-up
            $table->string('startup_fr1', 10)->nullable();
            $table->string('startup_fr2', 10)->nullable();
            $table->string('startup_fh1', 10)->nullable();
            $table->string('startup_fh2', 10)->nullable();
            $table->string('startup_fs1', 10)->nullable();
            $table->string('startup_fs2', 10)->nullable();
            $table->string('startup_st', 10)->nullable();
            $table->string('startup_sw', 10)->nullable();
            $table->string('startup_af', 10)->nullable();
            $table->string('startup_tr', 10)->nullable();
            $table->string('startup_s', 10)->nullable();
            $table->string('startup_lainlain1', 10)->nullable();
            $table->string('startup_lainlain2', 10)->nullable();
            // trp
            $table->string('trp_fr1', 10)->nullable();
            $table->string('trp_fr2', 10)->nullable();
            $table->string('trp_fh1', 10)->nullable();
            $table->string('trp_fh2', 10)->nullable();
            $table->string('trp_fs1', 10)->nullable();
            $table->string('trp_fs2', 10)->nullable();
            $table->string('trp_st', 10)->nullable();
            $table->string('trp_sw', 10)->nullable();
            $table->string('trp_af', 10)->nullable();
            $table->string('trp_tr', 10)->nullable();
            $table->string('trp_s', 10)->nullable();
            $table->string('trp_lainlain1', 10)->nullable();
            $table->string('trp_lainlain2', 10)->nullable();
            // gc
            $table->string('gc_fr1', 10)->nullable();
            $table->string('gc_fr2', 10)->nullable();
            $table->string('gc_fh1', 10)->nullable();
            $table->string('gc_fh2', 10)->nullable();
            $table->string('gc_fs1', 10)->nullable();
            $table->string('gc_fs2', 10)->nullable();
            $table->string('gc_st', 10)->nullable();
            $table->string('gc_sw', 10)->nullable();
            $table->string('gc_af', 10)->nullable();
            $table->string('gc_tr', 10)->nullable();
            $table->string('gc_s', 10)->nullable();
            $table->string('gc_lainlain1', 10)->nullable();
            $table->string('gc_lainlain2', 10)->nullable();
            // cpcf
            $table->string('cpcf_fr1', 10)->nullable();
            $table->string('cpcf_fr2', 10)->nullable();
            $table->string('cpcf_fh1', 10)->nullable();
            $table->string('cpcf_fh2', 10)->nullable();
            $table->string('cpcf_fs1', 10)->nullable();
            $table->string('cpcf_fs2', 10)->nullable();
            $table->string('cpcf_st', 10)->nullable();
            $table->string('cpcf_sw', 10)->nullable();
            $table->string('cpcf_af', 10)->nullable();
            $table->string('cpcf_tr', 10)->nullable();
            $table->string('cpcf_s', 10)->nullable();
            $table->string('cpcf_lainlain1', 10)->nullable();
            $table->string('cpcf_lainlain2', 10)->nullable();
            // msr
            $table->string('msr_fr1', 10)->nullable();
            $table->string('msr_fr2', 10)->nullable();
            $table->string('msr_fh1', 10)->nullable();
            $table->string('msr_fh2', 10)->nullable();
            $table->string('msr_fs1', 10)->nullable();
            $table->string('msr_fs2', 10)->nullable();
            $table->string('msr_st', 10)->nullable();
            $table->string('msr_sw', 10)->nullable();
            $table->string('msr_af', 10)->nullable();
            $table->string('msr_tr', 10)->nullable();
            $table->string('msr_s', 10)->nullable();
            $table->string('msr_lainlain1', 10)->nullable();
            $table->string('msr_lainlain2', 10)->nullable();


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
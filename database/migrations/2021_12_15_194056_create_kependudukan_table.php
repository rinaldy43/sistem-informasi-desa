<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKependudukanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kependudukan', function (Blueprint $table) {
            $table->id();
            $table->foreignId("nik");
            $table->string("nama");
            $table->string("tempatlahir");
            $table->string("tanggallahir");
            $table->string("jeniskelamin");
            $table->string("pendidikan");
            $table->string("agama");
            $table->string("statuskawin");
            $table->string("pekerjaan");
            $table->string("wn");
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
        Schema::dropIfExists('kependudukan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim',50)->unique();
            $table ->string('nama',100);
            $table ->string('tempatlahir',100);
            $table ->date('tanggallahir');
            $table->string('jeniskelamin',20);
            $table->string('agama',20);
            $table->bigInteger('jurusan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};

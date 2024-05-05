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
        Schema::create('wargas', function (Blueprint $table) {
            $table->id('id_warga');
            $table->string('nik',30);
            $table->string('no_kk',30);
            $table->string('nama',40);
            $table->text('tempat_tanggal_lahir');
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->text('alamat');
            $table->string('agama',15);
            $table->string('status',25);
            $table->string('pekerjaan',30);
            $table->string('kewarganegaraan',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wargas');
    }
};

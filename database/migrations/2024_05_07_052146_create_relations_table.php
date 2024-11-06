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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_level')->references('id')->on('level');
        });

        Schema::table('peminjaman', function (Blueprint $table) {
            $table->foreign('id_anggota')->references('id')->on('anggota');
            $table->foreign('id_users')->references('id')->on('users');
        });

        Schema::table('denda', function (Blueprint $table) {
            $table->foreign('id_peminjaman')->references('id')->on('peminjaman');
        });

        Schema::table('detail_peminjaman', function (Blueprint $table) {
            $table->foreign('id_peminjaman')->references('id')->on('peminjaman');
            $table->foreign('id_buku')->references('id')->on('buku');
        });

        Schema::table('buku', function (Blueprint $table) {
            $table->foreign('id_lokasi')->references('id')->on('lokasi');
            $table->foreign('id_kategori')->references('id')->on('kategori');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign(['id_level']);
        });

        Schema::table('returns', function (Blueprint $table){
            $table->dropForeign(['buku_id']);
            $table->dropForeign(['users_id']);
        });

        Schema::table('peminjaman', function (Blueprint $table){
            $table->dropForeign(['id_anggota']);
            $table->dropForeign(['id_users']);
        });

        Schema::table('denda', function (Blueprint $table){
            $table->dropForeign(['id_peminjaman']);
        });

        Schema::table('detail_peminjaman', function (Blueprint $table){
            $table->dropForeign(['id_peminjaman']);
            $table->dropForeign(['id_buku']);
        });

        Schema::table('buku', function (Blueprint $table){
            $table->dropForeign(['id_lokasi']);
            $table->dropForeign(['id_kategori']);
        });
    }
};



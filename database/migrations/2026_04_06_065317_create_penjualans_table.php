<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePenjualansTable extends Migration
{
 public function up()
 {
 Schema::create('penjualans', function (Blueprint $table) {
 $table->increments('id');
 $table->string('nama');
 $table->integer('id_kategori');
 $table->integer('qty');
 $table->integer('harga_beli');
 $table->integer('harga_jual');
 $table->timestamps();
 });
 }
 public function down()
 {
 Schema::dropIfExists('penjualans');
 }
}
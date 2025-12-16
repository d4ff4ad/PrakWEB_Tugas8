<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    Schema::create('iphones', function (Blueprint $table) {
        $table->id();
        // Mengganti 'code'/'name' menjadi model agar lebih relevan dengan HP
        $table->string('model');       // Contoh: iPhone 15 Pro
        $table->string('color')->nullable(); // Contoh: Titanium Blue
        $table->integer('storage')->nullable(); // Contoh: 256 (dalam GB)
        $table->integer('price');      // Harga
        $table->text('description');   // Deskripsi spesifikasi
        
        // Atribut untuk gambar (biasanya menyimpan path/nama file)
        $table->longText('image')->nullable(); 
        
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('iphones');
}
};

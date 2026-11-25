
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ekspedisis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ekspedisi', 100);
            $table->enum('layanan', ['Reguler', 'Express']);
            $table->enum('zona', ['Jawa', 'Bali', 'Luar Jawa']);
            $table->unsignedInteger('tarif');
            $table->string('estimasi', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ekspedisis');
    }
};

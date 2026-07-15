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
        Schema::create('pesantrens', function (Blueprint $table) {
            $table->id();

            $table->foreignId('village_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('code')->unique();

            $table->string('name');

            $table->string('slug')->unique();

            $table->string('nspp')->nullable();

            $table->string('npsn')->nullable();

            $table->enum('type', [
                'Salaf',
                'Modern',
                'Terpadu',
                'Tahfidz',
                'Lainnya',
            ]);

            $table->string('leader_name')->nullable();

            $table->text('address');

            $table->string('postal_code', 10)->nullable();

            $table->string('phone')->nullable();

            $table->string('whatsapp')->nullable();

            $table->string('email')->nullable();

            $table->string('website')->nullable();

            $table->decimal('latitude', 10, 7)->nullable();

            $table->decimal('longitude', 10, 7)->nullable();

            $table->longText('description')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesantrens');
    }
};

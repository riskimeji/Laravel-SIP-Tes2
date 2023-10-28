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
        Schema::create('borroweds', function (Blueprint $table) {
            $table->id();
            $table->string('borrow_code');

            $table->foreignId('book_id')
                ->constrained('books')
                ->onDelete('cascade');

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->enum('status', ['Dipinjam', 'Dikembalikan', 'Terlambat', 'Hilang', 'Rusak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borroweds');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Book;
use App\Models\Author;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_authors', function (Blueprint $table) {
            
            $table->bigInteger('id');
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Author::class);

        });
    }


    /**
     * Reverse the migrations.
    
     */
    public function down(): void
    {
        Schema::dropIfExists('book_authors');
    }
};

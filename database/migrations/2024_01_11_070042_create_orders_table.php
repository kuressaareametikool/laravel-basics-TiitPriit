<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\clients;
use App\Models\book;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("delivery_address");
            $table->dateTime('order_date');
            $table->enum('status', ['ordered', 'paid', 'sent']);
            $table->foreignIdFor(clients::class);
            $table->foreignIdFor(book::class);
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

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
        Schema::create("Products", function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique('name_product_uniq')->nullable(false);
            $table->text('description')->nullable(true); 
            
            
            $table->foreignId('id_category')->constrained(table : 'Categories' , indexName : 'fk_category');     
            $table ->bigInteger('price')->nullable(false)->unsigned();
            $table->tinyInteger('quantity')->nullable(false)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};




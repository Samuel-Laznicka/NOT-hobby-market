<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
                $table->foreign('category_id')->references('id')->on('categories');
            $table->string('image');
            $table->string('name');
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
                $table->dropColumn('category_id');
        });
    }
};

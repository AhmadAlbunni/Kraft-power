<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sku');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->bigInteger('category_id')->nullable(); // Change to nullable
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->bigInteger('sort_number')->nullable()->default('0');;
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

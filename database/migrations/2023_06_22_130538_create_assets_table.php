<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->nullable()->onDelete('cascade');
            $table->foreignId('manufacturer_id')->constrained('manufacturers')->nullable()->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained('suppliers')->nullable()->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->nullable()->onDelete('cascade');
            $table->string('name');
            $table->string('serial_number')->nullable();
            $table->decimal('purchase_price', 12, 0);
            $table->date('purchase_date');
            $table->string('status')->default('active');
            $table->text('description')->nullable();
            $table->string('barcode')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}

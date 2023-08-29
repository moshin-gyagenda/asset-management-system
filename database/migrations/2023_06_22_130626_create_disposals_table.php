<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_id');
            $table->date('disposal_date');
            $table->string('disposal_method');
            $table->string('reason');
            $table->decimal('disposal_amount', 8, 2);
            $table->timestamps();

            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disposals');
    }
}

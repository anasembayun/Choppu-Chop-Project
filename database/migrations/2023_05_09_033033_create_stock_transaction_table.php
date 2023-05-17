<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('product_materials')->onDelete('cascade');
            $table->unsignedBigInteger('outlet_id');
            $table->foreign('outlet_id')->references('id')->on('outlets')->onDelete('cascade');
            $table->string('no_transaction');
            $table->date('date');
            $table->integer('qty');
            $table->string('unit');
            $table->decimal('discount');
            $table->decimal('total_price',12,3);
            $table->enum('payment_status',['paid', 'unpaid']);
            $table->string('payment_via');
            $table->enum('status',['on process','completed','canceled']);
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
        Schema::dropIfExists('stock_transactions');
    }
}

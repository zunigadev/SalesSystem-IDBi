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
        // products table
        Schema::create('products', function (Blueprint $table) {
            $table->id('idproducts');
            $table->string('SKU', 20)->unique();
            $table->string('productName', 100);
            $table->decimal('unitPrice', 10, 2);
            $table->integer('stock');
            $table->timestamps();
            $table->softDeletes();
        });

        // customers table
        Schema::create('customers', function (Blueprint $table) {
            $table->id('idcustomers');
            $table->string('nameCustomer', 100);
            $table->string('idCustomer', 20)->unique();
            $table->string('emailCustomer', 100)->unique();
            $table->timestamps();
            $table->softDeletes();
        });

        // sales table
        Schema::create('sales', function (Blueprint $table) {
            $table->id('idsales');
            $table->string('codeSale', 20)->unique();
            $table->decimal('totalAmount', 10, 2);
            $table->timestamp('date')->useCurrent();
            $table->unsignedBigInteger('idproducts');
            $table->unsignedBigInteger('idcustomers');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            // foreign keys
            $table->foreign('idproducts')->references('idproducts')->on('products')->onDelete('cascade');
            $table->foreign('idcustomers')->references('idcustomers')->on('customers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('products');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('accounts', function (Blueprint $table) {
            $table->string('account_number', 30)->primary();
          //  $table->foreignId('customer_id')->constrained('customers');
            $table->unsignedBigInteger('customer_id')->unique();
            $table->string('type');
            $table->decimal('balance', $precision = 12, $scale = 2);
            $table->timestamps();
           $table->foreign('customer_id')->references('customer_id')->on('customers');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};

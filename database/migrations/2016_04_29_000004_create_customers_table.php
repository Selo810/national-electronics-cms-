<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            #Business info
            $table->increments('id'); // Federal tax ID number 
            $table->string('business_name');
            $table->string('business_address');
            $table->string('business_phone');
            $table->string('fax_phone');
            $table->bigInteger('mobile_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('web_address')->nullable();
            $table->string('owner');
            $table->string('contact');
            $table->string('resale_cert');
            $table->dateTime('validation_date');
            
            # Bank Info
            $table->string('bank_name')->nullable();
            $table->string('business_account')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('business_acct_number')->nullable();
            $table->string('bank_phone')->nullable();
            
            $table->string('authorizing_officer');
            
            # Company Info - separate table that belongs to account

            
            
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
        Schema::drop('customers');
    }
}

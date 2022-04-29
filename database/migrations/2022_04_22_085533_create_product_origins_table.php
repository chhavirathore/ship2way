<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOriginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_origins', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('company_name',191);
            $table->string('customer_name',191);
            $table->string('user_id',191);
            $table->string('tax_id',191);
            $table->string('address',191);
            $table->string('city',191);
            $table->string('state',191);
            $table->string('pincode',20);
            $table->string('wechat_id',191);
            $table->string('whatsapp_id',20);
            $table->string('line_id',191);
            $table->string('freight_company',191);
            $table->string('contact_name',191);
            $table->string('company_address',191);
            $table->string('telephone_no',20)->nullable();
            $table->string('app_id',191);
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
        Schema::dropIfExists('product_origins');
    }
}

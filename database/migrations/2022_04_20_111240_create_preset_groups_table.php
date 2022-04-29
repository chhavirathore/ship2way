<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresetGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preset_groups', function (Blueprint $table) {
            $table->bigInteger('id',191);
            $table->string('preset_group_name',191);
            $table->string('domestic_service',191);
            $table->string('domestic_package',191);
            $table->string('domestic_confirmation',191);
            $table->string('international_service',191);
            $table->string('international_package',191);
            $table->string('international_confirmation',191);
            $table->string('package_weight',191);
            $table->string('package_length',191);
            $table->string('package_width',191);
            $table->string('package_height',191);
            $table->string('customs_dimension');
            $table->string('description',191);
            $table->string('declared_value',191);
            $table->string('type_of_store',191);
            $table->string('type_of_products',191);
            $table->string('harmonization_code',191);
            $table->string('country_origin',191);
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
        Schema::dropIfExists('preset_groups');
    }
}

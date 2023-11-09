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
        Schema::create('colombos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ddri_fa');
            $table->string('business_environment');
            $table->string('digital_adoption');
            $table->string('technology_infrastructure');
            $table->string('capacity_growth');
            $table->string('socio_economic');
            $table->string('startups_pp1');
            $table->string('service_employment1');
            $table->string('it_busns1');
            $table->string('banks_pp1');
            $table->string('device1');
            $table->string('digital_literacy1');
            $table->string('communication1');
            $table->string('internet1');
            $table->string('4g1');
            $table->string('mobile1');
            $table->string('active_mobile1');
            $table->string('broadband1');
            $table->string('skilled_pool1');
            $table->string('future_pool1');
            $table->string('secondary_pool1');
            $table->string('labs1');
            $table->string('access1');
            $table->string('income1');
            $table->string('income1');
            $table->string('employment1');
            $table->string('startups_pp2');
            $table->string('service_employment2');
            $table->string('it_busns2');
            $table->string('banks_pp2');
            $table->string('device2');
            $table->string('digital_literacy2');
            $table->string('communication2');
            $table->string('internet2');
            $table->string('4g2');
            $table->string('mobile2');
            $table->string('active_mobile2');
            $table->string('broadband2');
            $table->string('skilled_pool2');
            $table->string('future_pool2');
            $table->string('secondary_pool2');
            $table->string('labs2');
            $table->string('access2');
            $table->string('income2');
            $table->string('employment2');
            $table->string('startups_pp3');
            $table->string('service_employment3');
            $table->string('it_busns3');
            $table->string('banks_pp3');
            $table->string('device3');
            $table->string('digital_literacy3');
            $table->string('communication3');
            $table->string('internet3');
            $table->string('4g3');
            $table->string('mobile3');
            $table->string('active_mobile3');
            $table->string('broadband3');
            $table->string('skilled_pool3');
            $table->string('future_pool3');
            $table->string('secondary_pool3');
            $table->string('labs3');
            $table->string('access3');
            $table->string('income3');
            $table->string('employment3');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colombos');
    }
};

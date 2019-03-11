<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->string('NatEmis');
            $table->string('ProvinceCD');
            $table->string('Province');
            $table->string('Institution_Name');
            $table->string('Status');
            $table->string('Sector');
            $table->string('Type_DoE');
            $table->string('Phase');
            $table->string('Specialization');
            $table->string('OwnerLand');
            $table->string('OwnerBuild');
            $table->string('Ownership');
            $table->string('ExDept');
            $table->string('PaypointNo');
            $table->string('ComponentNo');
            $table->string('ExamNo');
            $table->string('ExamCentre');
            $table->string('GIS_Longitude');
            $table->string('GIS_Latitude');
            $table->string('GISSource');
            $table->string('Magisterial_District');
            $table->string('DMunName');
            $table->string('LMunName');
            $table->string('Ward_ID');
            $table->string('EIRegion');
            $table->string('EIDistrict');
            $table->string('EICircuit');
            $table->string('Addressee');
            $table->string('Township_Village');
            $table->string('Suburb');
            $table->string('Town_City');
            $table->string('StreetAddress');
            $table->string('PostalAddress');
            $table->string('Telephone');
            $table->string('Facsimile');
            $table->string('cellno');
            $table->string('E_Mail');
            $table->string('Section21');
            $table->string('Section21_Funct');
            $table->string('Quintile');
            $table->string('NodalArea');
            $table->string('RegistrationDate');
            $table->string('NoFeeSchool');
            $table->string('Allocation');
            $table->string('Urban_Rural');
            $table->string('Open_Boarding_school');
            $table->string('ANA_School');
            $table->string('Full_Service_School');
            $table->string('School_Prototype_size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}

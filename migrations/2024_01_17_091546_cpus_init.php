<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class CpusInit extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('cpus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_number');
            $table->string('brand_string')->nullable();
            $table->integer('physicalcpu')->nullable();
            $table->integer('logicalcpu')->nullable();
            $table->string('perflevel0_name')->nullable();
            $table->integer('perflevel0_physicalcpu')->nullable();
            $table->bigInteger('perflevel0_l1icachesize')->nullable();
            $table->bigInteger('perflevel0_l1dcachesize')->nullable();
            $table->bigInteger('perflevel0_l2cachesize')->nullable();
            $table->bigInteger('perflevel0_l3cachesize')->nullable();
            $table->string('perflevel1_name')->nullable();
            $table->integer('perflevel1_physicalcpu')->nullable();
            $table->bigInteger('perflevel1_l1icachesize')->nullable();
            $table->bigInteger('perflevel1_l1dcachesize')->nullable();
            $table->bigInteger('perflevel1_l2cachesize')->nullable();
            $table->bigInteger('perflevel1_l3cachesize')->nullable();

            $table->unique('serial_number');
            $table->index('brand_string');
            $table->index('physicalcpu');
            $table->index('logicalcpu');
            $table->index('perflevel0_name');
            $table->index('perflevel0_physicalcpu');
            $table->index('perflevel0_l1icachesize');
            $table->index('perflevel0_l1dcachesize');
            $table->index('perflevel0_l2cachesize');
            $table->index('perflevel0_l3cachesize');
            $table->index('perflevel1_name');
            $table->index('perflevel1_physicalcpu');
            $table->index('perflevel1_l1icachesize');
            $table->index('perflevel1_l1dcachesize');
            $table->index('perflevel1_l2cachesize');
            $table->index('perflevel1_l3cachesize');

        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->dropIfExists('cpus');
    }
}

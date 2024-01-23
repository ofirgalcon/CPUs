<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class CpusCacheMore extends Migration
{
    private $tableName = 'cpus';

    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->integer('perflevel0_cpusperl3')->nullable();
                    
            $table->index('perflevel0_cpusperl3');
        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('perflevel0_cpusperl3');
       });
    }
}




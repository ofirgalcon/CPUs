<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class CpusCache extends Migration
{
    private $tableName = 'cpus';

    public function up()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->integer('perflevel0_cpusperl2')->nullable();
            $table->integer('perflevel1_cpusperl2')->nullable();
                    
            $table->index('perflevel0_cpusperl2');
            $table->index('perflevel1_cpusperl2');
        });
    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->table($this->tableName, function (Blueprint $table) {
            $table->dropColumn('perflevel0_cpusperl2');
            $table->dropColumn('perflevel1_cpusperl2');
       });
    }
}




<?php

use munkireport\models\MRModel as Eloquent;

class Cpus_model extends Eloquent
{
    protected $table = 'cpus';

    protected $hidden = ['id', 'serial_number'];

    protected $fillable = [
      'serial_number',
      'brand_string',
      'physicalcpu',
      'logicalcpu',
      'perflevel0_name',
      'perflevel0_physicalcpu',
      'perflevel0_l1icachesize',
      'perflevel0_l1dcachesize',
      'perflevel0_l2cachesize',
      'perflevel0_l3cachesize',
      'perflevel1_name',
      'perflevel1_physicalcpu',
      'perflevel1_l1icachesize',
      'perflevel1_l1dcachesize',
      'perflevel1_l2cachesize',
      'perflevel1_l3cachesize',

    ];
}

CPUs module
==============

CPUs module for MunkiReport. Reports on CPU type and caches. 


Table Schema
-----

Database:
* brand_string - varchar(255) - CPUs
* physicalcpu - int - Number of Cores
* logicalcpu - int - Logical Cores
* perflevel0_name - varchar(255) - Core Type
* perflevel0_physicalcpu - int - Type 1 Cores
* perflevel0_l1icachesize - bigint - L1 Instruction Cache
* perflevel0_l1dcachesize - bigint - L1 Data Cache
* perflevel0_l2cachesize - bigint - L2 Cache
* perflevel0_l3cachesize - bigint - L3 Cache
* perflevel1_name - varchar(255) - Core Type
* perflevel1_physicalcpu - int - Type 2 Cores
* perflevel1_l1icachesize - bigint - L1 Instruction Cache
* perflevel1_l1dcachesize - bigint - L1 Data Cache
* perflevel1_l2cachesize - bigint - L2 Cache
* perflevel1_l3cachesize - bigint - L3 Cache
* perflevel0_cpusperl2 - int - Type 1 cores per L2 Cache
* perflevel1_cpusperl2 - int - Type 1 cores per L2 Cache
* perflevel0_cpusperl3 - int - Type 0 cores per L3 Cache

#!/bin/sh

# Script to collect data
# and put the data into outputfile

CWD=$(dirname $0)
CACHEDIR="$CWD/cache/"
OUTPUT_FILE="${CACHEDIR}cpus.txt"
SEPARATOR=' = '

# Business logic goes here
# Replace 'echo' in the following lines with the data collection commands for your module.
BRAND_STRING=$(sysctl -n machdep.cpu.brand_string)
PHYSICALCPU=$(sysctl -n hw.physicalcpu) 
LOGICALCPU=$(sysctl -n hw.logicalcpu)
PERFLEVEL0_NAME=$(sysctl -n hw.perflevel0.name)
PERFLEVEL0_PHYSICALCPU=$(sysctl -n hw.perflevel0.physicalcpu)
PERFLEVEL0_L1ICACHESIZE=$(sysctl -n hw.perflevel0.l1icachesize)
PERFLEVEL0_L1DCACHESIZE=$(sysctl -n hw.perflevel0.l1dcachesize)
PERFLEVEL0_L2CACHESIZE=$(sysctl -n hw.perflevel0.l2cachesize)
PERFLEVEL0_CPUSPERL2=$(sysctl -n hw.perflevel0.cpusperl2)
PERFLEVEL0_CPUSPERL3=$(sysctl -n hw.perflevel0.cpusperl3)
PERFLEVEL0_L3CACHESIZE=$(sysctl -n hw.perflevel0.l3cachesize)
PERFLEVEL1_NAME=$(sysctl -n hw.perflevel1.name)
PERFLEVEL1_PHYSICALCPU=$(sysctl -n hw.perflevel1.physicalcpu)
PERFLEVEL1_L1ICACHESIZE=$(sysctl -n hw.perflevel1.l1icachesize)
PERFLEVEL1_L1DCACHESIZE=$(sysctl -n hw.perflevel1.l1dcachesize)
PERFLEVEL1_L2CACHESIZE=$(sysctl -n hw.perflevel1.l2cachesize)
PERFLEVEL1_CPUSPERL2=$(sysctl -n hw.perflevel1.cpusperl2)
PERFLEVEL1_L3CACHESIZE=$(sysctl -n hw.perflevel1.l3cachesize)

# Output data here
if [[ -n "${BRAND_STRING}" ]]; then echo "brand_string${SEPARATOR}${BRAND_STRING}" > ${OUTPUT_FILE} ; fi
if [[ -n "${PHYSICALCPU}" ]]; then echo "physicalcpu${SEPARATOR}${PHYSICALCPU}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${LOGICALCPU}" ]]; then echo "logicalcpu${SEPARATOR}${LOGICALCPU}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_NAME}" ]]; then echo "perflevel0_name${SEPARATOR}${PERFLEVEL0_NAME}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_PHYSICALCPU}" ]]; then echo "perflevel0_physicalcpu${SEPARATOR}${PERFLEVEL0_PHYSICALCPU}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_L1ICACHESIZE}" ]]; then echo "perflevel0_l1icachesize${SEPARATOR}${PERFLEVEL0_L1ICACHESIZE}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_L1DCACHESIZE}" ]]; then echo "perflevel0_l1dcachesize${SEPARATOR}${PERFLEVEL0_L1DCACHESIZE}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_L2CACHESIZE}" ]]; then echo "perflevel0_l2cachesize${SEPARATOR}${PERFLEVEL0_L2CACHESIZE}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_CPUSPERL2}" ]]; then echo "perflevel0_cpusperl2${SEPARATOR}${PERFLEVEL0_CPUSPERL2}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_CPUSPERL3}" ]]; then echo "perflevel0_cpusperl3${SEPARATOR}${PERFLEVEL0_CPUSPERL3}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL0_L3CACHESIZE}" ]]; then echo "perflevel0_l3cachesize${SEPARATOR}${PERFLEVEL0_L3CACHESIZE}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL1_NAME}" ]]; then echo "perflevel1_name${SEPARATOR}${PERFLEVEL1_NAME}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL1_PHYSICALCPU}" ]]; then echo "perflevel1_physicalcpu${SEPARATOR}${PERFLEVEL1_PHYSICALCPU}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL1_L1ICACHESIZE}" ]]; then echo "perflevel1_l1icachesize${SEPARATOR}${PERFLEVEL1_L1ICACHESIZE}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL1_L1DCACHESIZE}" ]]; then echo "perflevel1_l1dcachesize${SEPARATOR}${PERFLEVEL1_L1DCACHESIZE}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL1_L2CACHESIZE}" ]]; then echo "perflevel1_l2cachesize${SEPARATOR}${PERFLEVEL1_L2CACHESIZE}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL1_CPUSPERL2}" ]]; then echo "perflevel1_cpusperl2${SEPARATOR}${PERFLEVEL1_CPUSPERL2}" >> ${OUTPUT_FILE} ; fi
if [[ -n "${PERFLEVEL1_L3CACHESIZE}" ]]; then echo "perflevel1_l3cachesize${SEPARATOR}${PERFLEVEL1_L3CACHESIZE}" >> ${OUTPUT_FILE} ; fi

### hw.perflevel0.cpusperl3
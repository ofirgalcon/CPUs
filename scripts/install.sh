#!/bin/bash

# cpus controller
CTL="${BASEURL}index.php?/module/cpus/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/cpus.sh" -o "${MUNKIPATH}preflight.d/cpus.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/cpus.sh"

	# Set preference to include this file in the preflight check
	setreportpref "cpus" "${CACHEPATH}cpus.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/cpus.sh"

	# Signal that we had an error
	ERR=1
fi

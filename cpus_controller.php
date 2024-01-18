<?php 

/**
 * cpus class
 *
 * @package munkireport
 * @author 
 **/
class Cpus_controller extends Module_controller
{
	    function __construct()
    {
        // Store module path
        $this->module_path = dirname(__FILE__);
    }
	
    /**
     * Get cpus information for serial_number
     *
     * @param string $serial serial number
     **/
    public function get_data($serial_number = '')
    {
        $result = Cpus_model::select('cpus.*')
        ->whereSerialNumber($serial_number)
        ->filter()
        ->limit(1)
        ->first();
        if ($result) {
            jsonView($result->toArray());
        } else {
            jsonView([]);
        }
    }

    public function get_list($column = '')
    {
        jsonView(
            Cpus_model::select("cpus.$column AS label")
                ->selectRaw('count(*) AS count')
                ->filter()
                ->groupBy($column)
                ->orderBy('count', 'desc')
                ->get()
                ->toArray()
        );
    }
} 
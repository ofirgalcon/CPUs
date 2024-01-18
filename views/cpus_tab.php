<div id="cpus-tab"></div>
<h2 data-i18n="cpus.title"></h2>

<table id="cpus-tab-table" style="max-width:550px;"><tbody></tbody></table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/cpus/get_data/' + serialNumber, function(data){
        var table = $('#cpus-tab-table');
        $.each(data, function(key,val){
            var th = $('<th>').text(i18n.t('cpus.column.' + key));
            var td = $('<td>').text(val);
            if (key.includes("size")) {
                td = $('<td>').text(cacheSize(val));
            } else {
                td = $('<td>').text(val);  
            }
            table.append($('<tr>').append(th, td));
        });
    });
});

function cacheSize(size, decimals){
	// Check if number
	if(!isNaN(parseFloat(size)) && isFinite(size)){
		if(size == 0){ return '0 B'}
		if(decimals == undefined){decimals = 0};
		var i = Math.floor( Math.log(size) / Math.log(1024) );
		return ( size / Math.pow(1024, i) ).toFixed(decimals) * 1 + ' ' + ['', 'K', 'M', 'G', 'T', 'P', 'E'][i] + 'B';
	}
}

</script>

// The plugin function for adding a new filtering routine
    $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($("#dateStart").val());
            var dateEnd = parseDateValue($("#dateEnd").val());
            // aData represents the table structure as an array of columns, so the script access the date value
            // in the first column of the table via aData[0]
            var evalDate= parseDateValue(aData[0]);
            if (evalDate >= dateStart && evalDate <= dateEnd) {
                return true;
            }
            else {
                return false;
            }
        });
    // Function for converting a mm/dd/yyyy date value into a numeric string for comparison (example 08/12/2010 becomes 20100812
    function parseDateValue(rawDate) {
        var dateArray= rawDate.split("/");
        var parsedDate= dateArray[2] + dateArray[0] + dateArray[1];
        return parsedDate;
    }
    $(function() {
        
        // Create event listeners that will filter the table whenever the user types in either date range box or
        // changes the value of either box using the Datepicker pop-up calendar
        $("#dateStart").keyup ( function() { $dTable.fnDraw(); } );
        $("#dateStart").change( function() { $dTable.fnDraw(); } );
        $("#dateEnd").keyup ( function() { $dTable.fnDraw(); } );
        $("#dateEnd").change( function() { $dTable.fnDraw(); } );
    });

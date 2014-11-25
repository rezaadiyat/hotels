
$(function() {
	var datenow = new Date();
	var outputnow = datenow.getMonth()+1+'/'+datenow.getDate()+'/'+datenow.getFullYear();
	var datetomorrow = datenow.getDate()+1;
	var outputtomorrow = datenow.getMonth()+1+'/'+datetomorrow+'/'+datenow.getFullYear();
	$('#datepickerin').val(outputnow);
	$('#datepickerout').val(outputtomorrow);
	$('#datepickerin').datepicker({minDate: 0, onSelect: function(selectedDate) {
		var minDate = $(this).datepicker('getDate');
		if (minDate) {
		minDate.setDate(minDate.getDate() + 1);
		}
		$('#datepickerout').datepicker('option', 'minDate', minDate || 2); // Date + 1 or tomorrow by default
		$('#datepickerout').val(minDate.getMonth()+1+'/'+minDate.getDate()+'/'+minDate.getFullYear());
	}});
	$('#datepickerout').datepicker({minDate: 1, onSelect: function(selectedDate) {
	var maxDate = $(this).datepicker('getDate');
		if (maxDate) {
		maxDate.setDate(maxDate.getDate() - 1);
		}
		$('#datepickerin').datepicker('option', 'maxDate', maxDate); // Date - 1
	}});
	$('.required-icon').tooltip({
    	placement: 'left',
        title: 'Required field'
    });
	//$( "#datepickerout").datepicker();
	//$( "#datepickerin" ).datepicker();
	//$( "#datepickerin" ).datepicker('setDate',new Date());
	//$( "#datepickerin").change(function(){
	//	var date = new Date($(this).val());
	//	$( "#datepickerout" ).datepicker("setDate",date);
	//$( "#datepickerout" ).val(date1);
	//});
	//$("#checkout").text($("#checkin").val());
});

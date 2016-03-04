$('body').addClass('fuelux');

function disableHidden() {
//	$( "input.hidden" ).attr('disabled', true);
//	$( "select.hidden" ).attr('disabled', true);
}


function disableHide(sclass) {
	$(sclass).addClass('hidden');
	$(sclass).attr('disabled', true);
	$(sclass).attr('disabled', true);
}

function enableshow(sclass) {
	$(sclass).removeClass('hidden');
	$(sclass).attr('disabled', false);
	$(sclass).attr('disabled', false);
}


function repeatChange() {
	disableHide('.r_all');
	var repeat = $('#form-repeat').val();
	enableshow('.r_'+repeat);
	endsChange(true)
}


function endsChange(hide) {
	disableHide('.e_all');
    if (hide == true){
    	$('#form-Ends').val('never');
    }

	var end_at = $('#form-Ends').val();
	enableshow('.e_'+end_at);

}


function monthOnChange() {
	disableHide('.mo_all');
    
	var on = $('#form-month-on').val();
	enableshow('.mo_'+on);
}


function yearOnChange() {
	disableHide('.yr_all');
    
	var on = $('#form-year-on').val();
	enableshow('.yr_'+on);

}

    

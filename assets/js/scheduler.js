$('body').addClass('fuelux');

function myFunction() {
var $data = $('#myScheduler').scheduler('value');

$('#rrule').val($data.recurrencePattern + ' ' + $data.startDateTime);
}

$('#myScheduler').scheduler({
    startDateOptions: {
      allowPastDates: true
    },
    endDateOptions: {
      sameYearOnly: true
    }
  });
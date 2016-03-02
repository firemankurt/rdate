component\Rrdate.php 
- Loads JS and CSS 
- handles onProcess() to update answer div with RRDATE

component\rrdate\default.htm
- has markup from http://getfuelux.com/javascript.html#scheduler-usage-markup
- Div containing "MySchedulerEveryLabel" has "repeat-monthly" added to class to fix Invterval when monthly is chosen
- input "#rrule" was added so that RRULE string would be returned on submit


component\rrdate\oldForm.htm
- This is the Mycalendar frontend form in current version
- Needs to have RRULE to produce recuring dates

ISSUES TO FIX
 - This does not work well in mobile view on android.
 	- Datefield too small and pop-calendar is half hidden
 - Tried using Date and Time pickers from October ( as was used in original form)
 	- JS needed to use datepicker appears to conflict ( /modules/backend/formwidgets/datepicker/assets/js/build-min.js )
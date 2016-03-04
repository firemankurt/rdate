component\Rrdate.php 
- Loads JS and CSS 
- handles onProcess() to update answer div with RRDATE

component\rrdate\defaultUX.htm
- has markup from http://getfuelux.com/javascript.html#scheduler-usage-markup
- Div containing "MySchedulerEveryLabel" has "repeat-monthly" added to class to fix Invterval when monthly is chosen
- input "#rrule" was added so that RRULE string would be returned on submit

component\rrdate\default.htm
- has new form built for October

component\partials\
- **has the various field partials that make up the form


component\rrdate\oldForm.htm
- This is the Mycalendar frontend form in current version



ISSUES THAT ARE FIXED
 - This does not work well in mobile view on android.
 	- Datefield too small and pop-calendar is half hidden
 - Tried using Date and Time pickers from October ( as was used in original form)
 	- JS needed to use datepicker appears to conflict ( /modules/backend/formwidgets/datepicker/assets/js/build-min.js )

ISSUES TO FIX
 - **Timezone field (component\partials\timezone.htm) needs to be set to a default for users based on a site preference or user location
 - **Will change all labels and dropdown text to use LANG files
 - Will need to translate RRULE back to RRULE form state for editing
 - How are we going to handle changes in recurrence
 	- __Shift existing occurrences then delete/add if needed__
 		- This will keep any relation models to individual occurrences that could be created by other plugins
 		- Should notify related model of change through some  kind of event trigger.

 	OR

 	- __Delete all then re-insert__
 		- This will break any relation models to individual occurrences that could be created by other plugins
 		- Should notify related model of change through some  kind of event trigger.


 ** Please feel free to contribute
KurtJensen\MyCalendar\Classes\RRForm
- Produces RRule portion of MyCalendar frontend form
- Handles all RRule Parsing and UnParsing

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
 - This now works well in mobile view on android.
 - Using Date and Time pickers from October ( as was used in original form)
 - Timezone not needed right now and will be implemented later
 - Labels are in LANG files ( Arrays still need help )
 - Changes in Recurrence are now handled by shifting

ISSUES TO FIX
 - Timezone field (component\partials\timezone.htm) needs to be set to a default for users based on a site preference or user location
 - How are we going to handle changes in recurrence
 	- __Shift existing occurrences then delete/add if needed__
 		- This will keep any relation models to individual occurrences that could be created by other plugins
 		- Should notify related model of change through some  kind of event trigger.

 	OR

 	- __Delete all then re-insert__
 		- This will break any relation models to individual occurrences that could be created by other plugins
 		- Should notify related model of change through some  kind of event trigger.


 ** Please feel free to contribute

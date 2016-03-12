KurtJensen\MyCalendar\Classes\RRForm
- Produces RRule portion of MyCalendar frontend form
- Handles all RRule Parsing and UnParsing
- 
- This REPO has been merged locally to MyCalendar and will appear in next Update

ISSUES THAT ARE FIXED
 - This now works well in mobile view on android.
 - Using Date and Time pickers from October ( as was used in original form)
 - Timezone not needed right now and will be implemented later
 - Labels are in LANG files ( Arrays still need help )
 - Changes in Recurrence are now handled by shifting ( editing times ) current records and soft deleting extra entries for reuse or final delete.

ISSUES TO FIX
 - Timezone field (component\partials\timezone.htm) needs to be set to a default for users based on a site preference or user location
 - Should notify related model of change through some  kind of event trigger.

<h3>Overview</h3>
<p>
	The iCalendarParser both (A) exports an iCalendarData object to an an 
	iCalendar formatted string and (B) imports an iCalendar formatted string and 
	converts it to an iCalendarData object.
</p>

<h3>Creating the iCalendarParser</h3>
<p>
	The iCalendarParser is completely static. There is no need to initialize 
	any classes.
</p>

<h3>Using the iCalendarParser</h3>
<p>
	The iCalendarParser only has 2 interface methods: importICalendar and 
	exportICalendar.
</p>
<p>
	To import an iCalendar file, pass the entire iCalendar parsed string 
	(typically from an *.ics file) to the "importICalendar()" method. The method 
	will return an iCalendarData object with all the events and the calendar 
	parsed as SchedulingData and CalendarDefinitionData objects respectively.
</p>
<p>
	To export scheduling data to an iCalendar text file, pass an iCalendarData
	object to the "exportICalendar()" method. It will return a string that can 
	be stored as an *.ics file.
</p>

<h3>Timezone Considerations</h3>
<p>
	Exporting uses UTC time for everything to avoid timezone definitions due to 
	Flash timezone limitations.
</p>
<p>
	Importing iCalendar strings will accept events in specific timezones as long 
	as the string complies with the iCalendar specification and describes the 
	timezone UTC offset for both standard and daylight savings. VTIMEZONE 
	definitions should appear above VEVENTS in the iCalendar feed.
</p>
<p>
	Supports only 1 standard and 1 daylight savings definition per timezone.
</p>

<h3>Error Checking</h3>
<p>
	There is only minimal error checking for imported feeds, so be sure the feed 
	complies with the iCalendar specification. One Calendar per feed.
</p>

<h3>Example</h3>
<p>
	See the iCalendarParser demo application for example code.
</p>
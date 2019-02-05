<h3>Overview</h3>
<p>
	Generates and returns an array of Date objects created by the provided 
	SchedulingData object's recurrence properties. Follows the iCalendar 
	specification, located at http://tools.ietf.org/html/rfc5545.
</p>

<h3>Creating the iCalendarRecurrence Component</h3>
<p>
	Class is entirely static. Therefore there is no need to create an instance 
	to use it. Simply call the generateRecurrenceDates() method to use the 
	class.
</p>

<h3>Using the iCalendarRecurrence Component</h3>
<p>
	Call the generateRecurrenceDates() method and pass the SchedulingData object 
	to use and a start date. The method will return an array of the generated 
	recurring dates.
</p>
<p>
	The passed start date parameter is optional and indicates when to start 
	generating recurring dates rather than the "dtStart" property of the 
	provided SchedulingData object.  The optional start date will not be 
	returned in the results array.
</p>
<p>	
	Custom start dates are useful to get portions of an infinite recurrence set.
</p>

<h3>Infinite Recurrence</h3>
<p>
	If the SchedulingData object being used to generate recurrence does not 
	specify an "until" or "count" properties it could create an infinite number 
	of recurring dates. To prevent this from happening, the "defaultUntil" 
	property can be set to automatically apply a date to short circuit if the 
	passed SchedulingData object does not explicitly designate a short-circuit 
	date.
</p>
<p>
	In the event that none of the above properties are set, the class will 
	automatically apply a short circuit 2 years after the start date for the 
	recurrence.
</p>

<h3>Recurrence Frequency Order</h3>
<p>
	Taken from the iCalendar specification:
</p>
<pre class="prettyprint">
 +----------+--------+--------+-------+-------+------+-------+------+
 |          |SECONDLY|MINUTELY|HOURLY |DAILY  |WEEKLY|MONTHLY|YEARLY|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYMONTH   |Limit   |Limit   |Limit  |Limit  |Limit |Limit  |Expand|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYWEEKNO  |N/A     |N/A     |N/A    |N/A    |N/A   |N/A    |Expand|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYYEARDAY |Limit   |Limit   |Limit  |N/A    |N/A   |N/A    |Expand|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYMONTHDAY|Limit   |Limit   |Limit  |Limit  |N/A   |Expand |Expand|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYDAY     |Limit   |Limit   |Limit  |Limit  |Expand|Note 1 |Note 2|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYHOUR    |Limit   |Limit   |Limit  |Expand |Expand|Expand |Expand|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYMINUTE  |Limit   |Limit   |Expand |Expand |Expand|Expand |Expand|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYSECOND  |Limit   |Expand  |Expand |Expand |Expand|Expand |Expand|
 +----------+--------+--------+-------+-------+------+-------+------+
 |BYSETPOS  |Limit   |Limit   |Limit  |Limit  |Limit |Limit  |Limit |
 +----------+--------+--------+-------+-------+------+-------+------+

Note 1:  Limit if BYMONTHDAY is present; otherwise, special expand
	 or MONTHLY.

Note 2:  Limit if BYYEARDAY or BYMONTHDAY is present; otherwise,
	 special expand for WEEKLY if BYWEEKNO present; otherwise, special expand 
	 for MONTHLY if BYMONTH present; otherwise, special expand for YEARLY.
</pre>

<h3>SchedulingData</h3>
<p>
	See the ASDocs for the ardisia.scheduling.dataTypes.SchedulingData class for 
	the pertinent recurrence properties.
</p>

<h3>Example</h3>
<p>
	See the iCalendarRecurrence demo application for example code.
</p>
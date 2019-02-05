<h3>Overview</h3>
<p>
	The Calendar component is a typical calendar that can display scheduling 
	data. Designed for maximum efficiency, performance, and customization.
</p>

<h3>Creating the Calendar</h3>
<p>
	The Calendar extends SkinnableComponent so it can be added to any parent
	that implements IVisualElementContainer.
</p>

<h3>Using the Calendar</h3>
<p>
	The Calendar component displays calendar data in one of 3 display modes: 
	"column", "grid", and "columnAndAllDayGrid". "column" displays data in 
	columns, and is the typical week or day calendar presentation. "grid" 
	displays data in a series of rows and columns and is typical of a weeks or 
	month calendar presentation. "columnAndAllDayGrid" is a combination of both 
	column and grid display modes by using a grid view for all-day events and a 
	column view for the non all-day data.
</p>

<h3>DataProvider</h3>
<p>
	The dataProvider accepts an IList implementing collection of SchedulingData 
	objects. Each SchedulingData object will be used to define renderers.  Due 
	to calendar recurrence (repeating events), a single SchedulingData object 
	may define an infinite number of renderers.
</p>
<p>
	The Calendar only makes changes to the dataProvider when items are dragged 
	or resized. Additional changes to the underlying data can be handled 
	externally by a custom interaction management component. Listen for 
	collection events on the dataProvider to detect changes.
</p>
<p>
	Note: when making bulk changes to the dataProvider, it is much faster to 
	create a new dataProvider completely than to add large numbers of objects 
	to an existing dataProvider individually.
</p>

<h3>Configuring Calendars</h3>
<p>
	The Ardisia Calendar component can display multiple calendars at any given 
	time.  Such calendars are defined by "CalendarDefinitionData" objects and
	these objects allow the user to define the name, color, and a multitude of 
	other properties. Typically, these objects are not passed directly to the 
	Ardisia Calendar, instead they are referenced by each SchedulingData object 
	on its "calendar" property. 
</p>
<p>
	Multiple calendars can be displayed in individual columns in the COLUMN mode 
	by passing an ICollection of CalendarDefiniteData objects to the 
	"subColumnsCalendars" property.
</p>

<pre class="prettyprint">
calendar.subColumnsCalendars = new ArrayCollection(calendars);
</pre>

<h3>Item Renderers</h3>
<p>
	There are a multitude of renderer classes. See the skin for all the defined
	factories.
</p>
<p>
	To increase performance, item renderers for the events for the column and 
	grid mode may be cached. Use the "cachedColumnRenderers" and 
	"cachedGridRenderers" to set the number of cached renderers. Higher numbers 
	will increase startup time, but should increase runtime performance.
</p>
<p>
	The included item renderer classes for the event renderers are pure 
	actionscript and are very performant. However, they are hard to customize.
	Feel free to create MXML based item renderers, but keep in mind the 
	potential performance hit if you are displaying large numbers of renderers.
</p>

<h3>Selection</h3>
<p>
	Event renderers can be selected by clicking on them.  Multiple selection is 
	supported by holding down the CTRL or SHIFT key while mousing down over 
	event renderers and "allowMultipleSelection" is true.
</p>
<p>
	Accessing the selected data is done via the bindable "selectedData" property 
	of type SelectedCalendarData.
</p>
<p>
	Time periods can also be selected by mousing down and dragging over the 
	calendar grid or columns. The selected time period is accessible via the 
	"selectedPeriod" property. It is useful for setting up the time period for 
	new events.
</p>

<h3>Dragging and Resizing Event Renderers</h3>
<p>
	If "dragEnabled" is true, users can drag event renderers around and change 
	their start/end dates.  Also, for the COLUMN view, users can resize the 
	duration of the event by dragging. See the "resizeThreshold", 
	"autoScrollThreshold" properties.
</p>

<h3>Configuring The Display</h3>
<p>
	Set the display mode via the "displayMode" property. Possible values are 
	"column", "columnAndAllDayGrid", and "grid" which correspond roughly to
	week and month views. Next set the first day to display via the "startDate" 
	property and then set the number of columns and rows to display via the 
	"columnCount" and "rowCount" properties.
</p>
<p>
	By default, each day of the week is displayed.  To disable display of 
	certain days of the week use the "showMonday", "showTuesday", etc.
	properties.  This enables developers to create novel display modes. For 
	example, one could display the next 100 Mondays by using the following 
	setup:
</p>
<pre class="prettyprint">
&lt;ardisia:calendar showMonday="true" 
	showTuesday="false" 
	showWednesday="false" 
	showThursday="false" 
	showFriday="false" 
	showSaturday="false" 
	showSunday="false"
	displayMode="grid"
	columnCount="10"
	rowCount="10"/&gt;
</pre>
<p>
	The beginning time displayed in the COLUMN displayMode is set via the 
	"startTime" property and the end time displayed is set by the "endTime" 
	property.  The number of minutes visible at any given time is set via the 
	"primaryTimeIntervalMinutes" property.
</p>
<p>
	For example: For the calendar below:
</p>
<pre class="prettyprint">
&lt;ardisia:calendar startTime="480" 
	endTime="1380"
	primaryTimeIntervalMinutes="600"/&gt;
</pre>
<p>
	This calendar would start display at 6:00 am and end at 11:00 pm. The total 
	time displayed at any time would be 10 hours.
</p>

<h3>Layout</h3>
<p>
	Layout is tied into the host component's updateDisplayList() method.
</p>

<h3>Focus and Accessibility</h3>
<p>
	The Calendar does implement focus, but the item renderers do not accept 
	focus out of the box. If desired, focusable item renderers should be added 
	by the developer.  
</p>

<h3>Default Property</h3>
<p>
	The IList implementing "dataProvider".
</p>

<h3>Helper Classes</h3>
<p>
	There are many classes useful for setting up the forms, calendar pickers, 
	etc., for use with the Calendar.  See the DisplayUtils, ObjectUtils, 
	DatePicker classes as well as the demo assets for the Calendar demo 
	application.
</p>

<h3>StoreData</h3>
<p>
	Due to the fact that SchedulingData objects can define an infinite number of 
	renderers due to iCalendar defined recurrence, there isn't always a 1 to 1 
	ratio of item renderers to objects in the dataProvider.  For example, if a 
	single SchedulingData object repeats weekly, the calendar may have to create 
	10 item renderers to display all the repeating events.  In this case, only 
	one SchedulingData object exists, but 10 data objects were created to 
	represent the renderers.
</p>
<p>
	Internal data items created by the Calendar are of the "StoreData" type and 
	there is a 1 to 1 ratio of StoreData objects to item renderers.  The only 
	way to access these data items without overriding is to call the 
	"getStoreData()" method. Each StoreData objects has a reference to the 
	SchedulingData object used to create it. This is useful for advanced 
	customization.
</p>

<h3>DateMap</h3>
<p>
	Since developers can set which days of the week to display and the number 
	of rows and columns, the actual days displayed can be rather tricky to 
	calculate.  To access the array that defines the displayed days, use the 
	"getDateMap()" method.
</p>
<p>
	The returned array is a 1-dimensional array of Date objects, arranged in the 
	order of display. This is useful for advanced customization.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin is provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the Calendar demo application for example code.
</p>



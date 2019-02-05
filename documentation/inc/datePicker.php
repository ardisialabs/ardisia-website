<h3>Overview</h3>
<p>
	The DatePicker component is a datepicker that conforms in appearance and 
	functionality more closely to those of desktop calendar clients than the 
	default Flex SDK DateChooser. 
</p>
<p>
	It also allows for more robust customization, particularity in regards to 
	its appearance due to skinning and custom item renderers.
</p>

<h3>Creating the DatePicker Component</h3>
<p>
	The DatePicker component extends the Flex SkinnableComponent class and it 
	can be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the DatePicker Component</h3>
<p>
	Users can select a day via clicking a day number item renderer or keyboard 
	interaction.  The selected date can be retrieved via the "selectedDate" 
	property.  The selectedDate Date object's time is scrubbed, meaning that 
	only the day, month, and year data is available on the Date object.
</p>

<h3>Setting the Displayed Month</h3>
<p>
	Set the "displayedMonth" property with a Date object that defines the month 
	you want to display. E.G. for September, September 1, 2020 and September 21, 
	2020, Date objects would both register the displayedMonth as September, 
	2020.
</p>

<h3>Setting the First Day of the Week</h3>
<p>
	Set the "firstDayOfWeek" property. 0 = Sunday... 6 = Saturday.
</p>

<h3>Setting An Optional Highlighted Date Range</h3>
<p>
	The "highlightedDateRange" property defines the beginning and end dates for 
	a date range that should be highlighted or displayed differently.
</p>
<p> 	
	Useful to style dates differently when they are displayed in a calendar, 
	selected in a different component, or contextually relevant. 
</p>

<h3>Item Renderers</h3>
<p>
	The renderers for the day numbers and day names are skin parts and are 
	defined in the skin. The day numbers renderers implement 
	ardisia.scheduling.datePicker.interfaces.IDayNumbersRenderer and the day 
	names renderers implement 
	ardisia.scheduling.datePicker.interfaces.IDayNamesRenderer.
</p>

<h3>Accessibility</h3>
<p>
	Field can be tabbed to and the "selectedDate" can be changed via keyboard 
	interaction.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>MONTH_CHANGE</b><br>
	ardisia.scheduling.datePicker.events.DatePickerEvent<br>
	Dispatched when the currently displayed month changes.
</p>
<p>
	<b>SELECTED_DATE_CHANGE</b><br>
	ardisia.scheduling.datePicker.events.DatePickerEvent<br>
	Dispatched when the selected date changes.
</p>


<h3>Selected Custom Styles</h3>
<p>
	<b>borderColor</b><br>
	default defaults.css<br>
	The color of the border.
</p>
<p>
	<b>borderAlpha</b><br>
	default 1<br>
	The alpha of the border.
</p>
<p>
	<b>borderVisible</b><br>
	default true<br>
	True to display a border.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, Stockholm, and London themes.
</p>

<h3>Example</h3>
<p>
	See the DatePicker demo application for example code.
</p>
<h3>Overview</h3>
<p>
	Component designed to help users select a time, specific to the minute.  At 
	first glance, appears to be a simple ComboBox with a list of time strings, 
	but it is fact much more complex.
</p>

<h3>Creating the TimePicker Component</h3>
<p>
	The TimePicker extends the ComboBox class.  It can be added as a child to 
	any container that implements IVisualElementContainer.
</p>

<h3>Using the TimePicker Component</h3>
<p>
	Time is selected and stored via minutes in a day.  In other words, from 0 
	(12:00am) to 1439 (11:59pm). Times displayed in the drop down within the 
	day are determined by the "snapInterval" property. Users can enter any 
	custom time, and that value will be added to the drop-down.  The selection 
	can be retrieved via the "selectedMinutes" property. 
</p>
<p>
	A value of -1 means that no selection has been made.
</p>

<h3>Parsing User Entered Strings</h3>
<p>
	On commit of a user entered string in the text input skin part, the 
	TimePicker will attempt to parse a readable time. E.G. if the user enters 
	902, the parser will guess 9:02am.  Another example is that 9p would be 
	converted to 9pm.  If the user entered string cannot be parsed, an error 
	message will be delivered to the user and the selectedMinutes will be set 
	to -1.
</p>

<h3>Time Hinting</h3>
<p>
	The component will "hint" at the closest time in the drop down menu based on 
	the user entered string, but will not select the time. This is the hinted 
	index. The hinted index will be displayed in the center of the drop down but 
	not selected. Keyboard navigation will start from the hinted index if no 
	selection has been made.
</p>

<h3>Item Renderers</h3>
<p>
	Custom renderers should implement the ITimePickerRenderer interface, which 
	supports hinting at renderers.
</p>
<p>
	Supports an additional state over the ComboBox renderers: "isHinted". 
	isHinted is used to indicate visually which index is hinted at.
</p>

<h3>Accessibility and Keyboard Navigation</h3>
<p>
	Supports ComboBox keyboard navigation.  The only difference is that 
	scrolling while the drop down is active begins from the hinted index.
</p>

<h3>Exclusions from the API</h3>
<p>
	Do not edit the dataProvider or any of the following properties since they 
	are managed or set internally: "dataProvider", "labelFunction", 
	"labelToItemFunction", "labelField", "itemMatchingFunction", "restrict", 
	"maxChars".
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins for the Spark, Stockholm, and London themes are provided.
</p>

<h3>Example</h3>
<p>
	See the TimePicker demo application for example code.
</p>
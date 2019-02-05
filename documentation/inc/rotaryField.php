<h3>Overview</h3>
<p>
	Field used to select an angle from 0 to 360 degrees.
</p>

<h3>Creating the RotaryField Component</h3>
<p>
	The RotaryField is a Spark SkinnableComponent and can be added to any 
	container that implements IVisualElementContainer.
</p>

<h3>Using the RotaryField Component</h3>
<p>
	Use the "snapInterval" property to change the interval the user is allowed 
	to set the "value" to.  For example, to allow the selection of: 0, 45, 90, 
	135, 180, 225, 270, 315, or 360 as possible values, the "snapInterval" 
	should be 45.
</p>
<p>
	The Flash based coordinate system has 0 degrees at due East. The 
	"angleOffset" property controls how many degrees the location of 0 degrees 
	from due East is offset. Positive increases in angle move the angle in a 
	clockwise direction.
</p>
<p>
	If a value is provided that is greater than 360 degrees, the value will be
	the modulo of 360.
</p>

<h3>Accessibility &amp; Focus</h3>
<p>
	Field can be tabbed to and value committed via the ENTER key.
</p>
<p>
	If the wheel popup is displayed, it can be closed via the ESCAPE key.
</p>
<p>
	The text input field can receive focus.  The popup rotary wheel takes focus 
	from the textfield.
</p>

<h3>Custom Events</h3>
<p>
	<b>CLOSE</b><br>
	ardisia.components.rotaryField.events.RotaryFieldEvent<br>
	Dispatched when the rotary wheel is closed (hidden).
</p>
<p>
	<b>OPEN</b><br>
	ardisia.components.rotaryField.events.RotaryFieldEvent<br>
	Dispatched when the rotary wheel is opened (displayed).
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.rotaryField.events.RotaryFieldEvent<br>
	Dispatched when the "value" property changes due to user interaction.
</p>
<p>
	<b>VALUE_COMMIT</b><br>
	ardisia.components.rotaryField.events.RotaryFieldEvent<br>
	Dispatched when the "value" property changes.
</p>

<h3>Custom Styles</h3>
<p>
	<b>paddingRight</b><br>
	default 3<br>
	Right padding for the text field.
</p>
<p>
	<b>paddingBottom</b><br>
	default 3<br>
	Bottom padding for the text field.
</p>
<p>
	<b>paddingLeft</b><br>
	default 3<br>
	Left padding for the text field.
</p>
<p>
	<b>paddingTop</b><br>
	default 5<br>
	Top padding for the text field.
</p>


<h3>Themes &amp; Skinning</h3>
<p>
	Included are Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	Simple Example:
<pre class="prettyprint">
&lt;rotaryField:RotaryField snapInterval="45" 
			 angleOffset="0" /&gt;
</pre>
</p>
<p>
	See the RotaryField demo application for additional example code.
</p>
	
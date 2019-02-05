<h3>Overview</h3>
<p>
	Field used to select a numerical value.
</p>
<p>
	Combines a text input (restricted to numbers only) with a vertical slider.  
	The vertical slider thumb is centered beneath the mouse for efficient 
	adjustments.
</p>

<h3>Creating the SliderField Component</h3>
<p>
	The SliderField is a Spark SkinnableComponent and can be added to any 
	container that implements IVisualElementContainer.
</p>

<h3>Using the SliderField Component</h3>
<p>
	Use the "snapInterval" property to change the intervals the user is allowed 
	to set the "value".  For example, to allow the selection of: 0, 45, 90, 135, 
	180, 225, 270, 315, or 360 as possible values, the "snapInterval" should be 
	45. 
</p>
<p>
	Set the maximum and minimum allowable value via the "maximum" and "minimum" 
	properties.
</p>
<p>
	A value of NaN means that the user entered a blank value, just like for the 
	NumericStepper control.
</p>

<h3>Accessibility &amp; Focus</h3>
<p>
	Field can be tabbed to and value committed via the ENTER key.
</p>
<p>
	If the slider is open, the value can be committed and the slider popup
	closed via the ENTER key.
</p>
<p>
	The text input field can receive focus.  The popup VSlider takes focus from 
	the textfield.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CLOSE</b><br>
	ardisia.components.sliderField.events.SliderFieldEvent<br>
	Dispatched when the slider is closed (hidden).
</p>
<p>
	<b>OPEN</b><br>
	ardisia.components.sliderField.events.SliderFieldEvent<br>
	Dispatched when the slider is opened (displayed).
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.sliderField.events.SliderFieldEvent<br>
	Dispatched when the "value" property changes due to user interaction.
</p>
<p>
	<b>VALUE_COMMIT</b><br>
	ardisia.components.sliderField.events.SliderFieldEvent<br>
	Dispatched when the "value" property changes.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Included are skins for the Spark, Stockholm, and London themes.
</p>

<h3>Example</h3>
<p>
	Simple Example:
<pre class="prettyprint">
&lt;sliderField:SliderField snapInterval="10" 
			 maximum="100"
			 minimum="100" /&gt;
</pre>
</p>
<p>
	See the SliderField demo application for example code.
</p>



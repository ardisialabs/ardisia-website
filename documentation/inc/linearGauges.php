<h3>Overview</h3>
<p>
	The HlinearGauge and VLinearGauge components are enhanced sliders with 
	support for multiple thumbs, tick marks, labels, thumb labels, and more.
</p>

<h3>Creating the Linear Gauge Components</h3>
<p>
	Both gauges extend the Flex SliderBase class which means that they can be
	added to any container that implements IVisualElementContainer.
</p>

<h3>Using the Linear Gauge Components</h3>
<p>
	The horizontal (HLinearGauge) and the vertical (VLinearGauge) gauges
	operate identically except for the axis the thumbs slide along.
</p>
<p>
	If the "useMultiThumb" property is false then the most relevant property is 
	"value", which is the currently set, bindable, value. If the "useMultiThumb" 
	property is true, then to get the min/max value of the range created by the 
	multiple thumbs, use the "values" property.  Also, use the "values" property 
	to set the values for multiple thumbs.
</p>
<p>
	Like other SliderBase components, use minimum and maximum to set the bounds
	of acceptable values.
</p>

<h3>Tick Marks</h3>
<p>
	If "showTicks" is true, then major and minor ticks will be displayed.  Major
	ticks are ticks that can display a label next to them and minor ticks are 
	ticks displayed between the major ticks.  
</p>
<p>
	If "showTicks" is true, there are a minimum of 2 major ticks.
</p>

<h3>Tick Labels</h3>
<p>
	Tick labels will by default display the numerical value of the major ticks
	they are next to.  The precision of the number displayed is set via the 
	"labelDefaultPrecision" property.
</p>
<p>
	Use the "labelsFormatFunction" to display custom labels.
</p>
<p>
	Set the "showTickLabels" property to false to not display the major tick 
	labels.
</p>

<h3>MultiThumb</h3>
<p>
	To display a second thumb, set the "useMultiThumb" property to true.  The 
	second thumb can be dragged just like the primary thumb and its value will 
	be available via the "values" property.
</p>
<p>
	To display labels for the current thumb values, set "showThumbLabels" to true.
</p>

<h3>Range Button</h3>
<p>
	If a second thumb is displayed, a button can be displayed between the thumbs
	called the range button if the "showRange" property is true.
</p>
<p>
	The range button is draggable and can update the "values".
</p>

<h3>Min/Max Range Spans</h3>
<p>
	If a second thumb is displayed, the minimum and maximum value of the range
	created, in addition to the minimum/maximum of the bounds, can be created.  
	In other words the difference between the max/min of the range can be set.  
	E.G. If the thumbs had the following values (50, 100) the range span would 
	be 50. Thus, if the "minimumRangeValue" was set to 50 the values could not 
	be moved in any closer.  Also, if the "maximumRangeValue" was 50, the thumbs 
	could also not be moved apart.  
</p>
<p>
	Useful to constrain the size of the range span.
</p>

<h3>Layout</h3>
<p>
	Measurement should accurately measure the size of the component based on
	whether ticks are displayed, labels, thumb labels, etc.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	If the track is directly clicked, the thumb will animate to the new value.
	The duration of this animation can be set via the inherited "slideDuration" 
	style.
</p>
<p>
	If multiple thumbs are present on a track click, the closet thumb will
	animate to the new value.
</p>

<h3>Accessibility</h3>
<p>
	Fields can be tabbed to and interacted with via the keyboard.  If multiple
	thumbs are displayed, only the primary thumb can be altered via keyboard
	interaction.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>RANGE_DRAG_START</b><br>
	ardisia.components.gauges.events.GaugeEvent<br>
	Dispatched at the beginning of range button drag.
</p>
<p>
	<b>RANGE_DRAG_END</b><br>
	ardisia.components.gauges.events.GaugeEvent<br>
	Dispatched at the end of a range button drag.
</p>
<p>
	<b>RANGE_DRAGGING</b><br>
	ardisia.components.gauges.events.GaugeEvent<br>
	Dispatched during range button dragging.
</p>
<p>
	<b>VALUES_COMMIT</b><br>
	ardisia.components.gauges.events.GaugeEvent<br>
	Dispatched when the value(s) change.
</p>

<h3>Selected Custom Styles</h3>
<p>
	See ASDocs for GaugeBase and LinearGaugeBase.  Numerous custom styles.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins for the Spark, London, and Stockholm themes are provided.
</p>

<h3>Example</h3>
<p>
	See the Linear Gauges demo application for example code.
</p>
	



<h3>Overview</h3>
<p>
	The RadialGauge component is a circular slider with tick mark support. The
	arc length is customizable.
</p>

<h3>Creating the RadialGauge Component</h3>
<p>
	The RadialGauge extends the Flex SliderBase class, which means that it can 
	be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the RadialGauge Component</h3>
<p>
	The most relevant property is "value", which is the currently set, bindable, 
	value. The "angleStart" and "angleEnd" properties are used to define the arc 
	length that the slider will sweep out.
</p>
<p>
	Like other SliderBase components, use minimum and maximum to set the bounds
	of acceptable values.
</p>

<h3>Tick Marks</h3>
<p>
	If "showTicks" is true, then major and minor ticks will be displayed. Major
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
	Use the "showTickLabels" property to not display major tick labels.
</p>

<h3>Static Infometrics</h3>
<p>
	Set the "editable" property to false to simply display data and not allow
	user interaction.  See the 3rd example of the RadialGauge demo for an 
	example.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	If the track is directly clicked, the thumb will animate to the new value.
	The duration of this animation can be set via the inherited "slideDuration" 
	style.
</p>

<h3>Accessibility</h3>
<p>
	Field can be tabbed to and interacted with via the keyboard and mouse wheel 
	like other SliderBase subclasses.
</p>

<h3>Selected Custom Styles</h3>
<p>
	See ASDocs for GaugeBase.  Numerous custom styles.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin for the Spark themes is provided.
</p>

<h3>Example</h3>
<p>
	See the RadialGauge demo application for example code.
</p>

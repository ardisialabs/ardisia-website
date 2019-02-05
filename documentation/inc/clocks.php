<h3>Overview</h3>
<p>
	Included in the Ardisia Component Set are two clock classes: a digital clock 
	("ClockDigital") and an analog clock ("ClockAnalog").
</p>
<p>
	These components are focused on styling for customization. Also, both are 
	focused on efficiency since clocks consume CPU cycles very often (typically 
	each second), therefore updates should be lightweight and not call layout.
</p>

<h3>Creating the Clocks Component</h3>
<p>
	Both clocks extend Group and can be added to any container that implements
	IVisualElementContainer.
</p>

<h3>Skinning</h3>
<p>
	Initially, both clocks were skinnable.  However, so much code ended up in 
	the skin that the convenience of skinning was lost. Also, skinning was 
	forcing redundant code in the host and skin. Therefore, the Clock classes
	are not skinnable but they support large numbers of styles.
</p>

<h3>Analog Clock</h3>
<p>
	An analog clock. Supports a very large number of customization styles.  
	See the ASDocs.
</p>
<p>
	Designed to be efficient and only call the full layout algorithm when 
	necessary and not on each tick of the second hand. Expensive vector drawing 
	and display list manipulation are only invoked when necessary. 
</p>
<p>
	In short, do not be afraid to use the clock for performance reasons, it is 
	very lightweight. 
</p>

<h3>Digital Clock</h3>
<p>
	A simple digital clock.  Text will resize to fit the available space. Can be 
	customized by a large number of properties and styles. See the ASDocs for 
	more information.
</p>
<p>
	To change the text styling for the DigitalClock, use text styles on the 
	clock directly.
</p>
<pre class="prettyprint">
clocks|ClockDigital s|Label 
{
    color: blue;
}
</pre>
<p>
	This example above would change the digital clock text to blue.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	The Analog Clock supports animation on the second hand.  The duration and
	easer for the animation can be set. The duration of the animation cannot
	exceed the updateInterval.
</p>

<h3>Custom Events</h3>
<p>
	<b>clockStart</b><br>
	ardisia.components.clocks.events.ClockEvent<br>
	Dispatched when the clock starts running.
</p>
<p>
	<b>clockStart</b><br>
	ardisia.components.clocks.events.ClockEvent<br>
	Dispatched when the clock stops running.
</p>

<h3>Custom Styles</h3>
<p>
	See the ASDocs.
</p>

<h3>Example</h3>
<p>
	See the Clocks demo application for example code.
</p>

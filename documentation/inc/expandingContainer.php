<h3>Overview</h3>
<p>
	The Ardisia ExpandingContainer component is a container that 
	expands/contracts in response to user interaction on the header or by 
	setting the "open" property directly.
</p>
<p>
	Easy to chain these components together into a accordion like control.
</p>	

<h3>Creating an ExpandingContainer</h3>
<p>
	The ExpandingContainer extends SkinnableContainer and can be added to any
	container that implements IVisualElementContainer.
</p>

<h3>Using the Component</h3>
<p>
	The ExpandingContainer can parent any child visual element that implements 
	IVisualElement, exactly like the SkinnableContainer.
</p>
<p>
	Add an optional label and icon via the "label" and "icon" properties
	respectively.
</p>
<p>
	To open/close the container without user interaction, set the "open" 
	property programmatically.  Only the "change" event will fire when open is 
	changed this way and no animations will run. 
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Each ExpandingContainer can animate the expand/contract animation via the
	"duration" and "easer" property.  Set the "duration" property to 0 to
	skip the animation entirely.  
</p>
<p>
	Using a Bounce easer creates a rather nifty effect.
</p>

<h3>Layout</h3>
<p>
	By default, an open ExpandingContainer will size itself to the measured
	dimensions of its content.  A closed ExpandingContainer will size itself
	to the size of the header button defined by the skins.
</p>
<p>
	The header button will automatically adjust its size to fit the header
	content.
</p>

<h3>Accessibility</h3>
<p>
	Can be tabbed to and opened/closed via the space bar.
</p>

<h3>Events</h3>
<p>
	Dispatches three custom events:
</p>
<p>
	<b>EXPANDED</b><br>
	ardisia.components.expandingContainer.events.ExpandingContainerEvent<br>
	Dispatched when the component expands, or opens, via user interaction. 
	Dispatched at the end of any animations.
</p>
<p>
	<b>COLLAPSED</b><br>
	ardisia.components.expandingContainer.events.ExpandingContainerEvent<br>
	Dispatched when the component contracts, or closes, via user interaction. 
	Dispatched at the end of any animations.
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.expandingContainer.events.ExpandingContainerEvent<br>
	Dispatched when the component's "open" property changes. Dispatched 
	immediately before animations run.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins for the Spark, London, and Stockholm themes are provided.
</p>

<h3>Example:</h3>
<p>
	See the ExpandingContainerDemo application for example code.
</p>

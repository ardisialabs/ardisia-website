<h3>Overview</h3>
<p>
	The Ardisia Rating component enables users to apply ratings by interacting 
	with a series of item renderers. Included skins define item renderers that 
	use a star pattern, but they can be re-skinned to any shape or size desired.
</p>	

<h3>Creating a Rating Component</h3>
<p>
	There are no special instructions for creating and adding a Rating component 
	beyond using a SkinnableDataContainer component because the Rating component 
	extends SkinnableDataContainer.
</p>

<h3>Using the Component</h3>
<p>
	The maximum value or rating is determined by the "maxValue" property. This 
	property also dictates the number of item renderers that are created.  The 
	specificity of the selected "value" or rating is determined by the 
	"snapInterval" value. The default "snapInterval" is 1, which means that 
	users can select a rating or value in multiples of 1. If the "snapInterval" 
	was 0.5, then users could select ratings in multiple of 0.5.  E.G. 0, 0.5, 
	1, 1.5, etc.
</p>
<p>
	A special case for the "snapInterval" property is a value of 0 or NaN in 
	which case the "value" is as specific as the mouse position allows. 
</p>
<p>
	The "value" property is the currently selected rating. It is a bindable 
	property and when it is changed the Rating component dispatches a 
	"valueCommit" event. If the value was changed via user interaction then a
	"change" event is also dispatched.
</p>

<h3>DataProvider</h3>
<p>
	The "dataProvider" property is excluded and not accessible. To interact 
	with the dataProvider, override and provide a hook to the protected 
	variable "collection".
</p>

<h3>Item Renderers</h3>
<p>
	All renderers must implement IRatingRenderer.
</p>
<p>
	The provided skin for the Spark theme defines item renderers 
	that use a star as the default shape. To create a different shape, keep in 
	mind that the Rating component works by laying two nearly identical shapes 
	over one another.  The bottom shape (higher depth) provides the border to 
	the shape. The top shape provides the fill based on the set "value" if the 
	renderer is not currently hovered, or based on the "lastHighlightedValue" 
	if the renderer is currently hovered.
</p>
<p>
	See the inline comments in the provided skins for more information.
</p>
<h3>Layout</h3>
<p>
	By default, the Rating component's item renderers are laid out horizontally, 
	left to right, with a gap set by the "gap" property.  Via the "layoutAxis" 
	property, the layout can be changed from a horizontal layout to a vertical 
	layout.  If layout is vertical, by default the rating "value" is applied to 
	the renderers top to bottom, but this can be changed to bottom to top via 
	the "verticalLayoutDirection" property.
</p>
<p>
	The Rating component can accurately measure itself and provide accurate 
	measured dimensions. However, explicit dimensions can be applied in 
	which case the "alignment" property becomes relevant. If explicit dimensions 
	are applied, a value of "justifyUsingGap" for the "alignment" property means 
	that the layout will automatically calculate the gap between renderers to 
	fill up the space along the layout axis.  A value of "justifyUsingSpace" for
	the "alignment" property will attempt to size the renderers to fill the
	entire available space along the layout axis.
</p>

<h3>Data Tip</h3>
<p>
	By default user interaction will trigger a data tip that will display the 
	current value that the user is hovering over.  Using the 
	"dataTipFormatFunction" property, a custom formatting function may be 
	applied with the following signature:
</p>
<pre class="prettyprint">
funcName(value:Number):Object
</pre>
<p>
	If no format function is defined, the data tip will display the currently 
	hovered value with a maximum numerical precision defined by the 
	"dataTipPrecision" property.
</p>
<p>
	By default, the tip will be displayed above the component for horizontal 
	layouts and to the right for vertical layouts.  The initial offsets are 
	captured at the tip creation, so change the "x" and "y" properties of the 
	data tip skin part in the skin to adjust the positioning.
</p>

<h3>Accessibility</h3>
<p>
	Can be tabbed to and the value can be incremented and decremented via the 
	arrow keys and the page_up and page_down buttons.
</p>

<h3>Events</h3>
<p>
	Dispatches two custom events:
</p>
<p>
	<b>VALUE_COMMIT</b><br>
	mx.events.FlexEvent<br>
	Dispatched when the committed value changes.
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.rating.events.RatingEvent<br>
	Dispatched when the committed value changes due to user interaction.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin for the Spark theme is provided. The demo application includes a
	skin for squares rather than stars for learning purposes.
</p>

<h3>Example:</h3>
<p>
	See the RatingDemo application for example code.
</p>

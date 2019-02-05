<h3>Overview</h3>
<p>
	The FieldSet container is similar to a HTML fieldset with the addition of 
	being collapsible and skinnable.
</p>

<h3>Creating the FieldSet Component</h3>
<p>
	The FieldSet component extends the Ardisia ExpandingContainer class and can
	be added to any element that implements IVisualElementContainer.
</p>

<h3>Using the FieldSet Component</h3>
<p>
	Add the text to display in the legend via the "legend" property. Any
	child content to add to the FieldSet can be added inline in MXML like
	a normal IVisualElementContainer.
</p>
<p>
	For example:
</p>
<pre class="prettyprint">
&lt;fieldSet:FieldSet legend="Form"&gt;
	&lt;s:TextInput /&gt;
&lt;/fieldSet:FieldSet&gt;
</pre>
<p>
	would add a TextInput to the FieldSet.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Opening or expanding the FieldSet can be animated via the "duration" and 
	"easer" properties.
</p>
<p>Set "duration" to 0 to skip the animation entirely.</p>

<h3>Accessibility</h3>
<p>
	The expand/contract button can be tabbed to and clicked via the SPACEBAR
	key.
</p>

<h3>Default Property</h3>
<p>
	Child visual content: "mxmlContentFactory"
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>legendLeftOffset</b><br>
	default 10<br>
	The number of pixels to offset the legend from the left border.
</p>
<p>
	<b>cornerRadius</b><br>
	default 4<br>
	Radius of the corners for the border.
</p>
<p>
	<b>contentPaddingTop, Right, Bottom, Left</b><br>
	default 10<br>
	Insets for child content.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the FieldSet demo application for example code.
</p>

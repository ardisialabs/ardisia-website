<h3>Overview</h3>
<p>
	A list with the renderers arranged as slices in an ellipse.
</p>

<h3>Creating the WheelList Component</h3>
<p>
	The WheelList Component extends the Flex List class which means that it can 
	be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the WheelList Component</h3>
<p>
	Functions the same as a Spark List.
</p>

<h3>Item Renderers</h3>
<p>
	Renderers must implement IWheelListRenderer.  For simplicity, extend 
	WheelListBaseRenderer for custom renderers. Renderers control their 
	appearance.
</p>

<h3>Layout</h3>
<p>
	Virtual Layout is not supported.
</p>

<h3>Accessibility</h3>
<p>
	Field can be tabbed to and opened via the SPACE key when focused.
</p>
<p>
	If multiple selection is disabled via "allowMultipleSelection", use
	"allowDeselection" to enable de-selection of elements.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided the Spark, Stockholm, and London themes.
</p>

<h3>Example</h3>
<p>
	See the WheelList demo application for example code.
</p>
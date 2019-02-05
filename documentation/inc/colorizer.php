<h3>Overview</h3>
<p>
	The Ardisia Colorizer package includes 2 components that return colors based 
	on passed values, which makes them useful for data visualization and 
	charting.
</p>
<p>
	The first colorizer is the GradientColorizer, which returns a color along a 
	gradient, and the second colorizer is the DiscreteColorizer that returns a 
	single color for set value ranges.
</p>

<h3>Creating the Colorizer Components</h3>
<p>
	The colorizers extend the flash EventDispatcher class and are not visual 
	classes. Simply declare them in the the Declarations tag of a MXML document 
	or in Actionscript.
</p>
<p>
	For example:
</p>
<pre class="prettyprint">
&lt;colorizer:GradientColorizer id="colorizer" rangeMinimum="0" rangeMaximum="1"&gt;
	&lt;data:GradientColorizerData ratio="0" color="#FFFFFF" /&gt;
	&lt;data:GradientColorizerData ratio="1" color="#000000" /&gt;
&lt;/colorizer:GradientColorizer&gt;
</pre>
<p>
	In the example above, the colorizer would return colors ranging from white
	to black (gray), the exact color determined by what value is passed to the
	colorizer between the minimum ("rangeMinimum") and the maximum 
	("rangeMaximum").
</p>

<h3>Using the GradientColorizer Component</h3>
<p>
	First, setup the range of the values via the "rangeMaximum" and 
	"rangeMinimum" properties.  Next assign a vector of GradientColorizerData 
	objects to the "dataProvider" property. Then call getColor(value) and pass 
	a value to get the calculated color at the passed value.
</p>
<p>
	Each GradientColorizerData object defines a ratio and a color. The ratio 
	defines the ratio of the range's value (as defined by the GradientColorizer 
	"rangeMinimum"/"rangeMaximum" properties) at which the given color will be 
	returned. For passed values that are in-between defined ratios and colors, 
	this class will automatically calculate the color that falls between the 
	ratios.
</p>
<p>
	For example, assume a range with a rangeMinimum value of 100 and a 
	rangeMaximum value of 200. Now assume 2 GradientColorizerData objects for 
	the dataProvider.  The first GradientColorizerData object defines a ratio of 
	0 and a color of 0xFFFFFF (white). The second GradientColorizerData object 
	defines a ratio of 1 and a color of 0 (black).  Now the user requests a 
	color at a value of 150.  Since 150 is exactly in-between the min/max of the 
	range, this corresponds to a ratio of 0.5.  Thus, the colorizer will 
	determine that the passed ratio is between the defined ratios 0 and 1 and 
	will return a color that is in between black and white, ultimately returning 
	a shade of gray.
</p>

<h3>GradientColorizer DataProvider</h3>
<p>
	The GradientColorizer's dataProvider expects a vector of 
	GradientColorizerData objects. Wrapping the dataProvider in a collection is 
	not necessary.
</p>

<h3>Using the DiscreteColorizer Component</h3>
<p>
	First, assign a vector of DiscreteColorizerData objects to the 
	"dataProvider" property. Then call getColor(value) and pass a value to get 
	the calculated color at the passed value.
</p>
<p>
	Each DiscreteColorizerData object defines a range of values, from a minimum 
	to a maximum, in which any value passed that is within this range will 
	return the defined color. All values within the range return the same color.
</p>
<p>
	If the range of values from distinct DiscreteColorizerData objects overlap, 
	the color from the first match will be returned.  The dataProvider is 
	intentionally not sorted, so the first match is the data value that was 
	added to the dataProvider first.
</p>

<h3>DiscreteColorizer DataProvider</h3>
<p>
	The DiscreteColorizer's dataProvider expects a vector of 
	DiscreteColorizerData objects. Wrapping the dataProvider in a collection is 
	not necessary.
</p>

<h3>Default Property</h3>
<p>
	The default property for both colorizers is the "dataProvider" property.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CHANGE</b><br>
	ardisia.components.colorizer.events.ColorizerEvent<br>
	Dispatched when the "dataProvider" property changes.
</p>

<h3>Example</h3>
<p>
	See the Colorizer demo application for example code.
</p>
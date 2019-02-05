<h3>Overview</h3>
<p>
	Also known as a polar or spider chart, or a kiviat diagram.
</p>

<h3>Creating the Radar Chart Component</h3>
<p>
	The Radar class extends the Ardisia ChartBase class so it can be added 
	to containers that implement IVisualElementContainer.
</p>

<h3>Using the Radar Chart Component</h3>
<p>
	The Radar chart works by defining data through the use of series and 
	categories.  A series is a collection of related data to display. For 
	example, assume we are displaying data on nations, say France and Japan. 
	France and Japan are each a series and on the Radar chart the series data 
	are connected by strokes forming an n-sided polygon. 
</p>
<p>
	The categories define what particular data within a series are displayed 
	along each axis. Assume that for our chart with France and Japan as the 
	series, we are plotting their GDP and population. Therefore, GDP and 
	population are each represented as categories along an axis and each will 
	plot the respective GDP or population data from each series data object.
</p>
<p>
	Category axes are defined with RadarAxis objects and series are defined 
	using RadarSeries objects. Arrays of both define how the Radar Chart will 
	display its dataProvider.
</p>
<p>
	For the Radar chart, each set of series data is represented by a single 
	object with the category values stored as properties of that object.
</p>
<p>
	For example:
</p>
<pre class="prettyprint">
&lt;s:ArrayCollection id="dp"&gt;
    &lt;fx:Object name="France" GDP="1" population="1" /&gt;
    &lt;fx:Object name="Japan" GDP="2" population="2" /&gt;
&lt;/s:ArrayCollection&gt;

&lt;radar:Radar dataProvider="{dp}"&gt;
    &lt;radar:radialAxes&gt;
        &lt;data:RadarAxis categoryField="GDP" displayName="GDP"/&gt;
        &lt;data:RadarAxis categoryField="population" displayName="population"/&gt;
    &lt;/radar:radialAxes&gt;
    &lt;radar:series&gt;
        &lt;data:RadarSeries field="name" fieldValue="France" displayName="France"/&gt;
        &lt;data:RadarSeries field="name" fieldValue="Japan" displayName="Japan"/&gt;
    &lt;/radar:series&gt;
&lt;/radar:Radar&gt;	
</pre>
<p>
	In the example above, there are 2 series: France and Japan. The categories 
	are GDP and population. On the RadarAxis objects, the "categoryField" 
	defines what property on the series data object points to GDP for each set 
	of series data.  On The RadarSeries objects, the "field" and "fieldValue" 
	define what object in the dataProvider provides the data for this particular 
	series. E.G. the location of the series data in the dataProvider.
</p>

<h3>Intervals</h3>
<p>
	Strokes can be drawn between axes with labels indicating the relative series 
	values along the axes.  You can control how many are created, whether to 
	display a label for the series value, precision, etc. See the ASdocs.
</p>

<h3>Quadrant Overlays</h3>
<p>
	The regions between axes can be filled with alternating colors and alphas.
</p>
<p>
	See the "quandrantAlternatingColors" and "quandrantAlternatingAlpha" styles.
</p>

<h3>DataProvider</h3>
<p>
	The RadarChart expects a collection. Each data object in the dataProvider 
	should represent a set of series data referenced by the "field" and 
	"fieldValue" properties on RadarSeries objects.
</p>

<h3>Item Renderers</h3>
<p>
	The RadarSkin defines factories for many different types of item renderers 
	used by the Radar component.  The series data renderers must implement 
	IRadarSeriesItemRenderer and the interval labels must implement 
	IRadarIntervalItemRenderer.
</p>
<p>
	See the ASDocs and the Radar skin for the skin part factories.
</p>

<h3>DataTip(s)</h3>
<p>
	By default, a dataTip will display when the user hovers over series data 
	points on the chart. If multiple data points are within range, a dataTip 
	will be displayed for each.  See the "dataTipFactoryPart" skin part to 
	customize the tip.
</p>
<p>
	Tooltips can be passed TextFlow objects for a highly customized appearance.
</p>
<p>
	Set the "nodeHoverThreshold" property to control the number of pixels within 
	a data point that triggers hover and displays the data tip.
</p>
<p>
	The dataTip will persist for a time set by the "dataTipHideDelay" after 
	users mouse out of data nodes.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Use the "HighlightAlpha" and "HighlightDuration" properties to control how
	renderers other than the hovered renderer are faded on highlight.
</p>

<h3>Legend</h3>
<p>
	To automatically apply a legend, add an Ardisia Legend to the display and
	send the legend a reference to the radar chart.
</p>
<pre class="prettyprint">
&lt;ardisia:Legend chart="{radarChart}"&gt;
</pre>
<p>
	In the example above, assuming that a chart with the ID "radarChart" has 
	been created, a legend would be displayed that would automatically display
	the series for the chart.
</p>
<p>
	See the ASDocs for the Legend for additonal properties and options.
</p>

<h3>Coloring</h3>
<p>
	Series renderers are colorized by default.
</p>
<p>
	Alternatively, you can supply a callback "colorFormatFunction" to supply 
	custom colors to the series item renderers.
</p>

<h3>Layout</h3>
<p>
	The Radar chart will automatically size itself to fill the allotted space.
</p>

<h3>Default Property</h3>
<p>
	The dataProvider is the default property.
</p>

<h3>Selected Custom Styles</h3>
<p>
	See the ASDocs for the Radar class. The number of styles is very numerous.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin is provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the Radar Chart demo application for example code.
</p>
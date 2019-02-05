<h3>Overview</h3>
<p>
	The Donut chart is a modified pie chart that can display several rings of
	series data at once.
</p>

<h3>Creating the Donut Chart</h3>
<p>
	The Donut class extends the Ardisia ChartBase class so it can be added 
	to containers that implement IVisualElementContainer.
</p>

<h3>Using the Donut Chart</h3>
<p>
	The Donut chart works by assigning a "seriesField" and a vector of 
	"categories". A series is a collection of related data to display. For 
	example, in the demo, the series data is the motor vehicle production for
	various nations.
</p>
<p>
	The categories define what particular data within a series is displayed 
	in each ring of the donut. In the demo, each category is a specific year
	of motor vehicle production by nation. Categories are defined by  
	"DonutCategory" objects.
</p>

<h3>Item Renderers</h3>
<p>
	All renderers are DonutRenderer objects.
</p>

<h3>DataTip(s)</h3>
<p>
	If the "showDataTip" property is true, a dataTip will display when the user 
	hovers over series data.
</p>
<p>
	When using a custom "dataTipFormatFunction", the "hoveredCategoryIndex" 
	property is useful because it indicates which category of a series is 
	currently being hovered by the user. Also, tooltips can be passed TextFlow 
	objects for a highly customized appearance.
</p>
<p>
	The dataTip will persist for a time set by the "dataTipHideDelay" after 
	users mouse out of data nodes.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Use the "HighlightAlpha" and "HighlightDuration" properties to control how
	renderers other than the hovered renderer are faded.
</p>

<h3>Legend</h3>
<p>
	To automatically apply a legend, add an Ardisia Legend to the display and
	send the legend a reference to the chart.
</p>
<pre class="prettyprint">
&lt;ardisia:Legend chart="{donutChart}"&gt;
</pre>
<p>
	In the example above, assuming that a chart with the ID "donutChart" has 
	been created, a legend would be displayed that would automatically display
	the series for the chart.
</p>
<p>
	See the ASDocs for the Legend for additonal properties and options.
</p>

<h3>Labels</h3>
<p>
	Display series labels via the "showSeriesLabels" property. The series
	label is retrieved from the "seriesLabelField" property on the data.
</p>
<p>
	Display the weight percentage of each wedge via the "showPercentages" 
	property.
</p>

<h3>Layout</h3>
<p>
	The Donut chart will automatically size itself to fill the allotted space.
</p>
<p>
	If labels are displayed for the series data because "showSeriesLabels" is
	true, then the layout will automatically resize the chart for the labels to
	fit.
</p>
<p>
	Change the appearance of the chart via properties such as: "angleOffset", 
	"innerRadius", "ringSeperation", and "wedgeSeperation".
</p>

<h3>Coloring</h3>
<p>
	Series renderers are colorized by default.
</p>
<p>
	Alternatively, you can supply a callback "colorFormatFunction" to supply 
	custom colors to the series item renderers.
</p>

<h3>Default Property</h3>
<p>
	The dataProvider is the default property.
</p>

<h3>Selected Custom Styles</h3>
<p>
	See the ASDocs for the Donut class. The number of styles is very numerous.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin is provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the Donut chart demo application for example code.
</p>

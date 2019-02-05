<h3>Overview</h3>
<p>
	The Funnel chart is a chart that displays data in a funnel pattern.
</p>

<h3>Creating the Funnel Chart</h3>
<p>
	The Funnel class extends the Ardisia ChartBase class so it can be added 
	to containers that implement IVisualElementContainer.
</p>

<h3>Using the Funnel Chart</h3>
<p>
	The Funnel chart works by assigning a "seriesValueField" to extract the 
	series data from the dataProvider. A series is a collection of related data 
	to display.
</p>
<p>
	By default, series data is arranged as a funnel in the same order as the
	data in the dataProvider.  To display the data from the largest to the 
	smallest, top to bottom, set the "sorted" property to true.
</p>

<h3>Item Renderers</h3>
<p>
	All renderers are FunnelRenderer objects.
</p>

<h3>DataTip(s)</h3>
<p>
	If the "showDataTip" property is true, a dataTip will display when the user 
	hovers over series data.
</p>
<p>
	When using a custom "dataTipFormatFunction", the "totalWeight" property is 
	useful because it can be used to display the relative weight of each node.
	Also, tooltips can be passed TextFlow objects for a highly customized
	appearance.
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

<h3>Labels</h3>
<p>
	Display series labels via the "displayLabels" property. The series
	label is retrieved from the "seriesLabelField" property on the data.
</p>

<h3>Legend</h3>
<p>
	To automatically apply a legend, add an Ardisia Legend to the display and
	send the legend a reference to the chart.
</p>
<pre class="prettyprint">
&lt;ardisia:Legend chart="{funnelChart}"&gt;
</pre>
<p>
	In the example above, assuming that a chart with the ID "funnelChart" has 
	been created, a legend would be displayed that would automatically display
	the series for the chart.
</p>
<p>
	See the ASDocs for the Legend for additonal properties and options.
</p>

<h3>Layout</h3>
<p>
	Change the appearance of the chart via properties such as: "slope", 
	"neckRatio", and "gap".
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

<h3>Themes &amp; Skinning</h3>
<p>
	A skin is provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the Funnel chart demo application for example code.
</p>

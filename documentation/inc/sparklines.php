<h3>Overview</h3>
<p>
	The Sparkline package includes 3 charts, a line, bar, and pie chart. All
	three are designed to be used inline in data grids, or as standalone charts.  
</p>
<p>
	To sustain high-level performance these charts are not skinned.
</p>

<h3>Creating the Sparkline Components</h3>
<p>
	The bar, line, and pie sparkline charts extend the Group class, so they can 
	be added to any parent that implements IVisualElementContainer.
</p>

<h3>Using the Sparkline Components</h3>
<p>
	Line and bar charts display data points from the minY to the maxY values.  
	Values that are not within the minY and maxY are not displayed.  "minY" and 
	"maxY" can be explicitly set, or will be calculated from the values in the 
	dataProvider automatically if the "autoRange" property is true.
</p>
<p>
	Pie charts display all the data in wedges proportional to each data node's
	percentage of the total weight of the series.
</p>

<h3>SparklineBar Bar Chart</h3>
<p>
	Sparkline chart that uses bars (columns) to present the data.
</p>
<p>
	The bars are drawn starting at the axis, up or down depending on whether the 
	value they represent is less than or greater than the axis value. Thus, even 
	if the axis is not shown, its calculated value is still important.
</p>
<p>
	For bar charts, data in the dataProvider are presented left to right 
	according to each data value's position in the dataProvider. If it is 
	important to vary the x position for data, use the SparklineLine class.
</p>

<h3>SparklineLine Line Chart</h3>
<p>
	Sparkline chart that uses a line (stroke) to present the data.
</p>
<p>
	See the "form" property to change the type of stroke that is drawn.
</p>
<p>
	The "xField" can be specified to display the data at specified positions 
	along the x-axis. Positioning is relative, meaning that the data's x value 
	is not the explicit x position on the curve. Rather, it is the x position 
	relative to the minimum and maximum x values of all of the data points.
</p>
<p>
	If you define an "xField", all data points must have a defined "xField" 
	value.
</p>
<p>
	If the "xField" is null, the points will be positioned according to their 
	indices in the dataProvider, just like for the bar chart.
</p>

<h3>SparklinePie Pie Chart</h3>
<p>
	Sparkline chart that uses a pie chart to present the data.
</p>
<p>
	Use the "seriesField" property to provide the chart with the node values or
	weights.  If the "seriesField" property is null, the chart will assume that
	the dataProvider is flat numerical data.
</p>

<h3>DataProvider</h3>
<p>
	All three charts expect an IList dataProvider.  Data can either be a flat 
	numerical array, or objects with the x and y values specified by the 
	"xField" and "yField" properties for bar and line charts.
</p>

<h3>DataTip</h3>
<p>
	If the "showDataTip" property is true, then a datatip will display when the 
	user hovers over data points or columns.  For the bar chart, the mouse must 
	hover over a column, and for the line chart, the user must hover within the 
	marker circle or within 5 pixels of the data point, whichever is greater.
</p>
<p>
	Specify a custom tip via the "dataTipField" on the data or via a callback 
	function via the "dataTipFunction" property. Also, tooltips can be passed 
	TextFlow objects for a highly customized appearance.
</p>
<p>
	The dataTip will persist for a time set by the "dataTipHideDelay" after 
	users mouse out of data nodes.
</p>

<h3>Axis (line and bar only)</h3>
<p>
	The axis is a optional horizontal line to provide a visual cue as to the 
	median value or some threshold for the data. If "autoAxis" is true, the axis 
	will be drawn along the median of the displayed range.
</p>
<p>
	For the bar sparkline, it also specifies how columns are drawn. They are 
	drawn below the axis if the column's value is less than the axis value, or 
	above the axis if the bar's value is greater than the axis.
</p>

<h3>Normal Range (line and bar only)</h3>
<p>
	The normal range is an optional drawn rectangle that can be used to indicate 
	to the viewer if a data point is within the normal range of values.
</p>

<h3>Sparkline as a GridRenderer</h3>
<p>
	To add the sparklines inline within a data grid, simply wrap them in a Spark
	GridRenderer. For example:
</p>
<pre class="prettyprint">
&lt;s:DataGrid dataProvider="{dp}"&gt;   
  &lt;s:columns&gt;
    &lt;s:ArrayList&gt;
      &lt;s:GridColumn width="100" headerText="Sparkline Bar"&gt;
        &lt;s:itemRenderer&gt;
          &lt;fx:Component&gt;
            &lt;s:GridItemRenderer&gt; 
              &lt;sparklines:SparklineBar top="2" right="2" bottom="2" left="2"
				       height="45"
				       dataProvider="{data.chart}"/&gt;
            &lt;/s:GridItemRenderer&gt;
          &lt;/fx:Component&gt;
        &lt;s/:itemRenderer&gt;
      &lt;/s:GridColumn width="100" headerText="Sparkline Bar"&gt;
    &lt;/s:ArrayList&gt;
  &lt;/s:columns&gt;
&lt;/s:DataGrid dataProvider="{dp}"&gt; 
</pre>

<h3>Default Property</h3>
<p>
	A dataProvider that implements IList is the default property.
</p>

<h3>Selected Custom Styles</h3>
<p>
	See the ASDocs for the SparklineBase, SparklineBar, SparklineLine, and
	SparklinePie classes. The number of styles is very numerous.
</p>

<h3>Example</h3>
<p>
	See the Sparklines demo application for example code.
</p>
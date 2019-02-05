<h3>Overview</h3>
<p>
	The Timeline component allows users to display and select events displayed
	along a TimebarContainer.
</p>

<h3>Creating the Timeline Component</h3>
<p>
	The Timeline extends the Ardisia TimebarContainer class and thus can be 
	added to any container that implements IVisualElementContainer.
</p>

<h3>Using the Timeline Component</h3>
<p>
	The Timeline heavily invokes the API of the TimebarContainer so it is 
	advised that developers are familiar with the Ardisia TimebarContainer class 
	before using the Timeline.
</p>
<p>
	The basic operation of the Timeline is as follows: (A) define an array of 
	TimelineSeries objects that group the data, (B) define the "seriesField" on 
	the Timeline that defines the property on the data items to look for the 
	series values located in the TimelineSeries objects' "fieldValue" property, 
	(C) provide the proper IntervalMode array (see the TimebarContainer), and 
	(D) define relevant item renderers in the TimelineSkin.
</p>

<h3>Series</h3>
<p>
	A series is a group of related data.  The "seriesField" property on the 
	Timeline defines what property will be used to retrieve series data. The 
	"series" property accepts an array of TimelineSeries objects that defines 
	the value of the data that defines the series.
</p>
<p>
	The data for series is grouped and displayed together on the Timeline. On 
	the TimelineSeries object, set the "fieldValue" property to define the value 
	for the the data that belongs to this series. Use the "displayName" 
	property on the TimelineSeries object to define the label or set "hideLabel" 
	to true to hide the series label.
</p>
<p>
	Series label renderers are expected to implement 
	ITimelineSeriesLabelRenderer and can collapse/expand the entire set of 
	grouped series item renderers via the optional toggleCollapseButton 
	DisplayObject. By default, the skins define a simple plus sign as the 
	expander button.
</p>
<p>
	The item renderers that display the series data are referred to as series 
	item renderers and their factory is defined by the 
	"seriesItemRendererFactoryPart" skin part.
</p>
<p>For this example below, two series are defined:</p>
<pre class="prettyprint">
&lt;timeline:Timeline seriesField="nation" 
		   beginField="begin"
	&lt;timeline:intervalModes&gt;
		&lt;dataTypes:IntervalMode name="halfDecade" years="5" /&gt;
		&lt;dataTypes:IntervalMode name="year" years="1" /&gt;
	&lt;/timeline:intervalModes&gt;
	&lt;timeline:series&gt;
		&lt;dataTypes1:TimelineSeries displayName="USSR" fieldValue="USSR"/&gt;
		&lt;dataTypes1:TimelineSeries displayName="USA" fieldValue="USA" /&gt;
	&lt;/timeline:series&gt;
	&lt;timeline:dataProvider&gt;
		&lt;s:ArrayCollection&gt;
			&lt;fx:Object nation="USSR" begin="{new Date(1957, 7, 21)}" 
				   mission="Sputnik" /&gt;
			&lt;fx:Object nation="USA" begin="{new Date(1958, 2, 17)}" 
				   mission="Vanguard 1" /&gt;
		&lt;/s:ArrayCollection&gt;
	&lt;/timeline:dataProvider&gt;
&lt;/timeline:Timeline&gt;
</pre>
<p>
	For the example above, we have 2 series defined with a fieldValue of "USSR" 
	for the first series and "USA" for the second series.  The Timeline defines 
	the "seriesField" as "nation". Thus, for each series we iterate through the 
	data and examine if each data item has a property named "nation" and 
	determine if the value of that property matches the series' "fieldValue". In 
	these cases, each series has one data item defined.
</p>

<h3>DataProvider</h3>
<p>
	Data are expected to define a "begin" time for the event. All other 
	properties are up to the developer to implement.
</p>

<h3>Point Sources vs. Periods</h3>
<p>
	If a series item renderer has its "dateBegin" property defined but not its 
	"dateEnd" property, it is a point source with no period. In this case, the 
	width of the renderer is determined by the renderer's measurements.
</p>
<p>
	If the "dateEnd" property is defined, the renderer defines a time period and 
	its width will be set explicitly via the Timeline class. Its measuredWidth 
	will be ignored.
</p>

<h3>Excluding Header Period Interval Item Renderers</h3>
<p>
	To exclude the top level header time intervals, simply remove the 
	"headerItemRendererFactoryPart" skin part from the Timeline skin.
</p>

<h3>Selection</h3>
<p>
	If "selectable" is true, series item renderers can be selected via mousing 
	them down. The selection can be retrieved via the "selectedIndex" and 
	"selectedItem" properties and changes dispatch CHANGE events.
</p>
<p>
	Selected series item renderers can be de-selected by mousing down over the 
	selected item renderer.
</p>

<h3>Drag Scrolling</h3>
<p>
	If "enableDragScrolling" is true, users can scroll the Timeline horizontally 
	by holding the mouse down over the Timeline's contentGroup and dragging left 
	and right.
</p>

<h3>Layout</h3>
<p>
	If multiple series are defined, the gap between the series is set via the 
	"seriesGap" property. The height of rows is set explicitly via the 
	"rowHeight" property and the gap between rows is defined by the "rowGap" 
	property.
</p>
<p>
	For series item renderers that are point sources (no end time defined), if 
	they are displayed in the visible range, they are bound to the Timeline's 
	edges to prevent edge clipping.
</p>

<h3>DataTip</h3>
<p>
	If "showDataTip" is true, a dataTip is displayed when series item renderers 
	are moused over. The text/textflow is defined either by the "dataTipField" 
	property or via a callback function referenced in the 
	"dataTipFormatFunction" property.
</p>

<h3>Default Property</h3>
<p>
	The dataProvider.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CHANGE</b><br>
	ardisia.components.timeline.events.TimelineEvent<br>
	Dispatched when the selected item changes.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins and item renderers are provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the Timeline demo application for example code.
</p>
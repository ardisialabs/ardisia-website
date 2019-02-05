<h3>Overview</h3>
<p>
	TreeMap chart. Supports indefinite branching and colorizing for very complex
	and deeply nested charts.   
</p>

<h3>Creating the TreeMap Component</h3>
<p>
	The TreeMap extends the Ardisia ChartBase class and can be added to any 
	container that implements IVisualElementContainer.
</p>

<h3>Using the TreeMap Component</h3>
<p>
	The basic principle is that everything the TreeMap displays is a leaf or a 
	branch. Branches are groups that hold other branches and leafs, E.G. they 
	have children, and leafs have no children.  
</p>
<p>
	Nodes have a "weight", a numerical value that is determined from the 
	"weightField" on the data or via a "weightFunction".  The TreeMap will 
	automatically calculate the total weight of all the nodes, and the 
	smallest/largest weight can be retrieved via the "lowestWeight" and 
	"greatestWeight" properties. A node's weight is used to determine its size 
	and placement on the TreeMap.
</p>
<p>
	Other relevant properties, like the label and color, are also determined by 
	fields on the data, or via callback functions.
</p>

<h3>DataProvider</h3>
<p>
	The TreeMap only accepts a dataProvider that implements the ICollection 
	interface and must have a single root node. Should also be of a format that 
	is understood by the DefaultDataDescriptor class. See the Flex docs for the 
	Tree class and the DefaultDataDescriptor for additional information.
</p>
<p>
	The data format is similar to the data structure of Tree data.
</p>
<p>
	The TreeMap will automatically calculate the total weight of all the nodes, 
	and the smallest/largest weight can be retrieved via the "lowestWeight" and 
	"greatestWeight" properties.
</p>

<h3>Item Renderers</h3>
<p>
	The item renderer is the same for both branch and leaf nodes.
</p>
<p>
	TreeMaps can have huge numbers of renderers.  To improve performance, focus 
	on the itemRenderers. Reduce nested containers, filters, and text layout.
</p>

<h3>DataTip(s)</h3>
<p>
	By default, a dataTip will display when the user hovers over data nodes 
	in the chart. Uses the Ardisia DataTip class by default. See the 
	"dataTipFactoryPart" skin part to customize the tip.
</p>
<p>
	Tooltips can be passed TextFlow objects for a highly customized appearance.
</p>
<p>
	The dataTip will persist for a time set by the "dataTipHideDelay" after 
	users mouse out of data nodes.
</p>
<p>
	Data tips can be customized via the "dataTipFormatFunction" by passing
	a TextFlow or a raw String.
</p>

<h3>Color</h3>
<p>
	The color to use for leaf nodes is set either by the "colorField" directly 
	on the data or via a "colorFormatFunction" callback that returns the color 
	based on the node data.
</p>
<p>
	If no color is provided directly, a default color scheme will be used.
</p>

<h3>Legend</h3>
<p>
	The Ardisia Legend does not support the TreeMap.
</p>

<h3>Labels</h3>
<p>
	Use the "labelField" or "labelFunction" to retrieve the text to display in 
	nodes.
</p>

<h3>Weight</h3>
<p>
	Use the "weightField" or "weightFunction" to retrieve the the node weight.	
</p>

<h3>Selecting Branches</h3>
<p>
	By default, selecting a branch does nothing.  To enable zooming in, listen 
	for TreeMapEvent.ITEM_MOUSE_DOWN and set the TreeMap's dataProvider to the 
	raw nodeData.
</p>
<pre class="prettyprint">
var event:TreeMapEvent = event as TreeMapEvent;
switch (event.type)
{
	case TreeMapEvent.ITEM_MOUSE_DOWN:
		var renderer:ITreeMapItemRenderer = event.renderer;
		treemap.dataProvider = new ArrayCollection([renderer.data]);

		break;
}
</pre>

<h3>Layout</h3>
<p>
	Uses the squarified layout scheme. See 
	http://www.win.tue.nl/~vanwijk/stm.pdf for an explanation of how the 
	squarified layout works.
</p>
<p>
	Set the gap betwee nodes via the "gap" property.
</p>

<h3>Branch Header Height</h3>
<p>
	The height of the header for the branch nodes is set directly in the item 
	renderer class via the measuredHeight.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>ITEM_MOUSE_DOWN</b><br>
	ardisia.components.treeMap.events.TreeMapEvent<br>
	Dispatched when a renderer is moused down.
</p>
<p>
	<b>ITEM_CLICK</b><br>
	ardisia.components.treeMap.events.TreeMapEvent<br>
	Dispatched when a renderer is clicked.
</p>
<p>
	<b>ITEM_ROLL_OVER</b><br>
	ardisia.components.treeMap.events.TreeMapEvent<br>
	Dispatched when a renderer is rolled over.
</p>
<p>
	<b>ITEM_ROLL_OUT</b><br>
	ardisia.components.treeMap.events.TreeMapEvent<br>
	Dispatched when a renderer is rolled out.
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.treeMap.events.TreeMapEvent<br>
	Dispatched when the selectedItem changes via user interaction.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins and default item renderers are provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the TreeMap demo application for example code.
</p>
	
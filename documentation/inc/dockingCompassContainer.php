<h3>Overview</h3>
<p>
	The DockingCompassContainer is an Ardisia CompassContainer factory that 
	supports dragging and docking of regions.
</p>
<p>
	To use this class successfully, it is recommended to become familiar with 
	the Ardisia CompassContainer class.
</p>

<h3>Creating the DockingCompassContainer Component</h3>
<p>
	The DockingCompassContainer extends the Ardisia CompassContainerBase class 
	and therefore can be added to any container that implements 
	IVisualElementContainer.
</p>

<h3>Using the DockingCompassContainer Component</h3>
<p>
	The DockingCompassContainer class uses a CompassContainer factory to 
	generate CompassContainer instances to support docking. By default, if 
	regions show their chrome and have a "draggingRegionPart" skin part, they 
	can be dragged and docked to either (A) the edges of the top level of the 
	container, or (B) within a quadrant of a region. Users select what type of 
	drop to use via the displayed drop targets.
</p>
<p>
	Since the DockingCompassContainer extends the CompassContainer base class, 
	you can set it up exactly the same as you would a CompassContainer.
</p>

<h3>Dragging Regions</h3>
<p>
	If a region displays the "draggingRegionPart" skin part, it can be dragged.  
	When a region is dragged, a proxy is created and drop targets will be 
	displayed when hovering over dockable regions.
</p>
<p>
	To prevent a region from being dragged, listen for the DRAG_STARTING event 
	on the DockingCompassContainer and call preventDefault() on the event to 
	cancel the drag.  The event will reference the region being dragged.
</p>

<h3>Dragging Between DockingCompassContainers</h3>
<p>
	Regions can be dragged from within a DockingCompassContainer to a 
	completely different DockingCompassContainer.
</p>
<p>
	To prevent users from dragging a region to a different 
	DockingCompassContainer, listen for the DRAG_ENTER event on the targeted 
	DockingCompassContainer and call preventDefault(). When the event is 
	cancelled, the drag will not end but docking to the entered target 
	DockingCompassContainer will be disabled. When cancelled, not only will the 
	drop not be allowed, but no drop indicators will be displayed.
</p>

<h3>Docking Regions</h3>
<p>
	Once a region drag has begun, docking can be made on the top level via drop 
	indicators placed at the edges of the top level compass container or they 
	can be made within a compass quadrant of a nested region.
</p>
<p>
	For drops at the edges of the top level CompassContainer ("top level dock"), 
	control which compass quadrants are allowed to be docked to by listening to 
	the DRAG_ENTER event on the DockingCompassContainer and setting the 
	"northDockAllowed", "eastDockAllowed", "southDockAllowed", "westDockAllowed" 
	properties on the event.
</p>
<p>
	For drops within a particular region ("region dock"), control which compass 
	quadrants are allowed to be docked exactly the same way as for a top level 
	dock described in the above paragraph, except instead of listening to the 
	DRAG_ENTER event, listen for the DRAG_REGION_ENTER event.
</p>
<p>
	To completely disable docking within a region, call preventDefault() on the 
	DRAG_REGION_ENTER event.  In this case no drop indicators over the hovered 
	region will be displayed.
</p>
<p>
	In the example code below, regions can not be docked to the top level east 
	compass quadrant and regions cannot be docked to the west compass quadrant 
	for all regions.
</p>
<pre class="prettyprint">
&lt;dockingCompassContainer:DockingCompassContainer id="dcc"
	dragEnter="event.eastDockAllowed=false;"
	dragRegionEnter="event.westDockAllowed=false;"&gt;
	
	&lt;!--- center content --&gt;
	&lt;s:Label text="Center"/&gt;
	
	&lt;!--- north content --&gt;
	&lt;dockingCompassContainer:northContent&gt;
		&lt;s:Button label="Click Me"/&gt;
	&lt;/dockingCompassContainer:northContent&gt;
	
&lt;/dockingCompassContainer:DockingCompassContainer&gt;
</pre>

<h3>Drop Targets and the Drag Proxy</h3>
<p>
	There are two factories for drop targets defined in the 
	DockingCompassContainer skin: (A) the "topLevelDropTargetFactoryPart" skin 
	part that creates drop targets for top level docks, and (B) the 
	"regionDropTargetFactoryPart" skin part that creates drop targets for 
	regional docks.
</p>
<p>
	The skin also defines the drag proxy factory, the "dragProxyFactoryPart" 
	skin part.
</p>
<p>
	Fully customizable via the skins.
</p>

<h3>Region ID</h3>
<p>
	On creation, each region is provided with a unique "regionID".  When regions 
	are dragged around, docked, and nested, it can become tricky to manage what 
	region is being interacted with. The regionID is a reliable way to track 
	regions.
</p>
<p>
	When a region is docked to a new region or location, the regionID will not 
	change even though the container may be different.
</p>

<h3>Selected Custom Events</h3>
<p>
	See the ASDocs.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>
<p>
	Everything is skinnable.
</p>

<h3>Example</h3>
<p>
	See the DockingCompassContainer demo application for example code.
</p>
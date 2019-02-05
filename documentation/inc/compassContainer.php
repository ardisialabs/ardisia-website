<h3>Overview</h3>
<p>
	The CompassContainer class is a container with North, South, East, West, and 
	center regions that content can be added to programmatically or via MXML. 
	Because content is added to compass directions, the class is named the 
	"CompassContainer".
</p>

<h3>Creating the CompassContainer Component</h3>
<p>
	The CompassContainer extends the Flex SDK SkinnableComponent class and 
	therefore can be added to any container that implements 
	IVisualElementContainer.
</p>

<h3>Using the CompassContainer Component</h3>
<p>
	By default, content added in MXML is added to the center region of the 
	container.  Only the center region is required.  All other regions are 
	optional. To add content to a different region via MXML, add the content to 
	the respective property ("eastContent", "westContent", etc.).
</p>
<p>
	For example (adding content to the center, North, and East regions):
</p>
<pre class="prettyprint">
&lt;compassContainer:CompassContainer&gt;
	
	&lt;!--- center default property --&gt;
	&lt;s:Label text="Center Content" /&gt;
	
	&lt;!--- north content --&gt;
	&lt;compassContainer:northContent&gt;
		&lt;s:VGroup&gt;
			&lt;s:Label text="North Content" /&gt;
			&lt;s:Label text="North Content" /&gt;
			&lt;s:Label text="North Content" /&gt;
		&lt;/s:VGroup&gt;
	&lt;/compassContainer:northContent&gt;
	
	&lt;!--- east content --&gt;
	&lt;compassContainer:eastContent&gt;
		&lt;s:VGroup&gt;
			&lt;s:Label text="East Content" /&gt;
			&lt;s:Label text="East Content" /&gt;
			&lt;s:Label text="East Content" /&gt;
		&lt;/s:VGroup&gt;
	&lt;/compassContainer:eastContent&gt;
&lt;/compassContainer:CompassContainer&gt;
</pre>
<p>
	To add content via Actionscript, you have 2 options: (A) create an array
	of IVisualElement implementing content and set it to the "eastContent", 
	"northContent", etc., property; (B) retrieve the region instance directly 
	and add content to it like any container.
</p>
<p>
	For example, to add a label directly to the North region:
</p>
<pre class="prettyprint">
var cc:CompassContainer;
cc.northRegionInstance.addElement(new Label());
</pre>
<p>
	Note, when adding content directly to regions, check if the region exists 
	before interacting with it. Regions are created on demand and do not exist 
	until needed.
</p>

<h3>Add/Remove Regions</h3>
<p>
	During runtime, to add a region to the compass container, call addRegion() 
	and pass the compass direction requested and the region container will be 
	returned.  
</p>
<p>
	To remove a region, call removeRegion() and pass the compass direction of 
	the region to be removed.
</p>

<h3>Resizing Regions</h3>
<p>
	Regions can be resized via dividers that are automatically created when 
	regions are initialized.  Users can resize by dragging the dividers. 
	Regional min/max width/height will be respected.
</p>
<p>
	To lock the dimensions of a region, use the "northResizeLocked", 
	"westResizeLocked", etc., properties. When locked and the container's size 
	changes, the center region will resize but the locked region's size will not 
	change.
</p>
<p>
	Use the styles to configure the gap between regions and the size of the 
	divider.  The gap and divider size do not need to be the same. For example, 
	the gap between regions could be -1, so they overlap, but a divider width of 
	-1 would mean a user could never hover over it, so in this case a divider 
	width of greater than 0 would make sense.
</p>
<p>
	Dividers use a custom skin.
</p>

<h3>Minimized Regions</h3>
<p>
	Optional regions (E.G. all regions other than the "center") may also be 
	configured to be minimized via a minimization icon in the region chrome. 
	Once minimized they can be viewed by either restoring them by clicking the 
	minimize icon again, or by floating the content above the container by 
	clicking the minimize region.
</p>
<p>
	To enable or disable whether users can minimize a region, see the 
	"eastCanBeMinimized", "westCanBeMinimized", etc., properties. Note that the 
	center region cannot be minimized.
</p>
<p>
	Only relevant if the region displays its chrome.
</p>
<p>
	Uses a custom skin.
</p>

<h3>Region Chrome</h3>
<p>
	The region chrome is the border/background and the header part of each 
	region. Even the center region has chrome, although the center region does 
	not typically display a header. To show the regional chrome, use the 
	"showNorthChrome", "showWestChrome", etc. properties.
</p>
<p>
	If the chrome is not displayed, typically the minimize and close icons are 
	not displayed and all of their related properties are irrelevant.
</p>
<p>
	See the skins to configure the regional chrome.
</p>

<h3>Closing Regions</h3>
<p>
	Optional regions (E.G. all the regions except the "center") can be closed by 
	users clicking the close icon in the chrome if the respective "canBeClosed" 
	property for the region is true.  See the "westCanBeClosed", 
	"northCanBeClosed", etc. properties.
</p>
<p>
	Note, that regions can always be closed programmatically.  Call the 
	removeRegion() method to immediately remove a region.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	When minimized content is floated out, a hard-wired Move effect is used with 
	a duration of 150 milliseconds.
</p>
<p>
	When regions are minimized or closed, a hard-wired Fade effect is played. 
	You can set the duration of this effect via the "animationDuration" 
	property.
</p>
<p>
	You can change the default easer used by both animations use via the "easer" 
	property.
</p>

<h3>Layout</h3>
<p>
	All of the optional regions have explicit dimensions which can be set via 
	the "eastWidth", "northHeight", etc. properties. Min and max dimensions for 
	the optional regions can also be set via the "minEastWidth", "maxEastWidth", 
	"minNorthHeight", "maxNorthHeight", etc. properties.
</p>
<p>
	When the container resizes, the center region's dimensions will adjust to 
	accommodate the explicit dimensions of the optional regions.
</p>

<h3>Notes on Performance</h3>
<p>
	Regions are created as necessary, therefore the class is highly performant. 
	Do not hesitate to use this class as a lightweight replacement for the Flex 
	SDK DividedBox class, even for simple containers. 
</p>
<p>
	To increase performance further, set "showRegionChrome" to false for all 
	regions and only create header elements on demand in the skin using the 
	Flex Spark skinning architecture.
</p>

<h3>Accessibility &amp; Focus</h3>
<p>
	Regions support focus.
</p>
<p>
	The minimize and close icons can be focused by tabbing to them, and clicked 
	via the spacebar key.
</p>

<h3>Default Property</h3>
<p>
	"centerContent" is the default property in MXML. 
</p>

<h3>Colors and Border</h3>
<p>
	The background color of each region is set via the "northBackgroundColor", 
	"centerBackgroundColor", etc. styles.  The border for each region is also 
	set via styles.  The gap color can also be set via styles. See the ASDocs.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>REGION_INITIALIZED</b><br>
	ardisia.components.compassContainer.events.CompassContainerEvent<br>
	Dispatched when a region is initialized and added to the CompassContainer.
</p>
<p>
	<b>DIVIDER_PRESS</b><br>
	ardisia.components.compassContainer.events.CompassContainerEvent<br>
	Dispatched when a "divider" is moused down.
</p>
<p>
	<b>DIVIDER_DRAG</b><br>
	ardisia.components.compassContainer.events.CompassContainerEvent<br>
	Dispatched when a "divider" is dragged.
</p>
<p>
	<b>DIVIDER_RELEASE</b><br>
	ardisia.components.compassContainer.events.CompassContainerEvent<br>
	Dispatched when a "divider" is moused up or released.
</p>
<p>
	<b>REGION_CLOSE</b><br>
	ardisia.components.compassContainer.events.CompassContainerEvent<br>
	Dispatched when a region is closed.
</p>
<p>
	<b>REGION_MINIMIZE_CHANGE</b><br>
	ardisia.components.compassContainer.events.CompassContainerEvent<br>
	Dispatched when a region's minimization state changes.
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>gap</b><br>
	default 6<br>
	The gap between regions.<br><br>
	If the divider width/height styles is not explicitly set, the divider 
	buttons will be sized to the same dimensions as the gap.
</p>
<p>
	<b>dividerWidth</b><br>
	dividerWidth NaN<br>
	Width of the divider button for vertical dividers. If NaN, will be set to 
	the width of the gap.
</p>
<p>
	<b>gap</b><br>
	dividerHeight NaN<br>
	Height of the divider button for horizontal dividers. If NaN, will be set to 
	the height of the gap.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, Stockholm, and London themes.
</p>

<h3>Example</h3>
<p>
	See the CompassContainer demo application for example code.
</p>
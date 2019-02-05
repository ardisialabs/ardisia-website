<h3>Overview</h3>
<p>
	The TransformContainer adds dragging and transformation support to its
	children elements.
</p>

<h3>Creating the TransformContainer Component</h3>
<p>
	The TransformContainer extends the Flex SDK SkinnableContainer class, and
	thus can be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the TransformContainer Component</h3>
<p>
	All elements that implement IVisualElementContainer can be added as 
	children, but only children elements that dispatch mouse events can be 
	selected and transformed.
</p>
<p>
	By default, all selectable children can be selected, dragged, and
	transformed via the selection 'pips'.
</p>

<h3>Selection</h3>
<p>
	When elements are hovered, if "showHoverIndicator" is true, then the 
	"hoverIndicatorFactoryPart" skin part is displayed. 
</p>
<p>
	Upon selection, if "showSelectionIndicators" is true, a 
	selectionIndicatorFactoryPart skin part will be displayed over all selected 
	elements. Also, selected elements will have a series of 9 transformation 
	pips displayed around them for transforming the selected elements.
</p>
<p>
	Multiple elements can be selected if "allowMultipleSelection" is true, and 
	the SHIFT or CTRL key is down while elements are moused down.
</p>
<p>
	Selected elements can be retrieved via the "selectedElements" property, and 
	selection can be cleared via clearSelection() or by setting the 
	"selectedElements" property to null.
</p>

<h3>Dragging</h3>
<p>
	If the "dragEnabled" property is true (default true), then selected elements
	can be dragged.
</p>

<h3>Excluded Pips</h3>
<p>
	Use the "excludedPips" property to exclude certain pips from selected 
	elements and remove certain transformation options. Supply an array with 
	values ranging from 0 (NORTH_WEST) to 7 (WEST) and 8 (ROTATE).
	<ul>
		<li>0 = NORTH_WEST</li>
		<li>1 = NORTH</li>
		<li>2 = NORTH_EAST</li>
		<li>3 = EAST</li>
		<li>4 = SOUTH_EAST</li>
		<li>5 = SOUTH</li>
		<li>6 = SOUTH_WEST</li>
		<li>7 = WEST</li>
		<li>8 = ROTATE</li>
	 </ul>
</p>

<h3>Transformation Modes</h3>
<p>
	"none" applies no transformation and does not display the transformation 
	pips.
</p> 
<p>
	"postScale" applies transform scaling to the selected element(s) after 
	applying all other transformations. This mode can add large amounts of skew 
	to transformed elements. This is the only mode allowed when multiple 
	elements are selected.
</p>
<p>
	"preScale" mode applies scaling before applying any other transformations 
	and does not change the element's skew.
</p> 
<p>
	"explicit" applies changes in size to explicit width and height values. 
	"explicit" is useful for text or containers when distortion is not desired. 
	The element's scaling is not changed and the element's minWidth, maxWidth, 
	minHeight, and maxHeight settings will be respected.
</p>
<p>
	"postScale" allows the user to skew elements while "preScale" and "explicit" 
	mode will not add additional skew.
</p>
<p>
	The default transformMode is "preScale".
</p>
<p>
	For multiple selection, this property is irrelevant. If multiple elements 
	are selected, the "postScale" transformMode is applied automatically.
</p>
	  
<h3>Locked Aspect Ratio</h3>
<p>
	To resize elements and maintain the aspect ratio, either set the 
	"lockAspectRatio" property to true or hold down the SHIFT key while 
	transforming.
</p>

<h3>z Level</h3>
<p>
	To change the z level of elements, use their "depth" property.
</p>

<h3>Layout</h3>
<p>
	The TransformContainer does use a Spark layout class for layout to support
	depth and proper child initialization.  
</p>
<p>
	Thus, avoid providing elements with anchor layout settings. This will give 
	child elements the freedom to be dragged around and transformed.
</p>
<p>
	For example, avoid:
</p>
<pre class="prettyprint">
&lt;shapes:Star top="10" width="50%"/&gt;
</pre>
<p>
	In the example above the layout would alter user changes to the "y" position
	of the elements and its width. Instead use the following:
</p>
<pre class="prettyprint">
&lt;shapes:Star y="10" width="200"/&gt;
</pre>

<h3>Focus</h3>
<p>
	When selected elements are de-selected, they will lose focus.
</p>

<h3>Cursors</h3>
<p>
	The TransformContainer uses 3 custom cursors:
</p>
<p>
	The Resize Cursor is defined by the "resizeCursorFactoryPart" skin part. The 
	reason this cursor uses a skin part is so that it can be transformed to 
	align with rotated elements.
</p>
<p>
	The Rotate and Move cursors are defined in CSS.  See the "rotateCursor" and 
	"moveCursor" styles.
</p>
<p>
	All cursors are routed through the NativeCursorManager for native display.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>HOVERED_ELEMENT_CHANGED</b><br>
	flash.events.Event<br>
	Dispatched when the hovered element changes.
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.transformContainer.events.TransformContainerEvent<br>
	Dispatched when the selection changes.
</p>
<p>
	<b>ELEMENT_DRAG_START</b><br>
	ardisia.components.transformContainer.events.TransformContainerEvent<br>
	Dispatched when a visual element drag begins.
</p>
<p>
	<b>ELEMENT_DRAGGING</b><br>
	ardisia.components.transformContainer.events.TransformContainerEvent<br>
	Dispatched while a visual element is being dragged.
</p>
<p>
	<b>ELEMENT_DRAG_END</b><br>
	ardisia.components.transformContainer.events.TransformContainerEvent<br>
	Dispatched when a visual element drag ends.
</p>
<p>
	<b>TRANSFORM_DRAG_START</b><br>
	ardisia.components.transformContainer.events.TransformContainerEvent<br>
	Dispatched when a transform begins.
</p>
<p>
	<b>TRANSFORM_DRAGGING</b><br>
	ardisia.components.transformContainer.events.TransformContainerEvent<br>
	Dispatched when a transform is in progress.
</p>
<p>
	<b>TRANSFORM_DRAG_END</b><br>
	ardisia.components.transformContainer.events.TransformContainerEvent<br>
	Dispatched when a transform ends.
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>rotateCursor</b><br>
	Embedded graphics class for the cursor used to rotate layers. If not set, 
	will use the DefaultCursor.
</p>
<p>
	<b>moveCursor</b><br>
	Embedded graphics class for the cursor used to move layers.  If not set, 
	will use the DefaultCursor.
</p>
<p>
	<b>borderVisible</b><br>
	default true<br>
	True to display a border.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins and styles are provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the TransformContainer demo application for example code.
</p>
	
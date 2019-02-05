<h3>Overview</h3>
<p>
	Small viewport designed to help the user navigate scrollable viewports.
</p>
<p>
	The MiniViewport displays a bitmap representation of the linked viewport. 
	The area that is visible within the viewport is indicated via a 
	rectangular overlay. Users can update the scroll position of the viewport 
	by dragging the visible rectangle overlay in the MiniViewport.
</p>
<p>
	When the scroll position of the viewport changes for any reason, 
	for example through scrollbars or resizing, the MiniViewport's visible 
	rectangle overlay will update automatically.
</p>

<h3>Creating the MiniViewport Component</h3>
<p>
	The MiniViewport extends the Flex SkinnableComponent class which means that 
	it can be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the MiniViewport Component</h3>
<p>
	To create the link between the scrollable viewport and the MiniViewport, 
	simply send a reference to the viewport to the MiniViewport's 'viewport' 
	property.
</p>
<p>
	In addition, the scroll position of the viewport can be changed via dragging 
	within the MiniViewport.  However, to update the image of the viewport, E.G. 
	the bitmap representation of the viewport, one must manually call the 
	update(true) method of the MiniViewport.
</p>

<h3>Performance Considerations</h3>
<p>
	This component does not listen for changes to the bitmap representation of 
	the viewport automatically. Calling update(true) is necessary to update the 
	bitmap representation of the viewport and must be called manually. Update 
	intelligently to prevent pointless updates.
</p>
<p>
	The viewport's bitmap representation is scaled to vastly improve 
	performance. 
</p>

<h3>Transformations and Scaling</h3>
<p>
	The bitmap representation of the viewport will lose any transformations and 
	scaling applied directly to the viewport. Elements within the viewport with 
	matrix transformations will retain them. However, it would be unusual to 
	apply matrix transformations directly to a viewport, so this limitation 
	should rarely affect applications.
</p>

<h3>Virtualized Layouts</h3>
<p>
	Elements with virtualized layouts will not work properly with this 
	component. This includes lists that use virtualized vertical layouts, and 
	any TLF text component that supports scrolling because scrollable TLF 
	virtualizes textlines.
</p>
<p>
	To use with lists, do not use virtualization in the layout.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CHANGE_SCROLL</b><br>
	ardisia.components.miniViewport.events.MiniViewportEvent<br>
	Dispatched when the user updates the viewport's scroll positions via mouse 
	interaction using this component.
</p>
<p>
	<b>DRAG_START</b><br>
	ardisia.components.miniViewport.events.MiniViewportEvent<br>
	Dispatched when the user starts dragging the visibleRectPart skin part.
</p>
<p>
	<b>DRAGGING</b><br>
	ardisia.components.miniViewport.events.MiniViewportEvent<br>
	Dispatched when the user is dragging the visibleRectPart skin part.
</p>
<p>
	<b>DRAG_END</b><br>
	ardisia.components.miniViewport.events.MiniViewportEvent<br>
	Dispatched when the user finishes dragging the visibleRectPart skin part.
</p>

<h3>Selected Custom Styles</h3>
<p>
	See the MiniViewport ASDocs.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin is provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the MiniViewport demo application for example code.
</p>
	
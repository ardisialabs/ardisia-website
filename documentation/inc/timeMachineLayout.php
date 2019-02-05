<h3>Overview</h3>
<p>
	Layout class that lays out elements in a TimeMachine layout pattern. 
	Supports virtualization.
</p>

<h3>Scrolling</h3>
<p>
	Not a typical layout in the sense that there is no scroll position or 
	overflow along the x or y axis. Instead, layout occurs by placing elements 
	at higher z values along the z axis. 
</p>
<p>
	Components that use this layout should not scroll via horizontal or vertical 
	scroll position. They should instead set the "zScrollPosition" value to 
	display a specific element or iterate the zScrollPosition property to 
	animate changes. To use keyboard navigation do not call 
	getHorizontalScrollDelta() or getVerticalScrollDelta() or other related 
	scrolling methods. Instead call getScrollPositionToElement() and pass the 
	navigation unit to get the zScrollPosition to the next element.
</p>

<h3>Relevant Properties</h3>
<p>
	Both virtualized and non-virtualized layouts restrict the number of elements 
	displayed to the "maxDisplayedElements" property value.
</p>
<p> 
	The "zSeparation" property controls how far apart the elements are placed 
	along the z axis. In other words, the gap is the "zSeparation" property.
</p>

<h3>Accessibility and Keyboard Support</h3>
<p>
	Methods used to interact with lists are implemented and scrolling through 
	the layout via the left and right arrow keys are supported.
</p>

<h3>Mouse Wheel Support</h3>
<p>
	Mouse wheel support is not implemented in this layout.  See the 
	TimeMachineList class for an implementation of mouse wheel support with a 
	TimeMachineLayout.
</p>

<h3>Example</h3>
<p>
	See the TimeMachineLayout demo application for example code.
</p>

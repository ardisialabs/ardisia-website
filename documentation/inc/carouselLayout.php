<h3>Overview</h3>
<p>
	Layout class that lays out elements in a Carousel layout pattern. Supports 
	virtualization
</p>
	
<h3>Scrolling</h3>
<p>
	Not a typical layout in the sense that there is no scroll position or 
	overflow along a linear axis. Instead, layout occurs at angles along an arc 
	from 0 to 360 degrees. If layout is not virtualized, all elements are 
	displayed along the arc.  If virtualization is enabled, a number of 
	renderers equal to the "maxVisibleVirtualElements" property value are 
	visible along the arc.
</p>
<p>
	For non-virtualized layouts, the arc length in degrees can also be adjusted 
	via the "arcLength" property.  For virtualized layouts, the arc length must 
	be 360 degrees.
</p>
<p>
	Components that use this layout should not interact by requesting a scroll 
	delta. They should instead request the "angleOffset" value to center 
	elements in the carousel or iterate the "angleOffset" to animate changes. 
	Because of this, keyboard navigation will require calling functions other 
	than getHorizontalScrollDelta() or getVerticalScrollDelta() or other related 
	scrolling methods. Instead use the getAngleOffsetToElement() method of the 
	CarouselLayout to get the value to set to the "angleOffset" property to 
	center the element in the carousel.
</p>

<h3>Relevant Properties</h3>
<p>
	The number of properties that can be used to change the visual appearance is 
	numerous. See the ASDocs.
</p>

<h3>Accessibility and Keyboard Support</h3>
<p>
	Methods used to interact with lists are implemented and scrolling through 
	the layout via the arrow keys is supported (left, right, up, down, 
	home/end).
</p>

<h3>Mouse Wheel Support</h3>
<p>
	Mouse wheel support is not implemented in this layout.  See the CarouselList 
	class for an implementation of mouse wheel support with a CarouselLayout.
</p>

<h3>Example</h3>
<p>
	See the CarouselLayout demo application for example code.
</p>
	
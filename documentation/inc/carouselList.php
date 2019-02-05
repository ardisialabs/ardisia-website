<h3>Overview</h3>
<p>
	List optimized for use with the CarouselLayout class.
</p>

<h3>Using the CarouselList</h3>
<p>
	The list is navigated using typical Spark List methods.  The major change is 
	that instead of scrolling through the list via vertical or horizontal 
	scroll, the list is scrolled along the angle offset, or the "angleOffset" 
	property. 
</p>
<p> 
	To jump to elements in the list, call centerIndex() with the desired element 
	index.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Supports animation between elements.  The "easer" and "duration" properties 
	allow for customization of the animation. Set "duration" to 0 to skip the 
	animation.
</p>

<h3>Mouse Wheel Support</h3>
<p>
	By default, the mouse wheel supports scrolling between elements.  To remove 
	wheel scroll, add a high priority mouse wheel handler and stop the event 
	from propagating or subclass the component.
</p>

<h3>Accessibility</h3>
<p>
	The selected index can be updated via keyboard interaction. Up, down, left, 
	right, home, and end are implemented.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	One skin is provided for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the CarouselList demo application for example code.
</p>

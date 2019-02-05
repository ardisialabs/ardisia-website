<h3>Overview</h3>
<p>
	The PackedLayout class lays out elements in a packed pattern by minimizing 
	visual element overlap.
</p>

<h3>Layout Modes</h3>
<p>
	There are 3 layout modes: random, radial, and weighted.
</p>
<p>
	The default value of "random" will randomly place elements anywhere within 
	the component's bounds.  A value of "radial" will position the elements 
	radially around the center with some weighting for element size but 
	primarily designed to have the best appearance.  All other modes involve a 
	distribution function for layout.
</p>
<p>
	All of the modes have overlap minimized.
</p>

<h3>How it Works</h3>
<p>
	Elements are positioned according to a Rectangle that stores the x/y
	position as a percentage of the total width and height. This way, the 
	relative position of the elements will hold as the component's size changes.
</p>
<p>
	If the layout mode is weighted, each element's weight on the distribution 
	function is determined from the dimensions of the visual element.
</p>
<p>
	To edit an element's layout without refreshing all layout, retrieve its
	layout Rectangle via the "layoutRects" property.  The index of the Rectangle
	in the "layoutRects" vector for a particular element is the same as the 
	element's index in the display list.
</p>	
<p>
	Since layout is controlled by the "layoutRects" vector, elements should
	not be positioned or sized directly.  Instead, refreshPositions() and then
	change individual layout by retrieving the respective Rectangle in the 
	"layoutRect" property, edit the Rectangle, and then update the display list.
</p>
 
<h3>Relevant Properties</h3>
<p>
	Minimization of overlap is accomplished by passes, the number of which is 
	set via the "resolution" property.  Increase the number of passes to reduce 
	overlapping at the cost of performance.  However, passes are extremely fast 
	so performance is not highly impacted by a large resolution.
</p>
<p>
	For weighted layout modes, the distribution function can be adjusted by the 
	"peak" and "noiseFactor" properties. See the demo for an illustration of the 
	effect these properties have on the distribution function.
</p>
<p>
	To completely refresh layout and give all of the elements new layout 
	positions, call "refreshPositions()".
</p>

<h3>Virtualization</h3>
<p>
	Not supported.
</p>

<h3>Accessibility and Keyboard Support</h3>
<p>
	Methods used to interact with lists are implemented and selection via the 
	arrow keys is supported.
</p>

<h3>Example</h3>
<p>
	See the PackedLayout demo application for example code.
</p>


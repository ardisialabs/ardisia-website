<h3>Overview</h3>
<p>
	Layout class that lays out elements in a Coverflow layout pattern. Supports 
	virtualization.
</p>

<h3>Scrolling</h3>
<p>
	The "xSeperation" property controls how far apart the elements are placed. 
	The width of the elements is not relevant to the horizontal gap between 
	elements. In other words, the gap is the "xSeperation" property.
</p>
<p>
	Scrolling occurs horizontally along the x axis.  Therefore, vanilla 
	scrolling implementations can handle scrolling.
</p>

<h3>Relevant Properties</h3>
<p>
	Both virtualized and non-virtualized layouts both restrict the number of 
	elements displayed to the "maxDisplayedElements" property value. 
</p>

<h3>Accessibility and Keyboard Support</h3>
<p>
	Methods used to interact with lists are implemented and scrolling through 
	the layout via the arrow keys is supported.
</p>

<h3>Mouse Wheel Support</h3>
<p>
	Mouse wheel support is not implemented in this layout.  See the 
	CoverflowList class for an implementation of mouse wheel support with a 
	CoverflowLayout.
</p>

<h3>Example</h3>
<p>
	See the CoverflowLayout demo application for example code.
</p>

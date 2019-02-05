<h3>Overview</h3>
<p>
	The Separator components enable a developer to provide visually appealing 
	breaks between layout elements and alter the spacing between elements 
	without changing any gap in the layout.
</p>	
<p>
	Each separator (HSeparator and VSeparator) consists of 2 strokes (lines): a 
	primary and a secondary line. Each stroke's thickness, color, and alpha can 
	be changed independently of the other. For the horizontal separator 
	(HSeparator), the primary line sits above the secondary line. For the 
	vertical separator (VSeparator), the primary line sits to the left of the 
	secondary line.
</p>
<p>
	These components are similar to the HR element in HTML and the Spacer 
	component in Flex.
</p>

<h3>Creating a Separator Component</h3>
<p>
	The Separator extends the Group class so it can be added to any container 
	that implements IVisualElementContainer. 
</p>

<h3>Using the Separators</h3>
<p>
	Use stroke color/thickness/alpha styles to create the desired look and use 
	the padding styles to change the space between siblings and the Separators. 
	This can be very handy to change the spacing between sibling elements and a 
	Separator without changing the layout.
</p>
<p>
	For example:  a VGroup with a gap of 10 pixels will always have 10 pixels of 
	separation between child elements.  Using a HSeparator, a developer could 
	add additional padding between elements above and below the separator via 
	the "paddingTop" and "paddingBottom" properties without affecting the 10 
	pixel gap between the rest of the elements in the VGroup.
</p>

<h3>Styles</h3>
<p>
	Vertical separators by default apply 20 pixels of padding above and below 
	the separator. Horizontal separators by default apply 20 pixels of padding 
	to the left and right of the separator. Unlike the padding used by layout 
	classes, padding for the separators changes the measured dimensions of the 
	separators.
</p>

<h3>Performance</h3>
<p>
	Each separator is a pure Actionscript class, which means that the separators 
	are lightweight, fast, and not skinnable.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	The Ardisia Component Set includes styles for the Spark, London, and 
	Stockholm themes.
</p>

<h3>Example:</h3>
<p>
	See the SeparatorDemo application for example code.
</p>

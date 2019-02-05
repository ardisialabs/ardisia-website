<h3>Overview</h3>
<p>
	Accordion container that supports deferred instantiation for MXML content. 
</p>
<p>
	Supporting deferred instantiation for MXML means that the content 
	of child elements will not be created until selected and visible to reduce 
	initial latency and create a lower memory footprint.
</p>

<h3>Creating the Accordion Component</h3>
<p>
	The Accordion extends the Ardisia ViewStack and can be added to any parent
	that implements IVisualElementContainer.
</p>

<h3>Using the Accordion Component</h3>
<p>
	All direct children must extend the AccordionContainer class.
</p>
<p>
	The Accordion should be explicitly sized so that selected containers resize 
	to fill the available space in the Accordion.
</p>
<p>
	See the documentation on the Ardisia ViewStack for more information 
	regarding deferred content and setting the visible child.
</p>

<h3>AccordionContainer</h3>
<p>
	All direct children must extend the AccordionContainer class. The 
	AccordionContainer class is identical to the Ardisia ExpandingContainer 
	class, except that some of the ExpandingContainer's API is excluded for the 
	AccordionContainer.
</p>

<h3>Layout</h3>
<p>
	The headers for the AccordionContainer containers can be different sizes. 
</p>
<p>
	Set the Accordion's dimensions explicitly or via anchors and the 
	selectedChild will be sized to fit the Accordion.
</p>
<p>
	See the documentation on the ExpandingContainer for more information 
	regarding the AccordionContainer.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	"duration" and "easer" properties control the expand/contract animation.
</p>

<h3>Accessibility</h3>
<p>
	Each AccordionContainer can be tabbed to and selected via the SPACE key 
	when focused.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the Accordion demo application for example code.
</p>
	



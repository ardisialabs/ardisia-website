<h3>Overview</h3>
<p>
	List designed to use the PackedLayout layout class.  Also supports throwing 
 	layout elements via mouse interaction. 
</p>
<p>
	Useful to create interactive distributive lists like tag clouds.
</p>

<h3>Creating the PackedList Component</h3>
<p>
	The PackedList extends the Flex List class and can be added to any parent 
	that implements IVisualElementContainer.
</p>

<h3>Using the PackedList Component</h3>
<p>
	By default, renderers will be thrown when moused out. Disable throwing via
	the "enableThrowing" property.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	The speed at which renderers are thrown depends on whether the 
	"throwVelocity" property is 0, in which case the speed is determined by how 
	fast the user mouses out of the renderers. Use the "autoThrowSpeedFudge", 
	"autoMaxSpeed", and "autoMinSpeed" to further tweak auto velocity 
	properties.
</p>
<p>
	If "throwVelocity" is greater than 0, the throw velocity will always be the 
	same, regardless of how fast users mouse out of renderers.
</p>
<p>
	For all speeds, the "throwDecay" property controls how fast renderer 
	velocity decays.  Think of this as the drag coefficient.
</p>
<p>
	By default, the throw direction is the same as the mouse out direction. To
	apply an offset, use the "throwAngleOffset" property.  For example, if the 
	"throwAngleOffset" was 90 and the user moused out of a renderer at 180 
	degrees, then the renderer would be thrown at 270 degrees.
</p>

<h3>Layout</h3>
<p>
	Uses the PackedLayout.  See the docs for the PackedLayout class for more
	information.
</p>

<h3>Example</h3>
<p>
	See the PackedList demo application for example code.
</p>

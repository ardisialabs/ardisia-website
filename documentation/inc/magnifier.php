<h3>Overview</h3>
<p>
	Creates a magnification effect over a targeted UIComponent.
</p>

<h3>Creating the Magnifier Component</h3>
<p>
	Do not add the component directly to the display list.  To use, first 
	initialize an instance in Actionscript or in the &lt;fx:Declarations&gt; tag 
	of an MXML document.  
</p>

<h3>Using the Magnifier Component</h3>
<p>
	Call magnify() to apply the component to a target.
</p>
<p>
	Remove the effect via remove().  If the target for the effect 
	has not changed, there is no need to call remove() before calling magnify() 
	again on the same target component.
</p>
<p>
	The "displacementScale" property controls the level of zoom.  Positive 
	values zoom in while negative values zoom out. To apply a change in the 
	"displacementScale" property, call magnify() after changing the 
	"displacementScale" property.
</p>

<h3>Example</h3>
<p>
	See the Magnifier demo application for example code.
</p>

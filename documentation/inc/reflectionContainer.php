<h3>Overview</h3>
<p>
	The ReflectionContainer applies a reflection to any child element that 
	implements IBitmapDrawable. Simple to use and highly performant.
</p>

<h3>Creating the ReflectionContainer</h3>
<p>
	The ReflectionContainer class can be added to any class that implements 
	IVisualElementContainer and can create a reflection for any visual element 
	that implements IBitmapDrawable.
</p>

<h3>Using the ReflectionContainer</h3>
<p>
	The ReflectionContainer container accepts a single child element, the 
	"reflectedElement". The ReflectionContainer container can be added to layout 
	like any other Group subclass.  The "reflectedElement" is the element that 
	will have a reflection created for it.
</p>
<pre class="prettyprint">
&lt;ardisia:ReflectionContainer id="dp"&gt;
	&lt;s:Group&gt;
		&lt;s:BitmapImage source="{data}"/&gt;
	&lt;/s:Group&gt;
&lt;/ardisia:ReflectionContainer&gt;
</pre>
<p>
	In the example above, a reflection will be created of the BitmapImage.
</p>

<h3>Reflection Updates</h3>
<p>
	By default, the reflection will update each time the reflected element 
	dispatches a FlexEvent.UPDATE_COMPLETE event.  This can be inefficient, 
	especially when the reflected element invalidates often.  A more appropriate 
	solution may be to turn auto-updating off via the "autoUpdate" property and 
	manually call update() when the reflection should be updated. 
</p>
<p>
	It may also be necessary for the reflection to update more often than the 
	reflected element dispatches the FlexEvent.UPDATE_COMPLETE event. To update 
	on each frame, call update() after ENTER.FRAME events are dispatched.  This 
	should be considered the nuclear option because it is very memory and 
	processor intensive. 
</p>
<p>
	Also, since working with bitmapData is inherently memory intensive, this 
	class is designed to be as efficient as possible by updating bitmapData 
	only when necessary and the usage of lightweight SpriteVisualElement 
	elements. The actual reflection does not participate in layout and 
	measurement. Also, the reflection is not mouse enabled. Lay out this class 
	accordingly.
</p>

<h3>Layout</h3>
<p>
	The ReflectionContainer fully participates in layout.  However, the actual 
	reflection does not and is not mouse enabled.
</p>

<h3>Example</h3>
<p>
	See the ReflectionContainer demo application for example code.
</p>

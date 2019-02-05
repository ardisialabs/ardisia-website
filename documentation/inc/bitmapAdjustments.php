<h3>Overview</h3>
<p>
	Functions used to apply effects to bitmap data.
</p>

<h3>Creating and Using the Functions</h3>
<p>
	The BitmapAdjustments class is purely static and all functions work by 
	returning the modified bitmap data. They do not function like flash filters 
	and are not applied dynamically. Developers must manually apply the modified 
	bitmap data.
</p>
<p>
	See the ASDocs for the specifics of what adjustments are available.
</p>

<h3>Performance Implications</h3>
<p>
	Some of the effects, especially the oil painting and kuwahara effect, can be 
	extremely performance intensive. Huge images will simply cause the player to 
	timeout. Therefore, either resize images to smaller dimensions before 
	applying the effect, and then blow the bitmap data back up, or process large 
	images line by line.
</p>

<h3>Sample Usage</h3>
<pre class="prettyprint">
&lt;s:Image id="img"
	 source="@Embed(source='sun.jpg')" /&gt;
&lt;s:Button label="Pixelate"
	  click="img.source = BitmapAdjustments.pixelate(img.bitmapData, 0, -1, 
		PixelateTypes.RECTANGLE, 10, 0, 0, 0);" /&gt;
</pre>
<p>
	In the example above, clicking the button would convert the image to a 
	pixelated version.				 
</p>

<h3>Example</h3>
<p>
	See the BitmapAdjustments demo application for additional example code.
</p>

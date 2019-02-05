<h3>Overview</h3>
<p>
	The AnimatedImage component animates spritesheets at the requested frames 
	per second ("FPS") and the FPS is not locked to the stage FPS. This grants 
	developers granular control over the animation speed of these animated 
	images, as well as the ability to jump to specific frames in the animations.
</p>	

<h3>Difference from Embedded SWFs</h3>
<p>
	Embedded SWFs can be animated, but they are forced to run at the flash 
	player's global FPS. This can result in animations being forced to run too 
	fast or too slow without any way to modify the FPS.  An AnimatedImage 
	animation can be run at any FPS, up to the flash player maximum.
</p>

<h3>Creating the AnimatedImage</h3>
<p>
	The AnimatedImage extends the spark BitmapImage class and can be added to 
	any visual container that supports IVisualElementContainer.
</p>

<h3>Using the AnimatedImage</h3>
<p>
	AnimatedImage components fully support the BitmapImage API and can accept 
	the same source formats (png, jpg, raw BitmapData, etc.) for the bitmap data 
	as the BitmapImage class.
</p>
<p>
	To use an AnimatedImage component, set the following properties based on the 
	Spritesheet (read more about Spritesheets below):
</p>
<ul>
	<li>frames per row: "framesPerRow"</li>
	<li>rows: "rows"</li>
	<li>frames in the last row: "framesLastRow' and</li>
	<li>framerate: "framesPerSecond"</li>
</ul>
<p>
	Next, set the source to the desired spritesheet graphic. The animation will
	begin running automatically once the source loads.
</p>
<p>
	Note that the "framesPerRow", "rows", and "framesLastRow" in the last row 
	should be adjusted to reflect the particular spritesheet.
</p>
<p>
	For example, these would be the correct settings for the following 
	spritesheet: <br>
	
	<div style="margin:20px 0 0 0;">
		<img src="/assets/images/spritesheet.png"/>
		<div style="margin: 0 0 0 20px;">
			Frames Per Row: 10<br>
			Rows: 6<br>
			Frames In The Last Row: 10
		</div>
		<div class="clear">&nbsp;</div>
	</div>
	
</p>

<h3>Creating Spritesheets</h3>
<p>
	See <a href="http://en.wikipedia.org/wiki/Sprite_(computer_graphics)" target="_blank">computer graphics</a> for information on spritesheets. 
</p>
<p>
	To create a spritesheet, use software that has support for spritesheet 
	generation, like CS6, or manually concatenate each frame in your animation 
	from left to right, top to bottom within a single image in graphics editing 
	software.  Make sure that each frame has the same width and height. See the
	demo application for spritesheet examples.
</p>

<h3>Automatic Play</h3>
<p>
	Be default, the animation will run once the bitmap data is set.
</p>

<h3>Manually Setting the Specific Frame</h3>
<p>
	To manually jump to a particular frame, use the "jumpToFrame()" method. 
	Keep in mind, frames are counted from 0 to N. Therefore, the first frame in 
	the spritesheet animation is at index 0.
</p>
<p>
	If an animation is playing when jumpToFrame() is called, the frame will jump 
	but the animation will continue to play.  To freeze the animation at a 
	frame, first call stop() on the animation and then call jumpToFrame().
</p>

<h3>Flash Version</h3>
<p>
	A pure flash version named AnimatedBitmap is included for use when the flex
	framework is not available. The AnimatedBitmap operates nearly the same as 
	the AnimatedImage, but the spritesheet bitmapData is added to the 
	"spriteSheetBmd" property instead of "source".
</p>
<p>
	Also, the AnimatedBitmap only accepts pure BitmapData as input, rather than
	embedded graphics generally.
</p>

<h3>Garbage Collection</h3>
<p>
	Call dispose() to make the component eligible for garbage collection.
	When an AnimatedImage instance is removed from the stage, it is 
	automatically stopped and dispose() is called.
</p>

<h3>Custom Events</h3>
<p>
	The AnimatedImage component dispatches no custom events.
</p>

<h3>Example:</h3>
<p>
	See the AnimatedImage application for example code.
</p>

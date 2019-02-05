<h3>Overview</h3>
<p>
	Scroller class that extends the Flex SDK Scroller and adds support for 
	smooth mouse wheel scrolling, as well as granular control over the number of 
	pixels scrolled for mouse wheel and stepping actions via both the mouse and 
	keyboard.
</p>
<p>
	The Flex SDK Scroller makes control over the number of pixels scrolled 
	difficult by requiring the developer to extend the viewport/layout to change 
	the default scroll amount from 1 pixel. The SDK is also vague on the mouse 
	event "delta" property that can wildly fluctuate the amount of scroll on 
	each mouse wheel tick, and is user OS dependent. 
</p>
<p>
	This class is an attempt to solve these deficiencies.
</p>

<h3>Creating the Scroller</h3>
<p>
	The component extends Scroller, so the Ardisia Scroller can be added to any 
	container that supports a Scroller.
</p>

<h3>Using the Scroller</h3>
<p>
	The Scroller adds two general improvements: (A) the ability to smooth scroll 
	mouse wheel scrolling, and (B) control over the number of pixels to scroll 
	for the mouse wheel, keyboard arrow keys, and clicking the 
	increment/decrement buttons on the scrollbars. Currently, the Flex SDK 
	Scroller lacks this functionality and retrieves the scroll amounts from the 
	viewport and layout, which forces extending the layout for every custom use 
	of a scroller.
</p>
<p>
	To set the mouse wheel scroll amount per tick, set the "mouseWheelStepSize" 
	property. To set the scroll amount for keyboard arrow keys and the 
	increment/decrement buttons on the scrollbars, use the "scrollStepSize" 
	property.
</p>
<p>
	To fallback to retrieving scroll values from the viewport and layout (like 
	the Flex SDK Scroller), set the  "mouseWheelStepSize", 
	"mouseWheelEventDelta", and "scrollStepSize" to 0. If these properties are 
	0, this class will act just like the SDK Scroller except with mouse wheel 
	animation support via the "smoothScrolling" style.
</p>
<p>
	By default, the Scroller does NOT accept focus, which means to enable 
	keyboard support for scrolling, "focusEnabled" must be set to true. Keys 
	supported are: arrow keys, page up, page down, home, end.
</p>
<p>
	The VScrollBar and HScrollBar classes are designed to be initialized and 
	parented by this class. Do not use them independently of the Scroller class.
</p>

<h3>MouseEvent.delta</h3>
<p>
	Mouse wheel scrolling is also affected by the "delta" property on mouse 
	wheel events. The "delta" property affects wheel scrolling by multiplying 
	the scroll amount by the delta value. The delta value is somewhat specific 
	to the user's OS/Browser and may accelerate scrolling.  For example, 
	possible acceleration may occur if the user keeps scrolling after an initial 
	flick of the mouse wheel. The OS may determine that the user is trying to 
	traverse a large list and provide increasing multiples of event.delta. This 
	could be considered a good thing, but it can lead to frustration when a 
	developer is trying to exert rigid control over the amount of scroll per 
	wheel tick.
</p>
<p>
	The Scroller can control this value directly via the "mouseWheelEventDelta" 
	property. Set the "mouseWheelEventDelta" property to 1 to effectively ignore 
	the "delta" property altogether.  Set to "0" to use the delta returned by 
	the flash player.
</p>

<h3>Notes on Event Handling and the Flex SDK Scroller and HScrollBar/VScrollBar 
classes.</h3>
<p>
	The Scroller and the H/VScrollBars work in tandem because both listen to 
	property changes on the viewport. Therefore, if either change the viewport's 
	scroll positions, both the Scroller and H/VScrollBar will update. This 
	allows for some redundancy. For example, both have MouseWheelEvent listeners 
	attached to (A) the skin for the Scroller, and (B) the viewport for the 
	H/VScrollBar.  More on this below.
</p>
<p>
	Both call the viewport for the number of pixels to change the scroll in 
	response to user interaction.  The viewport will then call a function on the 
	associated layout for the pixel delta to apply.
</p>
<p>
	Despite the redundancy between the classes, the Scroller is primarily 
	responsible for touch scrolling and all of the keyboard interaction, and the 
	H/VScrollBar classes handle mouse interaction and animations.
</p>
<p>
	Regarding animations, the H/VScrollBars have support for animation built in, 
	but they choose to ignore it for single step operations. Animation support 
	does exist for repeated stepping (holding down the increment button), 
	paging, and jumping to a position on the scrollbar. The animations are so 
	fast using the default "repeatInterval" and "repeastDelay" styles that it is 
	easy to not notice that they are animated at all. Despite having animation 
	support built in, it is very hard to customize because nearly all of the 
	animation code is private.  The H/VScrollBar handles the animations alone 
	without any interaction from the Scroller. In fact, the Scroller does not 
	support any animation.
</p>
<p>
	Both the Scroller and H/VScrollbar have MouseWheelEvent listeners. Both use 
	the same redundant code and logic to handle wheel events. Whichever 
	component receives the mouse wheel event (H/VScrollBar) will handle the 
	scrolling and then call preventDefault() on the event to prevent the other 
	components (Scroller) from changing the scroll when it receives the bubbling 
	MouseWheelEvent.
</p>
<p>
	All of the interlocking classes make dealing with scrolling more complex.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Mouse wheel scrolling can be animated by setting the "smoothScrolling "style 
	to true and via the "animationDuration" and "easer" properties.
</p>

<h3>Custom Styles</h3>
<p>
	<b>smoothScrolling</b><br>
	Default <i>true</i><br>
	Smooth mouse wheel scrolling.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Included is a Spark theme.  However, the other themes will use the theme 
	skins for the HScrolbar/VScrollBar so their look will reflect the specific 
	theme.
</p>

<h3>Example</h3>
<p>
	See the Scroller application for example code.
</p>



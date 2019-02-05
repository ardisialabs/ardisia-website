<h3>Overview</h3>
<p>
	A button designed to display an icon and its label using a flyout animation.
</p>

<h3>Creating the IconButton</h3>
<p>
	Extends the Button class.  Can be added to any container that implements 
	IVisualElementContainer.
</p>

<h3>Using the IconButton</h3>
<p>
	The label is set via the "label" property, like a vanilla Button.  However,
	the label for an IconButton is not displayed until the button is moused 
	over.
</p>
<p>
	Set the direction the label flies out via the "flyoutDirection" property. If 
	the flyout will overflow the screen, the direction will be automatically 
	flipped. 
</p>

<h3>Removing the Flyout Label</h3>
<p>
	The flyout label can be removed instantly by calling removeFlyoutLabel();
</p>
<p>
	If the IconButton is removed from the stage, the flyout label will also be 
	removed immediately to prevent a situation where the IconButton is on the 
	stage but the flyout label is still on the stage and visible. 
</p>
<p>
	However, if an IconButton's visibility changes, the flyout label's
	visibility will not change automatically. For example, assume that an 
	IconButton is inside a Viewstack and the visible child changes which causes 
	the IconButton to no longer be visible. If this occurs while the flyout 
	label is visible, the flyout label will remain visible since it is parented 
	by the SystemManager. This behavior is typically not desired.
</p>
<p>
	Plan ahead if your application will hide an IconButton while it may be 
	moused over.  This is especially relevant if clicks on an IconButton trigger 
	visibility changes.
</p>
<pre class="prettyprint">
&lt;buttons:IconButton id="ib"
	click="ib.visible=false;ib.removeFlyoutLabel();"/&gt;
</pre>

<h3>Skins</h3>
<p>
	Included are 2 default skins: a black (or white) background that changes to
	white (or black) on rollOver.  The icon is colorized via the ColorTransform
	filter to either black or white depending on the skin.
</p>
<p>
	Note that for custom skins, the SparkButtonSkin class is not necessary 
	because the custom layout contained within the SparkButtonSkin is not used 
	or desired. Use a plain Skin or SparkSkin class.  If a SparkButtonSkin is 
	used, the IconButton will disable automatic icon management in the skin and 
	remove the displayLabel skin part automatically.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	The flyout animation is hardwired and is a Parallel effect of a Move and 
	a Fade animation. The duration of the animation and the amount the label
	"flies out" is controlled by the "duration" and "flyoutDistance" properties.
</p>

<h3>Accessibility</h3>
<p>
	Accessibility mirrors that of the Spark Button class.
</p>

<h3>Custom Events</h3>
<p>
	<b>FLYOUT_SHOW</b><br>
	ardisia.components.iconButton.events.IconButtonEvent<br>
	Dispatched when the flyout label has finished animating in and is displayed.
</p>
<p>
	<b>FLYOUT_HIDE</b><br>
	ardisia.components.iconButton.events.IconButtonEvent<br>
	Dispatched when the flyout label has finished animating out and has been 
	removed.
</p>

<h3>Custom Styles</h3>
<p>
	<b>iconOffsetX</b><br>
	Icon offset along the x axis.<br>
	default 0
</p>
<p>
	<b>iconOffsetY</b><br>
	Icon offset along the y axis.<br>
	default 0
</p>
<p>
	<b>flyoutBackgroundAlpha</b><br>
	The alpha applied to the background of the flyout label.<br>
	default 1
</p>
<p>
	<b>flyoutBackgroundColor</b><br>
	The color applied to the background of the flyout label.<br>
	default #FFFFFF
</p>
<p>
	<b>flyoutColor</b><br>
	The color applied to the flyout label color.<br>
	default #000000
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Two skins are provided for a white and black background for the Spark theme.
</p>

<h3>Example</h3>
<p>
	See the IconButton application for example code.
</p>

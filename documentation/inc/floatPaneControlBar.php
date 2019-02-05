<h3>Overview</h3>
<p>
	The FloatPaneControlBar component is an extended version of the Ardisia 
	ButtonBar that serves multiple purposes for the Pane class. First, it 
	automatically detects when a Pane is floated and creates a button that can 
	be used to minimize/restore/focus the Pane. Second, the float bar handles 
	maximizing Panes by filling the screen with the Pane and keeping its 
	position and size locked to the screen.
</p>
<p>
	Works similarly to the Windows OS taskbar.
</p>

<h3>Creating the FloatPaneControlBar Component</h3>
<p>
	The FloatPaneControlBar extends the Ardisia ButtonBar and can be added to 
	any container that implements IVisualElementContainer.
</p>

<h3>Using the FloatPaneControlBar Component</h3>
<p>
	This component is designed to be very easy to implement.  Simply add the 
	control bar to the application at any location and when a Pane is floated, 
	a button will automatically be created that can be used to activate the 
	respective floated Pane.
</p>
<p>
	The FloatPaneControlBar listens for events that Panes dispatch that bubble 
	up to the SystemManager. Therefore developers do not need to manually hook a 
	Pane into the FloatPaneControlBar.
</p>
<p>
	To prevent a Pane from being managed by the FloatPaneControlBar, set the 
	Pane's "includeInControlBar" property to "false" before floating the Pane 
	and it will be ignored by the FloatPaneControlBar.
</p>

<h3>Manually Removing Panes From The ControlBar</h3>
<p>
	To programmatically remove tracked Panes from the control bar, grab the 
	dataProvider for the FloatPaneControlBar and remove the Pane from the 
	collection via vanilla collection methods.
</p>

<h3>ActivePane</h3>
<p>
	You can retrieve the currently active Pane via the "activePane" property.
</p>

<h3>Maximization</h3>
<p>
	When managed Panes have their "maximized" property set to true, 
	FloatPaneControlBar will handle the maximization and set and lock the Pane 
	to the screen dimensions.  You can set padding from the screen edges for the 
	maximized size via the "maximizeTop", "maximizeRight", "maximizeBottom", and 
	"maximizeLeft" properties.
</p>
<p>
	Often times, it makes sense to put the FloatPaneControlBar at the bottom of 
	the application.
</p>

<h3>Closing Panes</h3>
<p>
	When a Pane is closed, it will automatically be removed from the 
	FloatPaneControlBar's list of managed Panes.  
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Minimization has a hardwired parallel effect that is a Fade and Move. See 
	the "paneEaser" and "animationDuration" properties
	to adjust the effect.
</p>

<h3>Focus</h3>
<p>
	When a Pane is activated via the FloatPaneControlBar, focus is moved to the
	floated Pane's focus manager.
</p>

<h3>Accessibility</h3>
<p>
	Inherits the accessibility of the Flex SDK ButtonBar.  Can be tabbed to and 
	buttons and Panes can be activated via the spacebar. Once a Pane is 
	activated, focus will move to the floated Pane.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>ACTIVE_PANE_CHANGE</b><br>
	ardisia.components.floatPaneControlBar.events.FloatPaneControlBarEvent<br>
	Dispatched when the "activePane" property changes.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the FloatPaneControlBar demo application for example code.
</p>

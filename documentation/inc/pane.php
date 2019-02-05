<h3>Overview</h3>
<p>
	Pane instances are containers that can function as a simple container in 
	their "normal" state, and can be floated and interacted with as if they are 
	windows when pane.floatPane() is called.
</p>

<h3>Creating the Pane Component</h3>
<p>
	The Pane class extends the Flex SDK SkinnableContainer class so they can be
	added to any container that implements IVisualElementContainer or they can 
	be initialized and floated via calling instance.floatPane() on the instance.
</p>

<h3>Using the Pane Component</h3>
<p>
	In its default skin state, a Pane is nothing more than a SkinnableContainer 
	so usage is probably very familiar. To float the Pane, call pane.floatPane() 
	on it.
</p>
<p>
	If the Pane needs to be un-floated, call closeFloatedPane() and then add the
	Pane to a new location on the DisplayList. Never add a floated Pane to new 
	container without calling closeFloatedPane() or you will have memory leaks 
	and potential RTEs.
</p>
<p>
	Keep in mind that when a Pane is closed, a close animation will run so the 
	Pane will not be immediately available to be added to a new container. You 
	have two options: 
</p>
<p>
	<strong>Option 1 To Close a Pane and Add to a New Container:</strong> <br>
	When you call closeFloatedPane() on the Pane, pass a "true" parameter to 
	skip the close transition. Can be immediately added to a new container.
</p>
<pre class="prettyprint">
pane.closeFloatedPane(true);
newContainer.addElement(pane);
</pre>
<p>
	<strong>Option 2 To Close a Pane and Add to a New Container:</strong> <br>
	Before you call closeFloatedPane() on the Pane, listen for the CLOSED event 
	then add the content to the new container.
</p>
<pre class="prettyprint">
pane.addEventListener(PaneEvent.CLOSED, function(event:PaneEvent):void
{
     newContainer.addElement(pane);
})
pane.closeFloatedPane(false);
</pre>
<p>
	Be sure to call closeFloatedPane() when moving a Pane to and from a float 
	state to remove relevant listeners in both this control and any possible 
	control bars. Do not simply remove the Pane from the displayList before 
	calling closeFloatedPane().
</p>

<h3>Changing the Pane Before Animating In</h3>
<p>
	To adjust the Pane before it animates in, listen for the READY_TO_ANIMATE
	event after calling floatPane().  When the event dispatches, the Pane's 
	properties are set and the dimensions have been set. You should move the 
	Pane at this point.
</p>
<p>
	The above only applies if the Pane runs a float animation.
</p>

<h3>Passing Data</h3>
<p>
	To pass data to a Pane, use the included DataPane class that implements
	IDataRenderer.
</p>

<h3>Window Chrome</h3>
<p>
	Floated Panes support typical window chrome.  You add/remove chrome by 
	either (A) removing the skin part from the skin or (B) setting the relevant 
	property on the Pane.  For example, if you don't want the user to be able 
	to close the Pane, either remove the "closeButtonPart" skin part or set the 
	Pane's "canBeClosed" property to false. If "canBeClosed" is false, the Pane 
	can still be closed programmatically, but the close skin part will not be 
	displayed.
</p>
<p>
	Window chrome is added as needed and therefore when a Pane is in its 
	'normal' state no window chrome is created. Do not hesitate to use a Pane 
	as a simple container for memory or performance reasons because any memory 
	costs are generally pay as you go.
</p>

<h3>Minimization, Maximization</h3>
<p>
	By default, setting the minimized and maximized properties do not do 
	anything. Either the skin must implement any visual changes or an external 
	class must handle any changes. The minimize and maximize skin parts only 
	change the minimized and maximized property values.
</p>
<p>
	See the FloatPaneControlBar for a class that will automatically handle 
	minimization and maximization.
</p>

<h3>Control Bar</h3>
<p>
	Content can be added to the "controlBar" property in MXML.  Similar to the
	Flex SDK Panel class.
</p>

<h3>Dimensions</h3>
<p>
	Explicit min/max and width/height settings will be respected, but if these 
	properties are not explicitly defined, the skin will control the min/max 
	dimensions on resize.
</p>

<h3>Garbage Collection</h3>
<p>
	To remove the Pane and make it eligible for garbage collection, call 
	dispose(). It is not always necessary to call dispose() for a Pane to be 
	gc'ed but it is considered best practices.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	By default a hardwired Fade and Move effect runs when the Pane is floated. 
	Developers must subclass the Pane class to alter the animation.
</p>

<h3>Accessibility &amp; Focus</h3>
<p>
	Panes function as a SkinnableContainer by default and when they are floated, 
	they are focused and get their own FocusManager and tab list. Therefore, the 
	window chrome is accessible via keyboard interaction.
</p>

<h3>Default Property</h3>
<p>
	MXML child content is the default property.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>DOCKED</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when the Pane is docked to a Pane navigator.
</p>
<p>
	<b>CLOSED</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when a floated Pane is closed.
</p>
<p>
	<b>TITLE_CHANGE</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when the Pane title changes.
</p>
<p>
	<b>ICON_CHANGE</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when the Pane icon changes.
</p>
<p>
	<b>DRAGGING_STARTING</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched before a Pane drag begins. Can be cancelled.
</p>
<p>
	<b>DRAGGING</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched repeatedly when a Pane is being dragged.
</p>
<p>
	<b>DRAGGING_END</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when a Pane drag ends.
</p>
<p>
	<b>FLOATED</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when the Pane is floated. Will bubble, so can be intercepted by 
	the systemManager.
</p>
<p>
	<b>MAXIMIZE_CHANGE</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when the maximize property value changes.
</p>
<p>
	<b>MINIMIZE_CHANGE</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when the minimize property value changes.
</p>
<p>
	<b>FLOATED_PANE_ACTIVE</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when a floating Pane is focused and activated by the Flex window 
	manager class.
</p>
<p>
	<b>FLOATED_PANE_INACTIVE</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when a previously focused and active floating Pane loses focus 
	and is deactivated by the window manager.
</p>
<p>
	<b>READY_TO_ANIMATE</b><br>
	ardisia.components.pane.events.PaneEvent<br>
	Dispatched when the Pane is about to be animated in but its properties and
	dimensions are set. Last chance to change position before animating in.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the Pane demo application for example code.
</p>
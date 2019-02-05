<h3>Overview</h3>
<p>
	The TabPaneNavigator component is a tab bar combined with a viewstack that 
	enables uses to navigate child content.  All child elements are Ardisia Pane 
	containers. Panes that are children of the TabPaneNavigator can be dragged 
	out of the viewstack and floated. Floated Panes can also be dragged in and 
	docked to the navigator.
</p>
<p>
	Fully supports the API for the Ardisia Buttonbar and the Viewstack, 
	including deferred instantiation.
</p>

<h3>Creating the TabPaneNavigator Component</h3>
<p>
	The TabPaneNavigator extends the Ardisia Viewstack class and can therefore 
	be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the TabPaneNavigator Component</h3>
<p>
	At its core, the TabPaneNavigator is a viewstack that accepts only Pane 
	components as children and uses a hard-wired tab bar to navigate the Panes. 
	Therefore, read the docs on the Ardisia ViewStack, the Ardisia TabBar, and 
	the Ardisia Pane components for questions regarding their usage.
</p>
<p>
	More specific to the TabPaneNavigator is that all direct children must be 
	Pane container components.
</p>

<h3>Docking</h3>
<p>
	Floated Panes will "dock" to the TabPaneNavigator component when they are 
	being dragged and the mouse is over the tab bar skin part of the 
	TabPaneNavigator.  When they dock, the Pane content will be added to the 
	viewstack, selected, and a tab will be created to select the new content.
</p>
<p>
	When a floated Pane is being dragged and the mouse is over the 
	TabPaneNavigator but not over the tab bar skin part, the Pane components 
	"alphaOverPaneNavigator" style will be applied and the alpha of the Pane 
	will be adjusted.
</p>

<h3>Preventing A Dock</h3>
<p>
	Preventing a Pane component from docking can be accomplished in one of three 
	ways: (A) the Pane's "canBeDocked" property is false, (B) the DOCKING event 
	dispatched by the TabPaneNavigator is cancelled, or (C) the DRAG_ENTER event 
	is cancelled when the Pane is initially dragged over the Pane navigator.
</p>

<h3>Un-Docking</h3>
<p>
	To drag a Pane out of the TabPaneNavigator and float it ("un-docked"), a tab 
	must be dragged and during the drag the mouse must leave the tab bar by more 
	than the number of pixels defined by the "unDockThreshold" property.
</p>
<p>
	Preventing a Pane component from being un-docked can be accomplished in one 
	of two ways: (A) the Pane's "canBeFloated" property is false, or (B) the 
	UN_DOCKING event dispatched by the TabPaneNavigator is cancelled.
</p>

<h3>Closing</h3>
<p>
	If the Pane's "canBeClosed" property is true, by default the tab bar skin 
	part of the TabPaneNavigator will display a close icon to enable closing.
</p>
<p>
	You can also remove all the panes and tabs via the <i>removeAll()</i> 
	method.
</p>

<h3>Icons</h3>
<p>
	If the Pane has an icon defined, then the icon will be displayed in the 
	Pane's tab in the tab bar when the Pane is docked to the TabPaneNavigator.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>DRAG_ENTER</b><br>
	ardisia.components.paneNavigators.events.PaneNavigatorEvent<br>
	Dispatched when a Pane is dragged over this Pane navigator.<br>
	Cancel to prevent the Pane from docking to this navigator.
</p>
<p>
	<b>DRAG_EXIT</b><br>
	ardisia.components.paneNavigators.events.PaneNavigatorEvent<br>
	Dispatched when a dragged Pane is dragged out of this Pane navigator.
</p>
<p>
	<b>DOCKING</b><br>
	ardisia.components.paneNavigators.events.PaneNavigatorEvent<br>
	Dispatched when a floated Pane is about to be docked to the navigator.<br>
	Can be cancelled to cancel the dock.
</p>
<p>
	<b>DOCKED</b><br>
	ardisia.components.paneNavigators.events.PaneNavigatorEvent<br>
	Dispatched when a floated Pane has been docked to the navigator.
</p>
<p>
	<b>UN_DOCKING</b><br>
	ardisia.components.paneNavigators.events.PaneNavigatorEvent<br>
	Dispatched when a Pane is about to be un-docked from the navigator and 
	floated.<br>
	Can be cancelled to prevent the un-docking
</p>
<p>
	<b>UN_DOCKED</b><br>
	ardisia.components.paneNavigators.events.PaneNavigatorEvent<br>
	Dispatched when a Pane has been un-docked from the navigator and floated.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the TabPaneNavigator demo application for example code.
</p>

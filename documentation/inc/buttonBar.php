<h3>Overview</h3>
<p>
	A ButtonBar and TabBar that supports dragging, closing buttons, and 
	animation.
</p>

<h3>ButtonBar &amp; TabBar</h3>
<p>
	The Ardisia ButtonBar package includes both a ButtonBar and a TabBar.  The
	differences are primarily visual and for the TabBar the "requireSelection" 
	property must be true.
</p>

<h3>Creating the ButtonBar Component</h3>
<p>
	The Ardisia ButtonBar and TabBar extends the Flex SDK ButtonBarBase class 
	and can therefore be added to any container that implements 
	IVisualElementContainer.
</p>

<h3>Using the ButtonBar Component</h3>
<p>
	The Ardisia ButtonBar and TabBar are setup and used the same way as the 
	Flex SDK ButtonBar and TabBar. The differences are detailed below.
</p>

<h3>Button Dragging</h3>
<p>
	When a button is dragged, the relative positioning of the buttons will 
	change. Dragging can be disabled via listening for the DRAG_STARTING event 
	and calling preventDefault() on the event.
</p>

<h3>Closable</h3>
<p>
	Buttons can have an optional close icon added to them via the 
	"closableField" property. Set the name of the closable field via the 
	"closableField" property on the button bar (defaults to "closable"). Then, 
	on each data item in the dataProvider used to create a button, add a boolean 
	value to the field to specify whether to make the button closable or not.
</p>
<p>
	See the example below:
</p>
<pre class="prettyprint">
&lt;buttonBar:ButtonBar closableField="closable" &gt;
     &lt;buttonBar:dataProvider&gt;
          &lt;s:ArrayCollection&gt;
               &lt;s:DataItem label="Tab A" closable="true"/&gt;
               &lt;s:DataItem label="Tab Button B" closable="true"/&gt;
               &lt;s:DataItem label="Tab But C" closable="true"/&gt;
               &lt;s:DataItem label="Tab Button in ButtonBar D" closable="true"/&gt;
               &lt;s:DataItem label="Tab E" closable="true"/&gt;
          &lt;/s:ArrayCollection&gt;
     &lt;/buttonBar:dataProvider&gt;
&lt;/buttonBar:ButtonBar&gt;
</pre>
<p>
	In the example above, the "closableField" on the button bar was "closable" 
	and a boolean value was defined on each data object in the dataProvider.
</p>
<p>
	Closure can be disabled via listening for the BUTTON_CLOSING event and 
	calling preventDefault() on the event.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	By default, when buttons are shifted during user initiated drags or 
	add/removal, the buttons will animate to their new positions.
</p>
<p>
	Use the "duration" and "easer" properties to control the animations. Set the
	duration to 0 to skip the animation altogether.
</p>
<p>
	Try a duration of 1000 and a Bounce easer, looks rather cool.
</p>

<h3>SelectedItem vs. SelectedIndex</h3>
<p>
	The selectedIndex will change as the user rearranges buttons. In other 
	words, if a selected button is moved from its start position, the 
	selectedIndex will update (although no event will dispatch). Keep this in 
	mind if binding to the selectedIndex.
</p>
<p>
	Use the selectedItem property to determine what button is selected since 
	this will not change during user dragging.
</p>

<h3>Layout</h3>
<p>
	Designed to use a custom layout class; the ButtonBarLayout class in the 
	Ardisia ButtonBar package.  
</p>
<p>
	The most relevant consideration with this layout class is whether the 
	"usePreferredWidth" property is true or false. If true, then each button 
	will be laid out according to its preferred width. If false, the layout will 
	attempt to fill the entire available space by setting each button's width 
	as close to each other as possible and fill the available space. For all 
	cases, button width will respect the "maxButtonWidth" value.
</p>
<p>
	If the "usePreferredWidth" property is true, and the buttons will overflow 
	the available space, they will be automatically shrunk proportionally to 
	fit.
</p>

<h3>Truncation</h3>
<p>
	If the "labelDisplay" skin part is truncated, the button's label will 
	display in a tooltip.
</p>

<h3>Preferred Width Label Bug</h3>
<p>
	When the label for a button supports truncation, there is a bug getting the 
	correct preferred width after the button is shrunk to the point the 
	truncation ellipsis is hidden. Proper measurement never recovers after the 
	truncation ellipsis is hidden. This isn't an issue when the layout's 
	"usePreferredWidth" property is false because the button's measurements are 
	ignored.
</p>
<p>
	To compensate for this bug, included skins set the labelDisplay skin part 
	to a minWidth so that the truncation ellipsis is never hidden. In the 
	skin's layout, the label is hidden when its width falls below a certain 
	width.  This preserves the desired behaviour without triggering the 
	measurement bug.
</p>

<h3>Item Renderers</h3>
<p>
	The item renderer factory is the ButtonBarButton class in the Ardisia 
	ButtonBar package. Adds support for the closable states.
</p>

<h3>Accessibility &amp; Focus</h3>
<p>
	Field can be tabbed to and interacted with via the keyboard just like the 
	Flex SDK button bar classes
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CLOSE_BUTTON_CLICK</b><br>
	ardisia.components.buttonBar.events.ButtonBarEvent<br>
	Dispatched when a ButtonBarButton's closeButtonPart is clicked.
</p>
<p>
	<b>DRAG_STARTING</b><br>
	ardisia.components.buttonBar.events.ButtonBarEvent<br>
	Dispatched immediately before a button is dragged. Can be cancelled.
</p>
<p>
	<b>DRAG_START</b><br>
	ardisia.components.buttonBar.events.ButtonBarEvent<br>
	Dispatched when a button drag starts.
</p>
<p>
	<b>DRAGGING</b><br>
	ardisia.components.buttonBar.events.ButtonBarEvent<br>
	Dispatched while a button is dragging.
</p>
<p>
	<b>DRAG_END</b><br>
	ardisia.components.buttonBar.events.ButtonBarEvent<br>
	Dispatched when a drag ends.
</p>
<p>
	<b>BUTTON_CLOSING</b><br>
	ardisia.components.buttonBar.events.ButtonBarEvent<br>
	Dispatched when a button is about to be closed via the close button. Can be 
	cancelled.
</p>
<p>
	<b>BUTTON_CLOSE</b><br>
	ardisia.components.buttonBar.events.ButtonBarEvent<br>
	Dispatched when a button is closed via the close button.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the ButtonBar demo application for example code.
</p>
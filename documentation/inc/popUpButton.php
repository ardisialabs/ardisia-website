<h3>Overview</h3>
<p>
	The PopUpButton component combines both a basic button and a popup button 
	that opens and displays content when clicked. It is designed to deliver 
	similar functionality to the Halo PopUpButton, while supporting the Spark 
	skinning architecture.
</p>

<h3>Creating the PopUpButton component</h3>
<p>
	The PopUpButton extends the Flex SkinnableContainer class, which means that 
	it can be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the PopUpButton component</h3>
<p>
	The primary button functions as a normal button and dispatches normal button
	events.  For example, only the primary button dispatches "click" events. 
	Use the "label" property to change the text displayed in the primary button.
</p>
<p>
	The popup button will open popup content by default. Popup content is set 
	via the "popUp" property. It can also be declared inline in MXML like child 
	content of a container. 
</p>
<p>
	For example:
</p>
<pre class="prettyprint">
&lt;popUpButton:PopUpButton&gt;
	&lt;s:List&gt;
		&lt;s:ArrayCollection&gt;
			&lt;fx:String&gt;Selection A&lt;/fx:String&gt;
			&lt;fx:String&gt;Selection B&lt;/fx:String&gt;
			&lt;fx:String&gt;Selection C&lt;/fx:String&gt;
		&lt;/s:ArrayCollection&gt;
	&lt;/s:List&gt;
&lt;/popUpButton:PopUpButton&gt;
</pre>
<p>
	This example would open a List as the popup content.
</p>
<p>
	By default, popups are closed when the window is resized or a click occurs 
	outside of the popup.  To disable automatic closing, use the 
	"closeOnActivity" property.
</p>

<h3>Accessibility</h3>
<p>
	Field can be tabbed to and the primary button can be CLICKED via the SPACE 
	key when focused.
</p>

<h3>Default Property</h3>
<p>
	Default is the "popUp" property.  
</p>

<h3>Halo Menu</h3>
<p>
	A Halo Menu can not be added as "popUp" content. This is due to the fact
	that a Halo Menu handles opening/closing itself which is redundant with the
	PopUpButton class.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CLOSE</b><br>
	ardisia.components.popUpButton.events.PopUpButtonEvent<br>
	Dispatched when the popUp is closed.
</p>
<p>
	<b>OPEN</b><br>
	ardisia.components.popUpButton.events.PopUpButtonEvent<br>
	Dispatched when the popUp opens and is visible.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are included for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the PopUpButton demo application for example code.
</p>

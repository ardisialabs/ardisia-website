<h3>Overview</h3>
<p>
	ContextMenu that can be applied across an application or to specific 
	instances of UIComponents.
</p>

<h3>Flex SDK ContextMenu Limitations</h3>
<p>
	The Flex SDK ContextMenu class has some limitations.  No nested menus,  no 
	icons, max 15 items, 100 chars or less, and many reserved words. The 
	FlexContextMenu component solves those problems and makes customization much 
	easier, including extra flexibility regarding implementation.
</p>

<h3>Creating the FlexContextMenu</h3>
<p>
	Declare in Actionscript, inline within the "flexContextmenu" property of 
	UIComponent subclasses, or in the &lt;fx:declarations&gt; tag of the MXML 
	document.
</p>

<h3>Using the FlexContextMenu</h3>
<p>
	There are 3 ways to attach a FlexContextMenu to a visual element:
</p>
<ul>
	<li>Call flexContextMenu.setContextMenu(visualElement).</li>
	<li>Pass a reference to the FlexContextMenu to the target control's 
		"flexContextMenu" property.</li>
	<li>Create the FlexContextMenu inline via MXML.</li>
</ul>

<p>Data Binding
<pre class="prettyprint">
&lt;sampleApp:FlexContextMenu id="cm" /&gt;

&lt;s:BorderContainer id="bc" flexContextMenu={cm} /&gt;
</pre>
</p>
<p>MXML
<pre class="prettyprint">
&lt;s:Button label="Right Click - Applied Inline'"&gt;
	&lt;s:flexContextMenu&gt;
		&lt;flexContextMenu:FlexContextMenu&gt;
			&lt;flexContextMenu:dataProvider&gt;
				&lt;s:ArrayCollection&gt;
					&lt;fx:Object label="Inline ContextMenu"/&gt;
				&lt;/s:ArrayCollection&gt;
			&lt;/flexContextMenu:dataProvider&gt;
		&lt;/flexContextMenu:FlexContextMenu&gt;
	&lt;/s:flexContextMenu&gt;
&lt;/s:Button&gt;
</pre>
</p>
<p>Actionscript
<pre class="prettyprint">
var cm:FlexContextMenu = new FlexContextMenu();
var bc:BorderContainer = new BorderContainer();
cm.setContextMenu(bs);
</pre>
</p>
<p>
	All 3 blocks above above accomplish the same thing.  
</p>

<h3>UIComponent's "flexContextMenu " Property</h3>
<p>
	Thanks to the flexContextMenu property present on all UIComponents, it is 
	very easy to set this control as the context menu for controls that extend 
	UIComponent.
</p>

<h3>Ardisia Menu</h3>
<p>
	This component extends the Ardisia Menu class. See the docs for the Menu 
	class for instructions on populating and customizing an Ardisia Menu. 
</p>
<p>
	By default, the FlexContextMenu and sub-menus are a minimum of 190 pixels 
	wide.
</p>

<h3>ItemRenderer</h3>
<p>
	The default itemRenderer, FlexContextMenuItemRenderer, extends 
	MenuItemRenderer to make customization easier. Can be changed via styling.
</p>

<h3>Event Listeners and Removal From the Display List</h3>
<p>
	By default, once a component has a FlexContextMenu set, if the component is 
	removed from the stage the context menu links are also severed. In other 
	words, if a component is removed from the stage and added back to the stage, 
	context menus must be re-added. This is to facilitate garbage collection.
</p>

<h3>Compatibility and Support</h3>
<p>
	This control only works for users who have Flash player 11.2+ (supports 
	right click). Note, Flex 4.6 requires Flash player version 11.1.
</p>
<p>
	Right click will not work without a few steps before compiling:
</p>
<p>
	Make sure you are compiling with at least playerGlobal.swc 11.1+ and make 
	sure that the swf version is at least 15. 
</p>
<p>
	Add the following flag to the compiler to enforce version 15.
</p>
<pre class="prettyprint">
-swf-version=15
</pre>

<h3>Selected Custom Styles</h3>
<p>
	<b>itemRenderer</b><br>
	default ardisia.components.flexContextMenu.themes.spark.itemRenderers.FlexContextMenuItemRenderer<br>
	The itemRenderer to use with the control.
</p>

<h3>Example</h3>
<p>
	See the FlexContextMenu demo application for example code.
</p>
	



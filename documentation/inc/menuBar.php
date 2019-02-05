<h3>Overview</h3>
<p>
	Extended version of the Halo Menu and MenuBar that adds some visual 
	customization options. Also fixes some screen bounding issues, z-index bugs,
	and other various bugs.
</p>

<h3>Creating the Menu and MenuBar Component</h3>
<p>
	The Ardisia Menu and MenuBar extend the Flex SDK MenuBar class and can be 
	added to any container that implements IVisualElementContainer.
</p>

<h3>Using the Menu and MenuBar Component</h3>
<p>
	Functions identically to the Flex SDK Halo Menu and MenuBar except that 
	they add certain visual styling support via new styles and a different 
	item renderer factory. See the new options below.
</p>
<p>
	When displaying a Menu, be sure to use the .show() method of the Menu
	otherwise required bug fixing listeners will not be added.  Do not add
	a Menu manually via the PopupManager or addElement(). Likewise, only remove
	a Menu via the .hide() method. Otherwise, you should expect memeory leaks.
</p>

<h3>Item Renderers</h3>
<p>
	The MenuBar has hard-wired renderers for the bar items, located at 
	ardisia.components.menuBar.MenuBarItem.
</p>

<h3>Disabled</h3>
<p>
	The "backgroundSkin" and disabled icon from the Halo Menu and MenuBar 
	classes have been removed.
</p>

<h3>Accessibility &amp; Focus</h3>
<p>
	Tabbable and selectable via keyboard interaction just like the Halo Menu 
	and MenuBar.
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>hGap</b><br>
	default 2<br>
	Gap between the menu items.
</p>
<p>
	<b>menuVerticalOffset</b><br>
	default 0<br>
	Vertical offset to apply to the top level menu when displayed.
</p>

<p>
	<b>menuHorizontalOffset</b><br>
	default 0<br>
	Horizontal offset to apply to the top level menu when displayed.
</p>

<p>
	<b>menuMinWidth</b><br>
	default 190<br>
	The minWidth of the top level drop down menu.
</p>

<p>
	<b>menuVariableRowHeight</b><br>
	default true<br>
	Set whether menu row height is variable.
</p>
<p>
	<b>menuPaddingBottom</b><br>
	default NaN<br>
	Bottom padding for the drop down menu items.
</p>

<p>
	<b>menuPaddingLeft</b><br>
	default NaN<br>
	Left padding for the drop down menu items.
</p>

<p>
	<b>menuPaddingRight</b><br>
	default NaN<br>
	Right padding for the drop down menu items.
</p>

<p>
	<b>menuPaddingTop</b><br>
	default NaN<br>
	Top padding for the drop down menu items.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Spark, London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the MenuBar demo application for example code.
</p>

<h3>Overview</h3>
<p>
	The Ardisia ViewStack component is a container that only displays one of its 
	child elements at a time. Supports deferred instantiation for MXML content, 
	which means that the content of child elements will not be created until 
	they are selected and visible. This reduces initial latency and creates a 
	smaller memory footprint. All content can also be created on start up to 
	reduce the latency when users change the visible child content.
</p>
<h3>Creating a ViewStack Component</h3>
<p>
	The ViewStack extends SkinnableContainer and therefore can be added to any
	container that implements IVisualElementContainer.
</p>

<h3>Using the Component</h3>
<p>
	The ViewStack can accept any visual element that implements 
	IDeferredContanteOwner and IVisualElement.
</p>
<p>
	The only element that implements IDeferredContentOwner is 
	SkinnableContainer. Thus, all children of the ViewStack must be a 
	SkinnableContainer or a subclass of the SkinnableContainer class.
</p>

<h3>Controlling the Visible Child</h3>
<p>
	The ViewStack does not control the visible child. A typical way to 
	empower a user to change the visible child element is by laying out a TabBar 
	directly above the ViewStack and binding the TabBar's "selectedIndex" 
	property to the ViewStack's "selectedIndex" property.
</p>
<p>
	The selected content can also be changed by supplying a reference to the 
	selected child via the "selectedChild" property, rather than the 
	"selectedIndex".
</p>

<h3>Using Deferred Instantiation</h3>
<p>To enable deferred instantiation, be sure the "creationPolicy" is set to 
	"auto" (the default). When set, child content will be created only when the 
	content becomes visible and selected in the ViewStack. Remember that child 
	container elements must implement IDeferredContentOwner. 
</p>
<p>
	When the "creationPolicy" is set to "none", the createDeferredContent() 
	method must be called to create the child content.
</p>
<p>
	To create all child content on start up, set the "creationPolicy" of the
	ViewStack to "all".
</p>
<p>
	To defer initialization of some children but not others first set the 
	ViewStack "creationPolicy" to "auto" (the default). Then for any children 
	you want to create immediately, set their "creationPolicy" to "all". This 
	way, one can mix undeferred and deferred content in a single ViewStack.
</p>

<p>All Content Created On-Demand</p>

<pre class="prettyprint">
&lt;ardisia:ViewStack &gt;
    &lt;s:SkinnableContainer/&gt;
    &lt;s:SkinnableContainer/&gt;
&lt;/ardisia:ViewStack&gt;   
</pre>
<p>
	All Content Created On Startup
</p>
<pre class="prettyprint">
&lt;ardisia:ViewStack creationPolicy="all"&gt;
    &lt;s:SkinnableContainer/&gt;
    &lt;s:SkinnableContainer/&gt;
&lt;/ardisia:ViewStack&gt;
</pre>
<p>
	Mixed Content: On-Demand and On Startup
</p>
<pre class="prettyprint">
&lt;ardisia:ViewStack&gt;
    &lt;s:SkinnableContainer creationPolicy="all"/&gt; // created on startup
    &lt;s:SkinnableContainer creationPolicy="all"/&gt; // created on startup
    &lt;s:SkinnableContainer /&gt; // created on-demand
    &lt;s:SkinnableContainer /&gt; // created on-demand
&lt;/ardisia:ViewStack&gt;
</pre>
</p>

<h3>Layout</h3>
<p>
	The ViewStack will resize to the preferred dimensions of the selectedChild. 
	To lock the size, set the ViewStack's dimensions explicitly or via anchors 
	and then the selectedChild will be sized to fit the ViewStack.
	<p>Resize to Selected Child (viewstack dimensions not set)</p>
	<pre class="prettyprint">
&lt;ardisia:ViewStack&gt;
    &lt;s:SkinnableContainer width="400" height="400"/&gt;
    &lt;s:SkinnableContainer width="200" height="200"/&gt;
&lt;/ardisia:ViewStack&gt;</pre>
	</p>
	<p>Selected Child resized to ViewStack</p>
	<pre class="prettyprint">
&lt;ardisia:ViewStack width="500" height="500"&gt;
    &lt;s:SkinnableContainer /&gt;
    &lt;s:SkinnableContainer /&gt;
&lt;/ardisia:ViewStack&gt;</pre>
	</p>
<p>
	The ViewStack uses a very simple custom layout class, ViewStackLayout, 
	that sizes the visible and active child to the dimensions of the ViewStack.
</p>

<h3>Events</h3>
<p>
	Dispatches two custom events:
</p>
<p>
	<b>CHANGING</b><br>
	spark.events.IndexChangeEvent<br>
	Dispatched when the selectedChild is about to change. Can be cancelled.
</p>
<p>
	<b>CHANGE</b><br>
	spark.events.IndexChangeEvent<br>
	Dispatched when the selectedChild changes. Cannot be cancelled.
</p>

<h3>Custom Styles</h3>
<p>
	Supports styling options for the Border:
	<ul>
		<li>borderVisibility</li>
		<li>borderColor</li>
		<li>borderAlpha</li>
		<li>backgroundColor</li>
		<li>backgroundAlpha</li>
	</ul>
	<p>
		The styles are self explanatory.
	</p>
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins for the Spark theme are provided. The other themes only differ by
	the backgroundColor style set in the theme files.
</p>

<h3>Example:</h3>
<p>
	See the ViewStackDemo application for example code.
</p>

<h3>Overview</h3>
<p>
	The TimebarContainer component allows users to display and select time 
	periods with custom time intervals.
</p>

<h3>Creating the TimebarContainer Component</h3>
<p>
	The TimebarContainer extends the Flex SDK SkinnableContainer class and thus 
	can be added to any container that implements IVisualElementContainer.
</p>

<h3>Using the TimebarContainer Component</h3>
<p>
	The TimebarContainer works by first defining a series of "intervalModes" 
	that will determine what time intervals can be displayed. Each item renderer 
	displays a "IntervalMode". The most specific interval will be displayed. For 
	example, if the minimum visible duration is 1 week, then a time interval of 
	1 year will obviously not fit, but an interval of 1 day might. See the 
	ASDocs for the ardisia.components.timebarContainer.dataTypes.IntervalMode 
	class.
</p>
<p>
	Next, define the start and end time via the "periodBegin" and "periodEnd" 
	properties and the minimum displayed period via the 
	"minimumVisibleDuration".  Users can scroll and change the time period that 
	is visible or it can be set directly or retrieved via the 
	"visiblePeriodBegin" and "visiblePeriodEnd" properties.
</p>
<p>
	Child content can be added generally, exactly the same as a 
	SkinnableContainer. Often times, a simple chart makes sense.
</p>

<h3>Adding a Custom Interval Mode</h3>
<p>
	Each interval mode is defined by an IntervalMode object and sets how many 
	years, months, days, hours, minutes, and seconds are in the interval mode.
</p>
<p>
	The time span is additive for IntervalMode objects. In other words, if the 
	"years" value is 1 and the "months" value is 6, each renderer would span 1 
	year and 6 months.
</p>
<p>
	Also, supply a name for each IntervalMode object to pass to the item 
	renderers to provide them with some information as to how to display the 
	date information. For example, if displaying a single day per renderer, set 
	the "name" property on the IntervalMode object to "day" and then on the 
	renderer detect that the mode is "day" and parse Date objects with the names 
	of the days of the week.
</p>
<p>
	See the item renderer classes for further explanation of how to create 
	custom time intervals.
</p>
<p>
	Below is a list of interval modes defined in the demo application:
</p>
<pre class="prettyprint">
&lt;fx:Array id="intervalsExample"&gt;
	&lt;dataTypes:IntervalMode name="millennium" years="1000" /&gt;
	&lt;dataTypes:IntervalMode name="halfMillenium" years="500" /&gt;
	&lt;dataTypes:IntervalMode name="century" years="100" /&gt;
	&lt;dataTypes:IntervalMode name="halfCentury" years="50" /&gt;
	&lt;dataTypes:IntervalMode name="quarterCentury" years="25" /&gt;
	&lt;dataTypes:IntervalMode name="decade" years="10" /&gt;
	&lt;dataTypes:IntervalMode name="halfDecade" years="5" /&gt;
	&lt;dataTypes:IntervalMode name="year" years="1" /&gt;
	&lt;dataTypes:IntervalMode name="halfYear" months="6" /&gt;
	&lt;dataTypes:IntervalMode name="quarter" months="3" /&gt;
	&lt;dataTypes:IntervalMode name="month" months="1" /&gt;
	&lt;dataTypes:IntervalMode name="week" days="7" /&gt;
	&lt;dataTypes:IntervalMode name="day" days="1" /&gt;
	&lt;dataTypes:IntervalMode name="hours" hours="1" /&gt;
	&lt;dataTypes:IntervalMode name="thirtyMinutes" minutes="30" /&gt;
	&lt;dataTypes:IntervalMode name="tenMinutes" minutes="10" /&gt;
	&lt;dataTypes:IntervalMode name="minutes" minutes="1" /&gt;
	&lt;dataTypes:IntervalMode name="thirtySeconds" seconds="30" /&gt;
	&lt;dataTypes:IntervalMode name="fifteenSeconds" seconds="15" /&gt;
	&lt;dataTypes:IntervalMode name="seconds" seconds="1" /&gt;
&lt;/fx:Array&gt;
</pre>

<h3>Item Renderers</h3>
<p>
	There are two sets of interval item renderers: the header interval renderers 
	that sit at the top of the TimebarContainer and the generalized item 
	renderers. The header item renderers display longer time intervals and sit 
	above the general item renderers. The item renderer factories are defined in 
	the skin as "headerItemRendererFactoryPart" and the 
	"itemRendererFactoryPart" skin parts.
</p>
<p>
	Both sets of the renderers implement 
	ardisia.components.timebarContainer.interfaces.ITimebarContainerItemRenderer 
	and can be further customized to display new interval modes. See the code 
	for the TimebarContainerItemRendererBase to understand how the process of 
	adding modes works. It is rather easy to understand when looking at the code 
	directly. Subclass the 
	ardisia.components.timebarContainer.themes.baseClasses.TimebarContainerItemRendererBase 
	when creating custom time interval item renderers.
</p>
<p>
	The selection lasso is created by a skin part factory 
	"selectionLassoFactoryPart" and will only create a single item renderer. 
	It must implement 
	ardisia.components.timebarContainer.interfaces.ITimebarContainerSelectionLasso.
</p>

<h3>Selected Time Periods</h3>
<p>
	Users can select time periods if the "selectionEnabled" property is true, 
	and the selected time period can be set explicitly or retrieved via the 
	"selectionPeriodBegin" and "selectionPeriodEnd" properties.
</p>
<p>
	Users can also drag the selected time period. Use the "autoScrollThreshold" 
	property to set how close to the horizontal boundaries of the viewport the 
	user must drag before the TimebarContainer will automatically scroll.
</p>

<h3>Zooming In and Out</h3>
<p>
	Users can zoom in and out by using the resize buttons on the left and right 
	of the horizontal scroll bar or via the mouse wheel.  For the mouse wheel, 
	control the amount of zoom via the "zoomFactor" property.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	When a selected time lasso drag ends, it will animate into the snapped time 
	interval.  This animation is hard wired and cannot be customized without 
	subclassing.
</p>

<h3>Layout</h3>
<p>
	Layout is completely handled in the host component without the need for a 
	layout class.
</p>

<h3>Vertical Overflow</h3>
<p>
	If the child content overflows the TimebarContainer's viewport, dynamic 
	vertical scrollbars will be added automatically. See the 
	"vScrollBarFactoryPart" skin part to change the vertical scrollbar factory.
</p>

<h3>Considerations</h3>
<p>
	The contentGroup can have a massive width. So if a display object will be 
	extremely wide, remember to increase its "maxWidth" property.
</p>
<p>
	Also, remember that bitmaps have width restrictions under older Flash VMs.
</p>
<p>
	You can overwhelm the component if the number of time intervals grows too 
	large. For example, displaying every second for a hundred years will crash 
	the VM.
</p>

<h3>Default Property</h3>
<p>
	Child content, like a Flex SDK SkinnableContainer.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>VISIBLE_PERIOD_CHANGE</b><br>
	ardisia.components.timebarContainer.events.TimebarContainerEvent<br>
	Dispatched when the visible period changes.
</p>
<p>
	<b>SELECTED_PERIOD_CHANGE</b><br>
	ardisia.components.timebarContainer.events.TimebarContainerEvent<br>
	Dispatched when the selected period changes.
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>borderVisible</b><br>
	default true<br>
	True to display a border.
</p>
<p>
	<b>borderColor</b><br>
	default defaults.css<br>
	The color of the border.
</p>
<p>
	<b>borderAlpha</b><br>
	default 1<br>
	The alpha of the border.
</p>
<p>
	<b>paddingTop</b><br>
	default 60<br>
	Padding from the top for the contentGroup.
</p>
<p>
	<b>paddingBottom</b><br>
	default 0<br>
	Padding from the bottom for the contentGroup.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins and item renderers are provided for the Spark, London, and Stockholm 
	themes.
</p>

<h3>Example</h3>
<p>
	See the TimebarContainer demo application for example code.
</p>
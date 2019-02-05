<h3>Overview</h3>
<p>
	Simple Calculator class that evaluates expressions. Use the included 
	CalculatorGridEditor to attach the calculator to numerical fields in the 
	DataGrid.
</p>
<p>
	Supports multiline calculation and very large numbers or numbers with long 
	precision.
</p>

<h3>Creating the Calculator Component</h3>
<p>
	The Calculator extends SkinnableComponent and can be added to any container
	that implements IVisualElementContainer.
</p>

<h3>Using the Calculator Component</h3>
<p>
	To use, either click or type in expressions and hit the "=" button or the
	ENTER key.  The evaluated value is available via the "value" property.
</p>

<h3>Background</h3>
<p>
	Actionscript 2.0 and Javascript can both evaluate arbitrary expressions. 
	However, Actionscript 3.0 cannot evaluate arbitrary expressions. It would be 
	possible to use Javascript via ExternalInterface but my belief is that using 
	the ExternalInterface API for a simple calculator is overkill and would 
	create unexpected issues. The upshot is that this class has to evaluate 
	expression strings manually.
</p>

<h3>Animations &amp; Effects</h3>
<p>
	Value commits occur after a cash register type animation.  Built in support 
	for customizing the duration of the animation and the easer.
</p>

<h3>CalculatorGridEditor</h3>
<p>
	The CalculatorGridEditor class in the ardisia.components.calculator package 
	is designed to be attached to numerical fields in a Spark DataGrid.  It is 
	useful to make quick calculations and change the data in the data cell.   
</p>
<p>
	Attention was paid to focus: receiving focus and returning focus to the grid 
	based on clicks and key strokes, like the TAB and ENTER key.
</p>

<h3>Accessibility</h3>
<p>
	Full keyboard and numpad support when the Calculator has keyboard focus. 
	Evaluates the expression by default on the ENTER key, the "=" key, and when 
	the calculateButtonPart is clicked.
</p>

<h3>Adding New Operators</h3>
<p>
	By default, the only operators supported are ADD, SUBTACT, MULTIPLY, DIVIDE, 
	and SQRT.  To add new operators (E.G. MOD), add a button in the skin to add 
	the new operator to the text string and in the host, extend the 
	evaluateOperator() method. 
</p>

<h3>Decimal Marks and Locale</h3>
<p>
	The Calculator will display decimal marks according to the user's locale 
	setting.  For example, using a Canadian locale of "en-CA", decimal marks 
	are displayed as a period '.' . If the user's locale setting was German 
	"de-DE" then the Calculator would display a decimal as a comma ',' .
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CHANGE</b><br>
	ardisia.components.calculator.events.CalculatorEvent<br>
	Dispatched when the "value" property changes via user interaction.
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>backgroundColor</b><br>
	default #C2C2C2<br>
	The color of the background.
</p>
<p>
	<b>backgroundAlpha</b><br>
	default 1<br>
	The alpha of the background.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Included are skins for both the Spark,  London, and Stockholm themes.
</p>

<h3>Example</h3>
<p>
	See the Calculator demo application for example code.
</p>
	



<h3>Overview</h3>
<p>
	AutoComplete ComboBox.  Component filters and displays results as the user 
	enters text into the combo.
</p>

<h3>Creating the AutoComplete Component</h3>
<p>
	The AutoComplete extends the Flex ComboBox class.  It can be added as a 
	child to any container that implements IVisualElementContainer.
</p>

<h3>Using the AutoComplete Component</h3>
<p>
	Functions like a normal ComboBox with a few exceptions noted below.
</p>

<h3>DataProvider</h3>
<p>
	The dataProvider must implement ICollection otherwise the component will 
	throw an RTE.
</p>

<h3>Getting Selection (SelectedItem vs. SelectedIndex)</h3>
<p>
	The "selectedIndex" property is less useful in the AutoComplete than other 
	ListBase components due to filtering, which means that the "selectedIndex" 
	refers to the selection within the filtered store, not the original 
	dataProvider.  
</p>
<p>
	For example:  assume you have a dataProvider with 5 strings: <br>
<pre class="prettyprint">
var dp:ArrayCollection = new ArrayCollection(["A", "B", "C", "D", "E"]);, 
var ac:AutoComplete = new AutoComplete().dataProvider = dp;
</pre>
</p>
<p>
	The user selects "C".  The selectedIndex will be 0 but dp[0] will not return 
	the correct data.  However, ac.dataProvider[0] will return the correct 
	value because ac.dataProvider refers to to the filtered dataProvider, not 
	the original unfiltered dataProvider.
</p>
<p>
	The easiest way to avoid confusion is to use the "selectedItem" property to 
	retrieve the selected data rather than the selectedIndex.
</p>

<h3>AdvTextInput</h3>
<p>
	If the AutoComplete textInput skin part is an AdvTextInput, the AutoComplete 
	component then supports clearing and an optional icon embedded within the 
	textInput skin part.
</p>

<h3>Item Renderers</h3>
<p>
	As results are filtered the matches are highlighted in the possible 
	remaining choices in the drop down list.  ItemRenderers must implement 
	"IAutoCompleteRenderer" for this to work.  Currently, a relatively heavy 
	renderer is defined inline for both the Spark and London themes.  
</p>
<p>
	Pure actionscript renderers always had strange TLF issues. 
</p>

<h3>Focus</h3>
<p>
	Should handle focus like a vanilla ComboBox.
</p>

<h3>Accessibility</h3>
<p>
	Should handle keyboard input like a vanilla ComboBox.
</p>

<h3>Selected Custom Events</h3>
<p>
	See the AdvTextInput class for custom event(s).
</p>

<h3>Selected Custom Styles</h3>
<p>
	See the AdvTextInput class for custom styles(s).
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins for the Spark, London, and Stockholm themes are provided.
</p>

<h3>Example</h3>
<p>
	See the AutoComplete demo application for example code.
</p>
	



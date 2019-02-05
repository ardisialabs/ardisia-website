<h3>Overview</h3>
<p>
	Extended TextInput that adds styling support for an icon, as well as a 
	button to clear the text when the text is non-null.
</p>

<h3>Creating the TextInput Component</h3>
<p>
	The TextInput extends the TextInput class so it can be added to any
	container that implements IVisualElementContainer.
</p>

<h3>Using the TextInput Component</h3>
<p>
	This component functions just like the Spark TextInput, but an icon can be 
	added via the "iconClass" style and a clear button will be displayed to 
	make it easier for users to clear the text field.
</p>

<h3>Focus</h3>
<p>
	On focus, if text is non-null, the clear button skin part will be displayed,
	if it exists.  On focusOut, the clear button will be hidden unless the
	"hideClearButtonOnFocusOut" property is false.
</p>

<h3>Accessibility</h3>
<p>
	Same as a Flex SDK TextInput.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CLEAR</b><br>
	ardisia.components.textInput.events.TextInputEvent<br>
	Dispatched when the optional clear button skin part is clicked and the text 
	is cleared.
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>iconClass</b><br>
	Embedded graphics class for the icon. Expects the data in a format that a 
	BitmapImage element will understand.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin for the Spark theme is provided. Styling will change the border color
	depending on the theme used.
</p>

<h3>Example</h3>
<p>		
<pre class="prettyprint">
&lt;textInput:TextInput hideClearButtonOnFocusOut="true"
	iconClass="@Embed(source='search.png')"
	hideClearButtonOnFocusOut="true"
   	prompt="Enter Text Here"
	iconPaddingTop="1"
	iconPaddingRight="0"
	iconPaddingBottom="0"
	iconPaddingLeft="4" /&gt;
</pre>
</p>
<p>
	See the TextInput demo application for additional example code.
</p>



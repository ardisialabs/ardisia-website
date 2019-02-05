<h3>Overview</h3>
<p>
	The ColorPicker component consists of a button that when clicked pops up a 
	color swatch for users to choose a color from. 
</p>	

<h3>Creating the ColorPicker</h3>
<p>
	The ColorPicker extends SkinnableComponent so it can be added to any 
	container that implements IVisualElementContainer.
</p>

<h3>Using the ColorPicker</h3>
<p>
	By default, the ColorPicker, when opened, will display a web safe array of 
	colors.  Once a user selects a color, either by clicking or manually 
	entering it in the provided text field and hitting the ENTER key, the popup 
	will close and the selected color can be retrieved via the ColorPicker's 
	"selectedColor" property.
</p>

<h3>Customizing the Colors</h3>
<p>
	To customize the colors displayed, pass an array of the desired colors in 
	hex or uint RGB format to the dataProvider.  To add textual descriptions of 
	the colors, pass an array of objects with both the color and textual 
	description of the color in the object. Then, add the relevant field names 
	to the "labelField" and the "colorField" properties of the ColorPicker.
</p>
<p>
	Example of a ColorPicker with a custom dataProvider with textual 
	descriptions of the colors:
</p>
<pre class="prettyprint">
&lt;fx:Array id="dp"&gt;
	&lt;fx:Object name="Red" color="0xFF0000" /&gt;
 	&lt;fx:Object name="Green" color="0x00FF00" /&gt;
 	&lt;fx:Object name="Dark Blue" color="0x0000FF" /&gt;
 	&lt;fx:Object name="Yellow" color="0xFFFF00" /&gt;
 	&lt;fx:Object name="Cyan" color="0x00FFFF" /&gt;
 	&lt;fx:Object name="Violet" color="0xFF00FF" /&gt;
 	&lt;fx:Object name="Orange" color="0xFF6600" /&gt;
 	&lt;fx:Object name="Purple" color="0x8000FF" /&gt;
&lt;/fx:Array&gt;

&lt;colorPicker:ColorPicker dataProvider={dp} 
			 colorField="color" 
			 labelField="name" /&gt;
</pre>

<h3>ColorPicker can open an Advanced Color Picker</h3>
<p>
	An ColorSpacePicker can also be opened from within the ColorPicker 
	popup to give users the ability to select any color under the sun. To 
	prevent users from opening the ColorSpacePicker, either set the 
	"showColorSpacePicker" property to false, or remove the ColorSpacePicker 
	button skin part from the ColorPicker skin.
</p>

<h3>Manual Input</h3>
<p>
	By default, in the ColorPicker popup, the hovered color's hex value is 
	displayed in a text input skin part.  Users can also manually enter a color 
	in the input field in hex format.  Also, if colors have custom textual 
	descriptions, they will be displayed in the text input.
</p>
<p>
	It may be desirable to prevent users from entering colors manually and  
	restrict them to picking one of the provided colors.  One way to accomplish 
	this is to hide the text input altogether by either setting the 
	"showTextField" property to false, or remove the text field skin part from 
	the ColorPicker skin. Another way to restrict user input is to keep the 
	"showTextField" set to true and set the ColorPicker's "editable" property to 
	false. This way the text input skin part is read-only.
</p>

<h3>Transparency</h3>
<p>
	By default, the swatch popup displays a button that selects transparent as 
	the selected color. Transparency is represented by a value of "NaN" in the 
	"selectedColor" property. To disable the user's ability to select 
	transparency, either set the "showTransparency" property to false, or remove 
	the transparency button skin part from the ColorPicker skin.
</p>

<h3>Native Cursor</h3>
<p>
	The only custom styles relate to the native cursor displayed when hovering 
	over the popup. By default, all provided themes use an eyedropper cursor.
</p>

<h3>Full Screen Color Selection</h3>
<p>
	Set the "enableOutsideHoverColorSelect" property to true to select the color 
	of any pixel on the screen.
</p>

<h3>Accessibility</h3>
<p>
	Field can be tabbed to and opened via the SPACE key when focused. Hex values 
	can be entered via the keyboard and committed via the ENTER key when the 
	picker is open.
</p>

<h3>ColorPicker Events</h3>
<p>
	The ColorPicker component dispatches seven custom events:
</p>
<p>
	<b>VALUE_COMMIT</b><br>
	mx.events.FlexEvent<br>
	Dispatched when the "selectedColor" property changes.
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.colorPicker.events.ColorPickerEvent<br>
	Dispatched when the selectedColor" property changes due to user interaction.
</p>
<p>
	<b>OPEN</b><br>
	ardisia.components.colorPicker.events.ColorPickerEvent<br>
	Dispatched when the popup part is opened and displayed.
</p>
<p>
	<b>CLOSE</b><br>
	ardisia.components.colorPicker.events.ColorPickerEvent<br>
	Dispatched when the popup part is closed.
</p>
<p>
	<b>MOUSE_DOWN_OUTSIDE </b><br>
	ardisia.components.colorPicker.events.ColorPickerEvent<br>
	Dispatched when the popup is open and a click occurs outside the popup.
</p>
<p>
	<b>COMMIT_FOCUS_INDEX</b><br>
	ardisia.components.colorPicker.events.ColorPickerEvent<br>
	Dispatched when a focused color is committed to the selectedColor.
</p>
<p>
	<b>FOCUS_INDEX_CHANGE</b><br>
	ardisia.components.colorPicker.events.ColorPickerEvent<br>
	Dispatched when the focused color in the picker changes on mouse over.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	The ColorPicker comes with skins for the Spark, London, and Stockholm 
	themes.
</p>

<h3>Example:</h3>
<p>
	See the ColorPicker demo application for example code.
</p>

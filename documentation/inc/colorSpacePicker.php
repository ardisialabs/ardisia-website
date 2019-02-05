<h3>Overview</h3>
<p>
	A color picker that supports selection via the HSV, HSL, and RGB color 
	spaces.
</p>

<h3>Creating the ColorSpacePicker</h3>
<p>
	The component extends SkinnableComponent, so the picker can be added to any 
	container that supports IVisualElementContainer.
</p>

<h3>Using the ColorSpacePicker</h3>
<p>
	The picker supports selection along 3 color spaces: HSV, HSL, and RGB.
</p>
<p>
	HSV = Hue, Saturation, Value<br>
	HSL = Hue, Saturation, Luminosity<br>
	RGB = Red, Green, Blue
</p>
<p>
	Change the color space via the "colorSpace" property. The first three 
	letters denote the color space used ("HSV", "HSL", "RGB"), and the letter 
	after the hyphen denotes the color vector that will be set via the secondary 
	spectrum. E.G. for HSV-H, the color space used will be HSV and the secondary 
	spectrum will display the hue, while the primary spectrum will display the 
	saturation and value.
</p>
<p>
	Get the selected color via the "selectedColor" property.  The selected 
	color is stored as a uint RGB value and the property is bindable.
</p>
<p>
	The selected color can also be set via the "selectedColor" property 
	directly.  To set the selected color via a HSL or HSV color definition, use 
	the "setSelectedHSLColor()" or "setSelectedHSVColor()" methods. The 
	advantage to using these methods is that it is not necessary to convert 
	your HSL/HSV color to RGB before updating the selected color. Also, if you 
	set the selectedColor via these methods, the exact HSL/HSV color information 
	can be retrieved via the read-only properties: "selectedHSLColor" and 
	"selectedHSVColor".
</p>

<h3>Color Space Considerations</h3>
<p>
	Conversion between color spaces can lose information.  Converting a HSL 
	color to RGB and back to HSL (or HSV) may not end up as the same color. 
	Also, color information can be lost.  For example: assume a HSL color has a 
	hue of 0 and a saturation and lightness of 50.  When this color is converted 
	to RGB, the uint RGB value is 0.  If this RGB value is converted back to 
	HSL, the saturation and lightness are lost and the new HSL color is hue 0, 
	saturation 0, and lightness 0.
</p>
<p>
	This can lead to problems when a user defines a color using HSL or HSV, 
	converts it to RGB and sets the "selectedColor" property to the converted 
	RGB value (selectedColor only accepts uint RGB values).  This class will 
	then convert the new RGB selected color to HSL and HSV which may be 
	different than the HSL or HSV color the user just tried to set.
</p>
<p>
	To avoid this problem, if you have defined a color using the HSV or HSL 
	color space, set the selected color via the appropriate set function 
	("setSelectedHSVColor()" or "setSelectedHSLColor()").  These functions will 
	store the set color perfectly in the contextual color space and convert it 
	to the other color spaces. Then the exact HSL or HSV color can be retrieved 
	via the read-only properties: "selectedHSLColor" and "selectedHSVColor".
</p>
<p>
	Keep this conversion problem in mind when converting the RGB "selectedColor" 
	to other color spaces in the application.
</p>

<h3>Layout</h3>
<p>
	Set the width of the secondary spectrum via the "secondarySpectrumWidth" 
	property and the gap between the secondary and primary spectrum via the the 
	"spectrumGap" property.
</p>
<p>
	The primary spectrum will fill the leftover available space.
</p>
	
<h3>Animations &amp; Effects</h3>
<p>
	Supports animating the primary and secondary markers via a Move animation.
	Users can change the duration and easer.  Set the duration to 0 to skip the 
	animation altogether.
</p>

<h3>Accessibility</h3>
<p>
	Not accessible but the provided examples integrate form fields that 
	allow a user to set the selectedColor directly via accessible keyboard
	navigation.
</p>

<h3>Custom Events</h3>
<p>
	Dispatches 2 events:
</p>
<p>
	<b>VALUE_COMMIT</b><br>
	mx.events.FlexEvent<br>
	Dispatched when the "selectedColor" property changes for any reason.
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.colorSpacePicker.events.ColorSpacePickerEvent<br>
	Dispatched when the "selectedColor" property changes due to user 
	interaction.
</p>

<h3>Custom Styles</h3>
<p>
	2 Custom styles:
</p>
<p>
	<b>borderColor</b><br>
	Color of the border.
</p>
<p>
	<b>borderAlpha</b><br>
	Alpha of the border.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A single skin is provided for the spark theme.
</p>

<h3>Example</h3>
<p>
	See the ColorSpacePicker application for example code.
</p>
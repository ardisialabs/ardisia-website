<h3>Overview</h3>
<p>
	
</p>

<h3>Creating the XXX</h3>
<p>
	
</p>

<h3>Using the XXX</h3>
<p>
	
</p>

<h3>DataProvider</h3>
<p>
	
</p>

<h3>Item Renderers</h3>
<p>
	All renderers must implement IRatingRenderer.
</p>
<p>
	
</p>

<h3>Animations &amp; Effects</h3>
<p>
	
</p>

<h3>Layout</h3>
<p>
	
</p>

<h3>Focus</h3>
<p>
	
</p>

<h3>Accessibility</h3>
<p>
	Field can be tabbed to and opened via the SPACE key when focused.  Hex values can be
	entered via the keyboard and commited via the ENTER key when the picker is open.
</p>

<h3>Default Property</h3>
<p>
	xxx.
</p>

<h3>Selected Custom Events</h3>
<p>
	<b>CHANGE</b><br>
	ardisia.components.captcha.events.CaptchaVisualEvent<br>
	Dispatched when the token changes.
</p>

<h3>Selected Custom Styles</h3>
<p>
	<b>borderPadding</b><br>
	default 1<br>
	Dispatched when the token changes.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	
</p>

<h3>Example</h3>
<p>
	See the XXX demo application for example code.
</p>

<pre class="prettyprint">
&lt;fx:Array id="dp"&gt;
	&lt;fx:Object name="Bright Red" color="0xFF0000" /&gt;
 	&lt;fx:Object name="Super Green" color="0x00FF00" /&gt;
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
	



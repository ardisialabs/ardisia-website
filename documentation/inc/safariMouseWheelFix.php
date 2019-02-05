<h3>Overview</h3>
<p>
	The SafariMouseWheelFix class fixes the lack of mouse wheel support for
	Flex content running within the Safari Web Browser.
</p>

<h3>Using the SafariMouseWheelFix</h3>
<p>
	To use, simply add an instance of the class to the fx:Declarations tag or
	initialize in Actionscript. If the content is not being run within the
	Safari browser, then the logic in the class will be simply ignored.
</p>
<p>
	In MXML:
</p>
<pre class="prettyprint">
&lt;fx:Declarations &gt;
	&lt;ardisia:SafariMouseWheelFix /&gt;
&lt;/fx:Declarations;/&gt;
</pre>
<p>
	In Actionscript:
</p>
<pre class="prettyprint">
&lt;s:Application initialize="new SafariMouseWheelFix()" &gt;
</pre>
<p>
	It really is that simple.
</p>

<h3>Limitations</h3>
<p>
	The principal limitation is that the MouseEvent will not pass accurate 
	values for the properties that pertain to whether certain keys or the mouse
	buttons are down.  Specifically the following properties on the MouseEvent:
</p>
<ul>
	<li>altKey</li>
	<li>buttonDown</li>
	<li>commandKey</li>
	<li>controlKey</li>
	<li>ctrlKey</li>
	<li>shiftKey</li>
</ul>
<p>
	If it is important that your software know if a key or button was down while 
	the wheel was interacted with, you cannot rely on the MouseEvent.  Instead, 
	custom keyDown/buttonDown listeners should be added.
</p>
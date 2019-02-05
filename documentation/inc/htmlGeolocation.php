<h3>Overview</h3>
<p>
	The Geolocation component uses the HTML5 API of modern browsers to retrieve 
	the user's geographic location. 
</p>

<h3>AIR</h3>
<p>
	This component will <strong>NOT</strong> work within the AIR environment. 
	For HTML support in AIR, try the native mx.controls.HTML and 
	flash.html.HTMLLoader classes.
</p>

<h3>Requirements</h3>
<p>
	Only works if the browser supports HTML5 geolocation and ExternalInterface.
</p>

<h3>Flash Geolocation</h3>
<p>
	Flash has both Geolocation and GeolocationEvent classes for mobile devices 
	with location sensors. This class brings some of that functionality to 
	desktop based applications.
</p>

<h3>Creating the HtmlGeolocation Component</h3>
<p>
	The component is not visual and is not added to the display list.  Extends 
	EventDispatcher and should either be declared in the &lt;fx:Declarations&gt; 
	tag or in Actionscript.
</p>

<h3>Using the HtmlGeolocation Component</h3>
<p>
	Attach an UPDATE and ERROR listener and call getCurrentPosition() to 
	retrieve the user location. Since the location data is returned 
	asynchronously, an event handler is required to get the location data. See 
	the events in the htmlGeolocation package for the information returned by 
	the update and error events.
</p>

<h3>Security</h3>
<p>
	To test in the local domain, on the "preinitialize" event, add the following 
	code to the "preinitialize" event handler:
<pre class="prettyprint">
Security.allowDomain("*");
</pre>
</p>
<p>
	Even with the above code, this component may fail in local testing in some 
	browsers.
</p>
<p>
	Note that users can deny access to their location if desired.  Notice of 
	rejection is available via the error event. 
</p>

<h3>Example</h3>
<p>
<pre class="prettyprint">
&lt;htmlGeolocation:HtmlGeolocation  id="htmlGeolocation"&gt;
	error="Alert.show(event.errorType, 'ERROR', 4, this, null, null, 0, 
		moduleFactory);"
	update="geolocation_updateHandler(event)"
&lt;/htmlGeolocation:HtmlGeolocation&gt;
</pre>
</p>
<p>
	See the HtmlGeolocation application for more example code.
</p>	

<h3>Known Bugs</h3>
<p>
	Firefox 4+: if the user does not allow location tracking by selecting "Not 
	Now" to the permission prompt, it will not fire the errorHandler, so the 
	developer will not get an indication of failure.  Plan accordingly. May be a 
	good idea to set a timeout handler.
</p>

<h3>Custom Events</h3>
<p>
	<b>UPDATE</b><br>
	ardisia.components.htmlGeolocation.events.HtmlGeolocationEvent<br>
	Dispatched when the ExternalInterface returns position data after a call to
		getCurrentPosition().
</p>
<p>
	<b>ERROR</b><br>
	ardisia.components.htmlGeolocation.events.HtmlGeolocationEvent<br>
	Dispatched when the ExternalInterface returns an error after a call to 
		getCurrentPosition().
</p>



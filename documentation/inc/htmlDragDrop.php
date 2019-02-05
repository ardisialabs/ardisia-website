<h3>Overview</h3>
<p>
	Supports native drag and drop of file(s) from the user's desktop to a Flex 
	application via the HTML5 drag and drop API. Currently supported in most 
	modern browsers.
</p>

<h3>AIR</h3>
<p>
	This component will <strong>NOT</strong> work within the AIR environment. 
	For HTML support in AIR, try the native mx.controls.HTML and 
	flash.html.HTMLLoader classes.
</p>

<h3>Creating the HtmlDragDrop Component</h3>
<p>
	The HtmlDragDrop component extends the HtmlFrame Component and can be added 
	to any container that supports IVisualElementContainer.
</p>

<h3>Using the HtmlDragDrop Component</h3>
<p>
	This component can accept multiple dropped files at one time. When multiple 
	files are dropped together, the "dragLoad" event will fire for each file 
	dropped.  Drops can be cancelled via the "dragDropStarting" event.
</p>
<p>
	See the Ardisia HtmlDragDropFile and HtmlDragDropEvent classes for the file 
	information available to the Flex app during dragging and dropping.
</p>
<p>
	Sample Usage:<br>
	<i>Simple:</i><br>
	The simplest implementation would be to listen for "dragLoad" events on the 
	HtmlDragDrop component, and use the "file" property on the "dragLoad" event 
	to get the HtmlDragDropFile object. The "data" property on the 
	HtmlDragDropFile object is a ByteArray of the information contained within 
	the dropped file. The HtmlDragDropFile object will also have the file's 
	name, size, mime type, and last modified date information.
</p>
<p>
	More advanced implementations could add progress indicators, file type 
	checking, and error checking via the other events available.  See the ASDocs 
	for all of the events that are fired in a native drop operation.
</p>
<p>
	For example, the progress of the upload is determined via the 
	dragProgress event.  This could be used to provide feedback to the user.
</p>
<p>
	Drop Events:
	<ul>
		<li>dragEnter</li>
		<li>dragOver</li>
		<li>dragLeave</li>
		<li>dragDropStarting </li>
		<li>dragLoadStart </li>
		<li>dragProgress</li>
		<li>dragLoad</li>
	</ul>
</p>

<h3>Error Handling</h3>
<p>
	Multiple error events are dispatched when necessary:
	<ul>
		<li>notFoundErr </li>
		<li>notReadableErr </li>
		<li>abortErr </li>
		<li>browserNoSupportErr  </li>
		<li>unknownErr </li>
	</ul>
</p>

<h3>Considerations</h3>
<p>
	Everything may not work as expected in older browsers. For example, the 
	HTML5 specification indicates that the user should be able to change the 
	type of drag/drop via the "dropEffect" and "effectAllowed" properties, but 
	these are only observed by Chrome. Also, Firefox may not handle native 
	cursors properly during drag / drop operations.
</p>

<h3>Additional Notes</h3>
<p>
	<ul>
		<li>The drop cannot be cancelled in the browser; it can only be 
			cancelled via Flex.</li>
		<li>Reading in the data as a binary string or text does not work; 
			however readAsDataURL does work and the data comes down encoded as a 
			base 64 string that this class decodes to a ByteArray.</li>
		<li>Most of the processing time is for Flex to decode the data, not for 
			the browser to encode the data.</li>
		<li>The Flex base 64 decoder is rather slow... may be faster to do the 
			decoding in Javascript.</li>
	</ul>
</p>

<h3>TODOs</h3>
<p>
	Dragging files out to the desktop from the browser is only possible in 
	Chrome, so wait to implement when the ability is more cross browser; see:  
	http://www.thecssninja.com/javascript/gmail-dragout
</p>

<h3>Custom HtmlDragDropEvent Event</h3>
<p>
	<b>DRAG_ENTER</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched when the user drags over the component.
</p>
<p>
	<b>DRAG_OVER</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched continuously when the user is dragging over the component.
</p>
<p>
	<b>DRAG_LEAVE</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched when the user drags out of the component.
</p>
<p>
	<b>DRAG_DROP_STARTING</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched immediately after a drop is initiated over the component. Can be 
		cancelled to prevent the drop. The first drop event to fire.
</p>
<p>
	<b>DRAG_PROGRESS</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched when a drop file is initially being read into memory.
</p>
<p>
	<b>DRAG_ABORT</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched when a drop is aborted.
</p>
<p>
	<b>DRAG_LOAD_START</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched when a drop file is initially being read into memory.
</p>
<p>
	<b>DRAG_LOAD</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropEvent<br>
	Dispatched when a dropped file has been fully processed by both Javascript 
		and Actionscript and is available as a ByteArray.
</p>

<h3>Custom HtmlDragDropErrorEvent Event</h3>
<p>
	<b>NOT_FOUND_ERR</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropErrorEvent<br>
	Dispatched when the dropped file was not found by the browser.
</p>
<p>
	<b>NOT_READABLE_ERR</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropErrorEvent<br>
	Dispatched when the dropped file was not readable by the browser.
</p>
<p>
	<b>ABORT_ERR</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropErrorEvent<br>
	Dispatched when the dropped file was being read into a data buffer, but was 
		aborted.
</p>
<p>
	<b>BROWSER_NO_SUPPORT_ERR</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropErrorEvent<br>
	Dispatched when the browser does not support file drag and drop.
</p>
<p>
	<b>UNKNOWN_ERR</b><br>
	ardisia.components.htmlDragDrop.events.HtmlDragDropErrorEvent<br>
	Dispatched when the error was unknown.
</p>

<h3>Example</h3>
<p>
	See the HtmlDragDrop demo application for additional example code.
</p>

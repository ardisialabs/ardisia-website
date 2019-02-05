<h3>Overview</h3>
<p>
	The CursorManager component adds, manages, and displays mouse cursors 
	natively within the user's operating system, rather than using the Flash 
	Player. Native cursors are more responsive and do not suffer from the 
	flicker of Flash managed pseudo cursors.
</p>
<p>
	If the user's Flash Player does not support native mouse cursors (v. 10.2+), 
	this component will fall back to displaying Flash managed bitmaps as the 
	mouse cursor.
</p>
<p>
	The Ardisia Component Set includes default cursors to mimic the typical 
	cursors found in web browsers.  These default cursors can easily be modified 
	through the theme css file.
</p>
<p>
	Some cursors also support a color theme (black or white).  The color theme 
	is initially set by analysis of the user's operating system.  OS X users get 
	a black theme and all others get a white theme.  Developers can force a 
	black or white theme for all users regardless of the OS the user is using.
</p>

<h3>Creating the CursorManager</h3>
<p>
	This class is completely static so there is no need to initialize it before 
	use.
</p>

<h3>Using the CursorManager</h3>
<p>
	For a cursor to be available to the CursorManager, it must first be 
	registered via the registerCursor() method.  After being registered it can 
	be displayed and removed via setCursor() and removeCursor() methods 
	respectively. As cursors are set via the setCursor() method, a list of set 
	cursors is created and the priorities of the cursors are tracked. This list 
	is available via the "cursorList" property. The highest priority cursor is 
	displayed (ties in priority resolve to the more recently set cursor).
</p>
<p>
	Cursors that are removed from the cursorList are not unRegistered and can 
	be reused at any time. To remove a cursor entirely, call unRegisterCursor().
</p>
<p>
	Note: native cursors can be removed by certain components that alter the 
	mouse. For example, a Spark TextInput will set the mouse to BEAM on 
	'rollOver' and AUTO on 'rollOut'. To add to the headache, different browsers 
	behave differently. To fix these issues you may need to run 
	"validateCursor()" when mousing out of some controls. A more dramatic 
	solution would be to call validateCursor() on a global "rollOut" handler.
</p>
<p>
	The best way to avoid the above mentioned cursor issues is to only add 
	custom cursors when hovering over a specific control or for a limited time.  
	Use the default mouse pointer as the persistent cursor. Trying to use 
	a custom cursor constantly may create headaches and conflicts with default 
	mouse handling by certain controls and the operating system. The exception 
	is the DefaultCursors.BUSY cursor. This is the only cursor designed to be 
	persistent and displayed constantly until removed.  When the BUSY cursor is 
	active, global mouseOver and mouseOut handlers are added to maintain the 
	BUSY cursor at all times until a different cursor is set.
</p>

<h3>HotSpot</h3>
<p>
	The cursor hotSpot is the location on the bitmap where the mouse events are 
	dispatched.
</p>

<h3>Setting the Color Mode</h3>
<p>
	Set the color of certain default cursors via the "colorMode" property. 
	Possible values are a "black" theme, a "white" theme, or an "auto" theme.  
	The "auto" theme works by using a black mouse cursor theme if the Flash 
	Player is running under OS X and white for all others. Note: once a black 
	or white cursor is registered, the cursor must be unregistered to change 
	the color mode.
</p>

<h3>Default Cursors</h3>
<p>
	A list of cursors is provided to mimic typical cursors found in web browsers 
	in both a black and white theme. See the DefaultCursors file in this 
	package. These cursors are automatically registered on startup. To not 
	register these cursors, set the relevant styles to null in the stylesheet or 
	in the local CSS file. Keep in mind that the included cursors are very small 
	(typically smaller than 1 KB per cursor), so that in most cases the 
	convenience of their inclusion outweighs the additional file size.
</p>
<p>
	It is possible to overwrite the cursors in the DefaultCursors class 
	(except for the OS cursors), by registering a custom cursor with the same 
	name, but the easiest way to customize these cursors is by changing the 
	relevant style in the relevant CSS files.  See the defaults.css file in the 
	Ardisia package. Each default cursor's bitmap and hotSpot can be changed via 
	CSS.
</p>

<h3>Removing Cursors</h3>
<p>
	Remove cursors by providing the name of the cursor, the priority, and 
	whether to remove all cursors with the provided name/priority or the last 
	cursor set. Additionally, cursors may be set with a group token and cursors 
	may be removed via the group token.  This can be useful to remove all 
	cursors that serve a specific function without tracking each name/priority 
	individually. Note that removing a cursor is not the same as un-registering 
	the cursor. Unregistered cursors are not available until they are registered 
	again, while removed cursors can be set again without being re-registered.
</p>

<h3>Adding Custom Cursors</h3>
<p>
	To use a custom cursor, the cursor must be first registered via the 
	registerCursor() method.  After registration, use the cursor via 
	setCursor(). The exception to this rule is that all of the cursors in the 
	DefaultCursors class are registered on application start.
</p>
<p>
	Cursor asset data must be of type BitmapData or a BitmapAsset (embedded 
	jpeg, png, gif, etc.). This is to enforce parity between the native mouse 
	cursors and Flash managed Bitmap cursors. This is useful in the case that 
	native cursors are not supported and a fallback to Flash managed cursors is 
	necessary or the "forceNonNative" parameter was true when setCursor() was 
	called. 
</p>
<p>
	Native cursors can be a maximum of 32 * 32 pixels. This is an inflexible 
	limitation.
</p>

<h3>Non-Native Cursor Fallback</h3>
<p>
	If the user's Flash Player does not support native mouse cursors (v. 10.2+), 
	then the cursor will still be displayed via Flash automatically.  It is also 
	possible to force the cursor to be displayed via Flash methods rather than 
	natively via the "forceNonNative" flag in the setCursor() method.
</p>
<p>
	Note: even if custom native cursors are not supported, OS cursors defined 
	in the flash.ui.MouseCursor package can still be set natively. By default, 
	a cursor will be displayed as a native cursor if the user's version of the 
	Flash Player supports native cursors. 
</p>

<h3>Flex SDK CursorManager</h3>
<p>
	The CursorManager is not designed to be used in conjunction with the 
	Flex SDK's CursorManager class or by manually setting the cursor using 
	Mouse.hide().  To function as expected, it is advised to use the 
	CursorManager class to manage the cursor always or not at all. 
</p>

<h3>Context Menus and Right Click</h3>
<p>
	Custom cursors may have issues with native, OS managed context menus.  
</p>
<p>
	If a user opens a native ContextMenu via a right click, this manager will 
	revalidate the cursor to keep any possible custom cursors displayed. 
	However, when a native (OS managed) context menu is open very strange 
	unpredictable mouse events are dispatched and custom mouse behaviour isn't 
	reliable.
</p>
<p>
	Thus, it is highly recommended that developers either route all right clicks 
	to an Ardisia FlexContextMenu or disable the OS context menu altogether by 
	adding a global right_click mouse listener if your app makes regular use of 
	the CursorManager.
</p>
<p>
	Issues are not resolved by using a Flash managed pseudo cursor. See bug at: 
	http://bugs.adobe.com/jira/browse/SDK-26552. 
</p>

<h3>Custom Styles</h3>
<p>
	Each of the default cursors has a CSS rule for the embedded bitmap data and 
	a rule for the hotSpot. Change the included cursors or add new cursors via 
	CSS rules.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	The Ardisia Component Set includes styles for all of the default cursors, 
	some in both black and white themes.
</p>

<h3>Example</h3>
<p>
	Set cursor on 'rollOver' and remove the cursor on 'rollOut':
</p>
<pre class="prettyprint">
&lt;s:BorderContainer width="200" height="200" 
		   horizontalCenter="0" verticalCenter="0"
		   rollOver="CursorManager.setCursor(DefaultCursors.NOT_ALLOWED, 1, 
		   	null, false, systemManager)"
		   rollOut="CursorManager.removeCursor(DefaultCursors.NOT_ALLOWED, 
		   	1, false)"/&gt;
</pre>
<p>
	See the CursorManager application for more example code.
</p>


	



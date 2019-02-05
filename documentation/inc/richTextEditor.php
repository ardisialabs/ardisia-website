<h3>Overview</h3>
<p>
	Text editor toolbar that is designed to manage the Text Layout Framework 
	("TLF") for RichEditableText based controls. All supported functions are 
	routed through an EditManager so all functions can be undone/redone.
</p>
<p>
	Manage a RichEditableText control by setting a reference to it in the 
	RichTextEditor component's "target" property. This flexibility allows the 
	user to float the editor in a panel, or attach it directly to a component 
	such as a TextArea.
</p>

<h3>Creating the RichTextEditor Component</h3>
<p>
	The RichTextEditor extends SkinnableComponent.  It can be added as a child 
	to any container that implements IVisualElementContainer.
</p>

<h3>Removing Buttons</h3>
<p>
	To reduce the number of buttons and functionality, remove the undesired 
	buttons from the skin. All skin parts are optional.
</p>

<h3>Keyboard Shortcuts</h3>
<p>
	Keyboard shortcuts are supported out of the box.
</p>
<p>
	Shortcuts:
	<ul>
		<li>Undo - ctrl + z</li>
		<li>Redo - ctrl + y</li>
		<li>Italic - ctrl + i</li>
		<li>Underline - ctrl + u</li>
		<li>Bold - ctrl + b</li>
		<li>Text Align Left - ctrl + l</li>
		<li>Text Align Center  - ctrl + e</li>
		<li>Text Align Right  - ctrl + r</li>
		<li>Text Align Justify  - ctrl + j</li>
		<li>Numerical List  - ctrl + shift + 7</li>
		<li>Disc List  - ctrl + shift + 8</li>
	</ul>
</p>

<h3>Focus</h3>
<p>
	Focus can be tricky. Some fields in the RichTextEditor, such as TextInputs 
	will take focus away from the editable text by necessity. The editor will 
	restore focus to the target editable text on changes.
</p>

<h3>Text Selection Color</h3>
<p>
	The target's "selectionHighlighting" property is set so selection 
	highlighting is preserved even when focus on the target editable text is 
	lost. This way, selection will persist when the user interacts with the 
	RichTextEditor.  
</p>
<p>
	It is important to note that even if "selectionHighlighting" is set to 
	ALWAYS, by default the color of the selected text will change when the 
	target editable text loses focus. For some people, this is the expected 
	behavior. For others, it is jarring.
</p>
<p>
	To prevent the selection color from changing on focus out, change the
	"inactiveTextSelectionColor" and the "unfocusedTextSelectionColor" styles to
	the same value as the "focusedTextSelectionColor" style.
</p>
<pre class="prettyprint">
&lt;s:TextArea inactiveTextSelectionColor="{getStyle('focusedTextSelectionColor')}"
	    unfocusedTextSelectionColor="{getStyle('focusedTextSelectionColor')}"/&gt;
</pre>
<p>
	The example code above has a TextArea with the same color for 
	"focusedTextSelectionColor", "inactiveTextSelectionColor", and 
	"unfocusedTextSelectionColor" styles.
</p>

<h3>Accessibility</h3>
<p>
	The RichTextEditor supports keyboard interaction.
</p>

<h3>TLF</h3>
<p>
	TLF is somewhat buggy so expect some unexpected behavior. For example: for 
	lists, bullet points are left aligned regardless of the text alignment.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A single skin is provided for the Spark theme.
</p>

<h3>Notes</h3>
<p>
	It is not advised to attach multiple instances of this editor to a single 
	TextFlow. It will work, but it will not update correctly.
</p>

<h3>Example</h3>
<p>
	See the RichTextEditor demo application for example code.
</p>
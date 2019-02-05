<h3>Overview</h3>
<p>
	The text classes included in the AutoFitText package automatically set their 
	font size to fill up their available space without truncation. Provide 
	explicit dimensions to fit an exact area.
</p>

<h3>Creating the AutoFitText components</h3>
<p>
	The package includes 3 components: (1) The AutoFitRichText that extends the
	Spark RichText component, (2) the AutoFitLabel that extends the Spark Label 
	component, and (3) the AutoFitFTETextField that extends the Spark 
	FTETextField component.
</p>

<h3>Using the AutoFitText component</h3>
<p>
	All of the components will fit the available space automatically, even when 
	resized.
</p>

<h3>Fitting Process</h3>
<p>
	Fitting works by using a recursive function to locate a non-truncating size.
	The "maxFontSize" and "minFontSize" properties determine the start and end 
	bounds of the search.
</p>

<h3>Performance Considerations</h3>
<p>
	Reduce the space between the "maxFontSize" and "minFontSize" to increase 
	performance. E.G. if it is known that the desired text size will be within 
	10 - 20 pixels, then set the min/max to 10 to 20 to decrease the fit time.
</p>
<p>
	The number of line breaks cannot exceed the number of words.  This is to 
	prevent the default behaviour that may split one long word into multiple 
	lines. Also, small words should not be wrapped. Use the "ignoreWordLength" 
	property to skip small length words in the word count. The default is to not 
	count words less than 4 characters in length.
</p>
<p>
	The "precisionThreshold" property is used to determine when the fit is 
	'good enough', measured in font pixel size. Higher values will increase 
	performance but not fit as optimally.
</p>

<h3>Measured Dimensions</h3>
<p>
	Since the components fit the available space, measured dimensions have no
	purpose or meaning so developers should not rely on them for layout.
</p>

<h3>Scaling</h3>
<p>
	Scaling will not work because the entire component will scale, not just the 
	text.
</p>

<h3>AutoFitRichText</h3>
<p>
	Slower than the AutoFitLabel and the AutoFitFTETextField but supports the 
	Text Layout Framework ("TLF").
</p>
<p>
	RichText does a better job of not wrapping intra-word than the Label via 
	support for the "breakOpportunity" style which is set by default to "auto".
</p>

<h3>AutoFitLabel</h3>
<p>
	Faster than the AutoFitRichText component, but since the Spark Label does 
	not support TLF, intra-word wrapping cannot be stopped via the 
	"breakOpportunity" style. 
</p>

<h3>AutoFitFTETextField</h3>
<p>
	AutoFitFTETextfield is very fast. Much, much faster than the AutoFitLabel or 
	AutoFitRichText, but it does not implement IVisualElement so it can only be 
	added to DisplayObjectContainers.  Also, AutoFitFTETextfield instances do 
	not participate in layout or CSS, so any changes in size/position/styling 
	need to be accomplished manually in the parent and parent layout. Also, the 
	fitText() method must be called manually because it will not be called in 
	response to size changes.
</p>
<p>
	Therefore, the primary purpose of the AutoFitFTETextField is as a label in 
	an item renderer extending UIComponent.  The focus is on performance and not 
	simplicity.
<p>
	The parent must call the fitText() method manually when any relevant 
	property changes.
</p>
<p>
	Since the FTETextField does not support TLF, intra-word wrapping cannot be 
	stopped via the "breakOpportunity" style. RichText does support the 
	"breakOpportunity" style.
</p>
<p>
	See the TreeMap demo for an example of large numbers of AutoFitFTETextField 
	components.
</p>

<h3>Intra-word Line Breaks</h3>
<p>
	If there is a problem, use the AutoFitRichText component.
</p>

<h3>Examples</h3>
<p>
	See the AutoFitText demo application for example code.
</p>

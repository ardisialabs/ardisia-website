<h3>Overview</h3>
<p>
	The ProgressDisplay Components provide easy and customizable ways to provide 
	feedback to users regarding the progress of some process, most likely a 
	loading process.
</p>
<p>
	The displays come in two flavors: (i) the ProgressDisplayIndeterminate 
	component, and the (ii) ProgressDisplayDeterminate component.
</p>

<h3>Creating the ProgressDisplays</h3>
<p>
	Both ProgressDisplays extend the Ardisia Pane class.
</p>

<h3>"ProgressDisplayIndeterminate" vs. "ProgressDisplayDeterminate"</h3>
<p>
	The "ProgressDisplayIndeterminate" component has no determined time to end.  
	This is why it is indeterminate.  The "ProgressDisplayDeterminate" is 
	designed to track the progress of a process explicitly and close upon 
	completion.  This is why it is determinate.
</p>
<p>
	This is why the default ProgressDisplayIndeterminate skin plays a snake 
	animation (no beginning or end) and the default ProgressDisplayDeterminate 
	skin displays an arc that has a specific beginning and end.
</p>

<h3>Using the ProgressDisplays</h3>
<p>
	Both display types are not designed to be directly added to the displayList.  
	Rather, they are designed to be initialized and opened by calling show() 
	and removed by calling close(). Use the modal flag to make the progress 
	displays modal and blocking.
</p>
<p>
	To set a timeout for the display of the ProgressDisplays use the 
	"timeoutDuration" property. This is useful in case the process never 
	completes so the display will eventually be removed.
</p>
<p>
	A delay before display can be added via the "delayBeforeFloat" property.
	This is useful to cancel the display of the ProgressDisplay if the duration 
	would have been very short or the user changed his/her mind. Similarly, the 
	"minimumFloatTime" property can be set to ensure that the display will be 
	visible for at least a certain duration.  Useful to prevent short or 
	flickering display durations.
</p>
<p>
	To delay removal after close() is called, use the "delayAfterCloseFloat" 
	property.
</p>

<h3>Messages</h3>
<p>
	Update the label message delivered by the displays via the "label" property. 
	Not supported by the default skin for the ProgressDisplayDeterminate class.  
	To add support to the ProgressDisplayDeterminate class, add the relevant 
	skin part to a custom skin.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	Skins are provided for the Determinate and Indeterminate ProgressDisplays 
	for the Spark theme.  By default, the ProgressDisplayIndeterminate skin uses 
	a snake animation and the ProgressDisplayDeterminate skin draws an arc as 
	the process progresses.
</p>

<h3>Example</h3>
<p>
	See the ProgressDisplays demo application for example code.
</p>


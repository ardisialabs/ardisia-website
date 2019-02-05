<h3>Overview</h3>
<p>
	The CAPTCHA package includes a component to display the CAPTCHA security 
	token as a visual CAPTCHA (CaptchaVisual) and a component that can read out 
	each letter of the token (CaptchaAudio).  By using both the visual and audio 
	CAPTCHA components, a robust CAPTCHA can be built.
</p>	

<h3>Creating the CAPTCHA</h3>
<p>
	CaptchaVisual extends SkinnableTextBase to inherit text styles and can be 
	added to any container that implements IVisualElementContainer.  The 
	CaptchaAudio component extends EventDispatcher and is not a visual 
	component.  To use it, either create an instance in the 
	&lt;fx:Declarations&gt; tag of an MXML document or create an instance in 
	Actionscript and store a reference in your application.
</p>

<h3>Using the CAPTCHA</h3>
<p>
	By default, no method to validate user input is provided.  The components 
	will generate the CAPTCHA or read the CAPTCHA but it is up to user to create
	the actual test.  See the CaptchaDemo application for an example of 
	an integrated visual and audio CAPTCHA with validation.
</p>

<h3>Visual CAPTCHA</h3>
<p>
	Set the token to be displayed via the "token" property.  To use a randomized 
	token, set the desired length via the "randomTokenLength" property and set 
	the token property to null. The allowable token characters are not 
	restricted, but if you plan on using an audio CAPTCHA, limiting the token to 
	letters and numbers is advisable. By default, random tokens only use letters 
	and numbers.  To manually retrieve a randomized string, use the 
	getRandomString() method and set it to the token property.
</p>
<p>
	Due to extending the SkinnableTextBase, all text styles are accepted and 
	will be pushed to the label skin part. By default the text is black and 
	compressed via the trackingLeft/Right styles. See the defaults.css file 
	for all of the set styles.
</p>
<p>
	The text distortion is created by a custom version of the 
	DisplacementMapFilter class from the Flex SDK.
</p>
<p>
	To add a perlin noise background and/or a polyline, include the required 
	skin parts and set the "drawNoise" and "drawPolyLine" properties to true, 
	respectively. 
</p>

<h3>Extracting BitmapData from the Visual CAPTCHA</h3>
<p>
	The visual CAPTCHA is not an image. It is at most a perlin noise bitmap, 
	with a label above the noise, and a polyline above everything else. It may 
	be desirable to extract the entire component as a bitmap.  To do so, use 
	the BitmapData.draw() method or the ImageSnapshot class on the 
	CaptchaVisual.
</p>

<h3>Audio CAPTCHA</h3>
<p>
	Simple class used to read a CAPTCHA string.
</p>
<p>
	Note: sound assets are not embedded because of the size and the download 
	time implications. Instead, each individual character is downloaded as an 
	mp3 file. Asset URLs are fetched according to the "assetURLFunction" 
	property. Supply a function to the "assetURLFunction" function that will 
	return the location of the mp3 file for the passed character.
</p>
<p>
	English (female Midwestern American accent) mp3 files are provided for the 
	characters A-Z, 1-9. They are located in the demo application and they are
	released under the Apache License version 2.0.
</p>

<h3>Security</h3>
<p>
	This visual CAPTCHA is not very secure.  Any spam bot that could inspect 
	swf properties during runtime could easily figure out the token and pass 
	the CAPTCHA test.  The token would be available to the bot via both the 
	"token" property of the CaptchaVisual and via the "text" property of the 
	label display skin part. 
</p>
<p>
	Improve security by using the CaptchaVisual component to generate 
	the CAPTCHA, then extract the bitmap data to create a bitmap.  Next, store 
	the hash of the CAPTCHA token, remove the CaptchaVisual from the display 
	list and remove all references to the token, expect for its hash. This way, 
	all references to the token have been removed, which would make it more 
	difficult for a swf inspector to extract the token value.  To test if the 
	user passes the CAPTCHA, compare the hash of the user provided string with 
	the stored hash of the token.
</p>

<h3>CaptchaVisual Events</h3>
<p>
	The CaptchaVisual component dispatches a single custom event:
</p>
<p>
	<b>CHANGE</b><br>
	ardisia.components.captcha.events.CaptchaVisualEvent<br>
	Dispatched when the token changes.
</p>

<h3>CaptchaAudio Events</h3>
<p>
	The CaptchaAudio component dispatches five custom events:
</p>
<p>
	<b>SPEECH_START</b><br>
	ardisia.components.captcha.events.CaptchaAudioEvent<br>
	Dispatched when the speech begins playing.
</p>
<p>
	<b>SPEECH_END</b><br>
	ardisia.components.captcha.events.CaptchaAudioEvent<br>
	Dispatched when the speech ends.
</p>
<p>
	<b>LOAD_START</b><br>
	ardisia.components.captcha.events.CaptchaAudioEvent<br>
	Dispatched when all of the audio assets have begun loading.
</p>
<p>
	<b>LOAD_END</b><br>
	ardisia.components.captcha.events.CaptchaAudioEvent<br>
	Dispatched when the audio assets are fully loaded.
</p>
<p>
	<b>LOAD_ERROR</b><br>
	ardisia.components.captcha.events.CaptchaAudioEvent<br>
	Dispatched when loading the audio assets has thrown an error.
</p>

<h3>Themes &amp; Skinning</h3>
<p>
	A skin for the CaptchaVisual component is included for the Spark theme. See 
	the application demo for a rollup example of using the CaptchaVisual and the 
	CaptchaAudio components to create a working CAPTCHA.
</p>

<h3>Example:</h3>
<p>
	See the CaptchaDemo application for example code.
</p>

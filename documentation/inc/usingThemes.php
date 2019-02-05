<h3>Default Theme</h3>
<p>
	The default theme for custom components is Spark, just like other Flex 
	components included with the Flex SDK. In fact, some Ardisia components only 
	have skins defined for the Spark theme and most Ardisia components assume 
	that the stylesheet for the Spark theme will be included in all projects. 
	Therefore, it is extremely important that the "defaults.css" file, which is 
	located in the root of the Library package, is embedded into the SWC file.
</p>
<p>
	When a "defaults.css" file located in the root of a SWC file, it is 
	automatically included in projects. Therefore, there is no need to 
	explicitly include the "/defaults.css" file in the MXML root application 
	file for your projects.
</p>
<p>
	That being said, when components have skins defined for custom themes that 
	are not Spark, developers should use skins from these custom themes because 
	they are generally superior to Spark theme skins.
</p>

<h3>Custom Themes</h3>
<p>
	All custom themes define skins and styles for the same components. Custom 
	themes can be found in the "/ardisia/themes/" directory with each theme's 
	"defaults.css" stylesheet located at the top of its respective directory.
</p>
<p>
	To use a custom theme, the recommended way is to simply include the<br> 
	"/ardisia/themes/ <i>theme name</i> &nbsp;/defaults.css" file in the root of 
	your application.
</p>
For example: <br>
<pre class="prettyprint">
&lt;s:Application xmlns:fx="http://ns.adobe.com/mxml/2009"
	xmlns:s="library://ns.adobe.com/flex/spark"
	xmlns:mx="library://ns.adobe.com/flex/mx"&gt;

	&lt;fx:Style source="ardisia/themes/stockholm/defaults.css" /&gt;
</pre>
<p>
	This is not the only way to include a custom theme but it is most reliable. 
</p>

<h3>Fonts</h3>
<p>
	The default font for custom themes is Arial 12. The demo application uses
	an embedded open source OpenSans font.
</p>

<h3>Using FTE in MX Components</h3>
<p>
	If you want to use the FTE text engine with MX components, include the 
	"frameworks/projects/spark/MXFTEText.css" file. See 
	<a href="http://help.adobe.com/en_US/flex/using/WSda78ed3a750d6b8f-26a13bbf123c441239d-8000.html">this link</a> 
	for more information.
</p>